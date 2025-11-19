<?php

namespace App\Console\Commands;

use App\Models\ColombiaMayorBeneficiario;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ImportarColombiaMayorCommand extends Command
{
    protected $signature = 'colombia-mayor:importar {archivo}';
    protected $description = 'Importa beneficiarios de Colombia Mayor desde un archivo Excel';

    public function handle()
    {
        $archivo = $this->argument('archivo');

        if (!file_exists($archivo)) {
            $this->error("El archivo {$archivo} no existe.");
            return 1;
        }

        $this->info('Iniciando importación...');
        $spreadsheet = IOFactory::load($archivo);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        // Eliminar encabezado
        array_shift($rows);

        $bar = $this->output->createProgressBar(count($rows));
        $bar->start();

        $insertados = 0;
        $errores = 0;

        // Inserción en lotes para mejor rendimiento
        $chunks = array_chunk($rows, 1000);

        foreach ($chunks as $chunk) {
            $data = [];
            
            foreach ($chunk as $row) {
                // Asumiendo el orden: Estado, Nombre, Apellido, Número Documento
                if (empty($row[3])) {
                    $errores++;
                    continue;
                }

                $data[] = [
                    'estado' => $row[0] ?? 'Activo',
                    'nombre' => trim($row[1] ?? ''),
                    'apellido' => trim($row[2] ?? ''),
                    'numero_documento' => trim($row[3]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                $bar->advance();
            }

            try {
                DB::table('colombia_mayor_beneficiarios')->insertOrIgnore($data);
                $insertados += count($data);
            } catch (\Exception $e) {
                $this->error("\nError al insertar lote: " . $e->getMessage());
                $errores += count($data);
            }
        }

        $bar->finish();

        $this->newLine(2);
        $this->info("Importación completada:");
        $this->info("- Registros insertados: {$insertados}");
        $this->info("- Errores: {$errores}");

        return 0;
    }
}