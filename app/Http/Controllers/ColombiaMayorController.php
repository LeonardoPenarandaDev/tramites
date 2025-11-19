<?php

namespace App\Http\Controllers;

use App\Models\ColombiaMayorBeneficiario;
use Illuminate\Http\Request;

class ColombiaMayorController extends Controller
{
    public function index()
    {
        return view('tramites.colombia-mayor');
    }

    public function consultar(Request $request)
    {
        try {
            $request->validate([
                'cedula' => 'required|string|max:20'
            ], [
                'cedula.required' => 'El número de documento es requerido',
                'cedula.max' => 'El número de documento no puede exceder 20 caracteres'
            ]);

            // Limpiar el número de documento
            $documento = preg_replace('/[^0-9]/', '', $request->cedula);

            \Log::info('Buscando documento: ' . $documento);

            $beneficiario = ColombiaMayorBeneficiario::porDocumento($documento)->first();

            if (!$beneficiario) {
                \Log::info('No se encontró el documento: ' . $documento);
                return response()->json([
                    'success' => false,
                    'message' => 'No se encontró ningún beneficiario con el documento proporcionado.'
                ], 404);
            }

            \Log::info('Beneficiario encontrado: ' . $beneficiario->nombre_completo);

            return response()->json([
                'success' => true,
                'data' => [
                    'nombre_completo' => $beneficiario->nombre_completo,
                    'numero_documento' => $beneficiario->numero_documento,
                    'estado' => $beneficiario->estado,
                    'mensaje' => $this->getMensajePorEstado($beneficiario->estado)
                ]
            ]);
        } catch (\Exception $e) {
            \Log::error('Error en consulta Colombia Mayor: ' . $e->getMessage());
            \Log::error('Trace: ' . $e->getTraceAsString());
            
            return response()->json([
                'success' => false,
                'message' => 'Error al consultar: ' . $e->getMessage()
            ], 500);
        }
    }

    private function getMensajePorEstado(string $estado): string
    {
        return match($estado) {
            'Activo' => 'Usted se encuentra registrado como beneficiario activo del programa Colombia Mayor.',
            'Inactivo' => 'Su registro en el programa Colombia Mayor se encuentra inactivo. Por favor, acérquese a las oficinas para más información.',
            'Suspendido' => 'Su registro en el programa Colombia Mayor se encuentra suspendido temporalmente.',
            'En Proceso' => 'Su solicitud está siendo procesada. Pronto recibirá información sobre su estado.',
            'Potencial Beneficiario' => 'Usted está registrado como potencial beneficiario del programa Colombia Mayor. Su solicitud está siendo evaluada.',
            'Inscrito' => 'Usted se encuentra inscrito en el programa Colombia Mayor. Espere la confirmación de su beneficio.',
            default => 'Estado no definido. Por favor, consulte en las oficinas.'
        };
    }
}