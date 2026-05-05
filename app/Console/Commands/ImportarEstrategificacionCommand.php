<?php

namespace App\Console\Commands;

use App\Models\Estratificacion;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

class ImportarEstrategificacionCommand extends Command
{
    protected $signature = 'estratificacion:importar {archivo}';
    protected $description = 'Importa datos de estratificación desde un archivo Excel';

    public function handle()
    {
        // Aumentar límite de memoria para archivos grandes
        ini_set('memory_limit', '2G');
        set_time_limit(0);

        $archivo = $this->argument('archivo');

        if (!file_exists($archivo)) {
            $this->error("El archivo {$archivo} no existe.");
            return 1;
        }

        $this->info('Iniciando importación de estratificación...');
        $this->info('Tamaño del archivo: ' . round(filesize($archivo) / 1024 / 1024, 2) . ' MB');
        $this->info('Cargando archivo Excel (esto puede tomar tiempo)...');

        try {
            // Usar reader optimizado para archivos grandes
            $reader = new Xlsx();
            $reader->setReadDataOnly(true);

            $spreadsheet = $reader->load($archivo);
            $sheet = $spreadsheet->getActiveSheet();

            $highestRow = $sheet->getHighestRow();
            $this->info("Total de filas encontradas: {$highestRow}");

            // Obtener encabezados usando el nuevo método
            $headers = [];
            for ($col = 1; $col <= 11; $col++) {
                $colLetter = Coordinate::stringFromColumnIndex($col);
                $headers[] = $sheet->getCell($colLetter . '1')->getValue();
            }
            $this->info('Columnas detectadas: ' . implode(' | ', array_filter($headers)));

            $bar = $this->output->createProgressBar($highestRow - 1);
            $bar->start();

            $insertados = 0;
            $errores = 0;
            $data = [];
            $batchSize = 500;

            // Mapear columnas a letras
            $cols = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'];

            // Procesar fila por fila (empezando desde fila 2, después del encabezado)
            // Columnas del Excel:
            // A: FICHA CATASTRAL (puede estar vacía, usar B como alternativa)
            // B: FICHA NACIONAL
            // C: MATRICULA INMOBILIARIA
            // D: PROPIETARIO
            // E: IDENTIFICACIÓN
            // F: DIRECCION DEL PREDIO
            // G: HECTAREAS
            // H: AREA TOTAL (no usamos)
            // I: AREA CONSTRUIDA
            // J: DESTINO ECONOMICO
            // K: ESTRATO
            // L: AVALUO

            for ($row = 2; $row <= $highestRow; $row++) {
                $fichaCatastral = trim($sheet->getCell('A' . $row)->getValue() ?? '');
                $fichaNacional = trim($sheet->getCell('B' . $row)->getValue() ?? '');

                // Si no hay ficha catastral, usar ficha nacional como identificador
                if (empty($fichaCatastral)) {
                    $fichaCatastral = $fichaNacional;
                }

                // Validar que tenga al menos un identificador
                if (empty($fichaCatastral)) {
                    $errores++;
                    $bar->advance();
                    continue;
                }

                $data[] = [
                    'ficha_catastral' => $fichaCatastral,
                    'ficha_nacional' => $fichaNacional,
                    'matricula_inmobiliaria' => trim($sheet->getCell('C' . $row)->getValue() ?? ''),
                    'propietario' => trim($sheet->getCell('D' . $row)->getValue() ?? ''),
                    'identificacion' => trim($sheet->getCell('E' . $row)->getValue() ?? ''),
                    'direccion_predio' => trim($sheet->getCell('F' . $row)->getValue() ?? ''),
                    'hectareas' => $this->parseDecimal($sheet->getCell('G' . $row)->getValue()),
                    'area_construida' => $this->parseDecimal($sheet->getCell('I' . $row)->getValue()),
                    'destino_economico' => trim($sheet->getCell('J' . $row)->getValue() ?? ''),
                    'estrato' => trim($sheet->getCell('K' . $row)->getValue() ?? ''),
                    'avaluo' => $this->parseDecimal($sheet->getCell('L' . $row)->getValue()),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                // Insertar en lotes
                if (count($data) >= $batchSize) {
                    try {
                        DB::table('estratificaciones')->insertOrIgnore($data);
                        $insertados += count($data);
                    } catch (\Exception $e) {
                        $this->error("\nError al insertar lote: " . $e->getMessage());
                        $errores += count($data);
                    }
                    $data = [];
                }

                $bar->advance();
            }

            // Insertar registros restantes
            if (!empty($data)) {
                try {
                    DB::table('estratificaciones')->insertOrIgnore($data);
                    $insertados += count($data);
                } catch (\Exception $e) {
                    $this->error("\nError al insertar lote final: " . $e->getMessage());
                    $errores += count($data);
                }
            }

            $bar->finish();

            // Liberar memoria
            $spreadsheet->disconnectWorksheets();
            unset($spreadsheet);

            $this->newLine(2);
            $this->info("Importación completada:");
            $this->info("- Registros insertados: {$insertados}");
            $this->info("- Errores/Omitidos: {$errores}");

        } catch (\Exception $e) {
            $this->error("Error al procesar el archivo: " . $e->getMessage());
            return 1;
        }

        return 0;
    }

    private function parseDecimal($value)
    {
        if (empty($value)) {
            return null;
        }

        // Limpiar el valor y convertirlo a decimal
        $value = str_replace([',', ' '], ['.', ''], $value);
        return is_numeric($value) ? floatval($value) : null;
    }
}
