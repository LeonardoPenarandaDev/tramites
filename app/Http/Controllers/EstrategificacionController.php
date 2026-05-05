<?php

namespace App\Http\Controllers;

use App\Models\Estratificacion;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EstrategificacionController extends Controller
{
    public function index()
    {
        return view('tramites.certificado-estratificacion');
    }

    public function buscar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'codigo_predial' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'El código predial es requerido.',
            ], 422);
        }

        $codigoPredial = trim($request->codigo_predial);

        $predio = Estratificacion::porFichaCatastral($codigoPredial)->first();

        if (!$predio) {
            return response()->json([
                'success' => false,
                'message' => 'No se encontró ningún predio con el código catastral ingresado.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'ficha_catastral' => $predio->ficha_catastral,
                'direccion_predio' => $predio->direccion_predio,
                'estrato' => $predio->estrato,
                'propietario' => $predio->propietario,
            ],
        ]);
    }

    public function generarCertificado(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'documento_identidad' => 'required|string',
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'codigo_predial' => 'required|string',
            'destino' => 'required|string',
            'direccion_usuario' => 'required|string',
            'telefono' => 'required|string',
            'correo' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor complete todos los campos requeridos.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $codigoPredial = trim($request->codigo_predial);
        $predio = Estratificacion::porFichaCatastral($codigoPredial)->first();

        if (!$predio) {
            return response()->json([
                'success' => false,
                'message' => 'No se encontró el predio con el código catastral ingresado.',
            ], 404);
        }

        // Generar número de radicado único
        $numeroRadicado = $this->generarNumeroRadicado();

        // Datos para el certificado
        $data = [
            'nombre_completo' => trim($request->nombres . ' ' . $request->apellidos),
            'documento_identidad' => $request->documento_identidad,
            'ficha_catastral' => $predio->ficha_catastral,
            'direccion_predio' => $predio->direccion_predio,
            'estrato' => $predio->estrato,
            'destino' => $request->destino,
            'numero_radicado' => $numeroRadicado,
            'fecha_solicitud' => now()->format('d/m/Y'),
            'fecha_expedicion' => now(),
            'direccion_usuario' => $request->direccion_usuario,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
        ];

        $pdf = Pdf::loadView('pdf.certificado-estratificacion', $data);
        $pdf->setPaper('letter', 'portrait');

        $nombreArchivo = 'certificado_estratificacion_' . $numeroRadicado . '.pdf';

        return $pdf->download($nombreArchivo);
    }

    private function generarNumeroRadicado()
    {
        // Formato: MMDDYYYYHHMMSS + número aleatorio
        // Ejemplo del PDF: 61220251419195
        $fecha = now();
        $numero = $fecha->format('mdY') . $fecha->format('His');

        return $numero;
    }
}
