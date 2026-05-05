<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado de Estratificación</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            line-height: 1.6;
            color: #000;
            padding: 20px 50px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header img {
            max-height: 80px;
            margin-bottom: 10px;
        }

        .header-title {
            font-size: 14pt;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 30px;
        }

        .certifica {
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
            margin: 30px 0;
            letter-spacing: 3px;
        }

        .content {
            text-align: justify;
            margin-bottom: 20px;
        }

        .content p {
            margin-bottom: 20px;
        }

        .highlight {
            font-weight: bold;
        }

        .fecha-expedicion {
            margin-top: 20px;
            margin-bottom: 40px;
        }

        .consulta-link {
            margin-bottom: 60px;
        }

        .consulta-link a {
            color: #0066cc;
            text-decoration: underline;
        }

        .firma-section {
            margin-top: 60px;
        }

        .firma-imagen {
            height: 60px;
            margin-bottom: 5px;
        }

        .firma-nombre {
            font-weight: bold;
            font-size: 11pt;
            margin-top: 10px;
        }

        .firma-cargo {
            font-size: 10pt;
            font-weight: bold;
        }

        .firma-proyectado {
            font-size: 9pt;
            margin-top: 5px;
        }

        .datos-usuario {
            margin-top: 50px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }

        .datos-usuario h4 {
            font-size: 11pt;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .datos-usuario p {
            font-size: 10pt;
            margin-bottom: 5px;
        }

        .datos-usuario .label {
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('img/logo.png') }}" alt="Alcaldía de San José de Cúcuta">
        <div class="header-title">
            LA SUBDIRECCION DE SERVICIOS PUBLICOS DOMICILIARIOS DEL<br>
            DEPARTAMENTO ADMINISTRATIVO DE PLANEACION
        </div>
    </div>

    <div class="certifica">CERTIFICA</div>

    <div class="content">
        <p>
            Que, el señor(a) <span class="highlight">{{ $nombre_completo }}</span> identificado con la Cédula de
            ciudadanía No <span class="highlight">{{ $documento_identidad }}</span>, solicita la certificación de estratificación socioeconómica del predio
            <span class="highlight">{{ $ficha_catastral }}</span>, el día {{ $fecha_solicitud }} de los corrientes, mediante solicitud radicada con número
            <span class="highlight">{{ $numero_radicado }}</span>. Con destino a <span class="highlight">{{ $destino }}</span>
        </p>

        <p>
            Que, el predio identificado catastralmente con el número <span class="highlight">{{ $ficha_catastral }}</span> y ubicado en la
            dirección <span class="highlight">{{ $direccion_predio }}</span>, se clasifica en el estrato <span class="highlight">ESTRATO {{ $estrato }}</span>, según el
            Decreto 0127 del 19 de Junio de 1998 mediante el cual se adoptó la estratificación
            socioeconómica urbana del Municipio de San José de Cúcuta y es el vigente a la fecha.
        </p>

        <p class="fecha-expedicion">
            Se expide la presente, a petición del interesado, a los {{ $fecha_expedicion->format('d') }} días del mes de {{ $fecha_expedicion->translatedFormat('F') }} de {{ $fecha_expedicion->format('Y') }}.
        </p>


        <p>Sin otro particular,</p>
    </div>

    <div class="firma-section">
        <img src="{{ public_path('img/firma.jpg') }}" alt="Firma" class="firma-imagen">
        <div class="firma-nombre">MICHEL LLEHANSY MEDINA RESTREPO</div>
        <div class="firma-cargo">Subdirector de Gestión y Supervisión Servicios públicos Domiciliarios</div>
        <div class="firma-proyectado">Proyectó Jorge R. Morales</div>
    </div>

    <div class="datos-usuario">
        <h4>DATOS APORTADOS POR USUARIO</h4>
        <p><span class="label">Dirección aportada por usuario:</span> {{ $direccion_usuario }}</p>
        <p><span class="label">Correo Electrónico:</span> {{ $correo }}</p>
        <p><span class="label">Teléfono:</span> {{ $telefono }}</p>
    </div>
</body>
</html>
