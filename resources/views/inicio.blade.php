<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trámites y Servicios - Alcaldía de Cúcuta</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
        .resultados {
            margin-top: 15px;
        }
        
        .resultados a {
            display: block;
            font-weight: bold;
            font-size: 14px;
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-decoration: none;
            color: #2a5db0;
            transition: background 0.3s;
        }
        
        .resultados a:hover {
            background: #f1f1f1;
        }    
</style>
<body class="bg-gradient-to-br from-blue-50 via-white to-green-50 min-h-screen">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-900 to-blue-700 text-white shadow-2xl">
        <div class="container mx-auto px-1 py-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-1">
                    <div class="p-3 ">
                        <img src="{{ asset('img/logob.png') }}" alt="Logo de la alcaldia de Cúcuta" width="20%">
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <i class="fas fa-phone-alt"></i>
                    <span>Línea de atención: PBX: (60) (7)5960051  </span>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- Title Section -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-clipboard-list text-blue-600 mr-3"></i>
                TRÁMITES Y SERVICIOS
            </h2>
            <p class="text-gray-600 text-lg">Realiza tus trámites de manera rápida y segura</p>
            <div class="mt-4 h-1 w-32 bg-gradient-to-r from-blue-600 to-green-500 mx-auto rounded-full"></div>
        </div>

        <!-- Search Section -->
        <div class="bg-white rounded-2xl shadow-2xl p-8 mb-12 border border-gray-100">
            <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-search text-blue-600 mr-3"></i>
                Busca tu trámite
            </h3>
            <form class="filtro-form">
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="md:col-span-1">
                        <label class="block text-gray-700 font-semibold mb-2">Tipo de Trámite</label>
                        <select class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-300" id="categoria">
                            <option>Escoger categoria</option>
                            <option value="hacienda">RENTAS E IMPUESTOS</option>
                            <option value="dads">DEPARTAMENTO ADMINISTRATIVO DE BIENESTAR SOCIAL</option>
                            <option value="juridico">OFICINA JURIDICA</option>
                            <option value="cultura">SECRETARIA DE CULTURA Y TURISMO</option>
                            <option value="educacion">SECRETARIA DE EDUCACIÓN</option>
                            <option value="gobierno">SECRETARIA DE GOBIERNO</option>
                            <option value="desarrollo">SECRETARIA DE DESARROLLO SOCIAL</option>
                            <option value="salud">SECRETARIA DE SALUD</option>
                            <option value="humano">SECRETARIA DE TALENTO HUMANO</option>
                            <option value="transito">SECRETARIA DE TRANSITO Y TRANSPORTE</option>
                            <option value="vivienda">SECRETARIA DE VIVIENDA</option>
                            <option value="sisben">SISBEN</option>
                            <option value="dadp">DEPARTAMENTO ADMINISTRATIVO DE PLANEACION</option>
                            <option value="otros">OTROS</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-semibold mb-2">Filtrar por palabras en el titulo</label>
                        <input type="text" id="buscar" placeholder="" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-300">
                    </div>
                    <div class="md:col-span-3 flex gap-2">
                        
                        <button class="boton-buscar flex-1 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-1 px-7 h-14 rounded transition duration-300 transform hover:scale-105 shadow" type="button" onclick="filtrarTramites()">
                            <i class="fas fa-search mr-2"></i>
                            Buscar
                        </button>
                        <button class="boton-limpiar flex-1 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-1 px-7 h-14 rounded transition duration-300 transform hover:scale-105 shadow" type="button" onclick="limpiarFiltro()">
                            <i class="fas fa-times mr-2"></i>
                            Limpiar
                        </button>
                    </div>
                </div>
            </form>

            <div class="resultados" id="resultados">
                <!-- Resultados aparecerán aquí -->
            </div>

        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Certificado de Estratificación -->
            <a href="{{ route('certificado-estratificacion') }}">
                <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 overflow-hidden group">
                    <div class="bg-gradient-to-br from-pink-500 to-red-500 p-6 text-white">
                        <div class="flex justify-center mb-4">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full">
                                <i class="fas fa-chart-bar text-5xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-center">Certificado de Estratificación Socioeconómica</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Obtén tu certificado de estratificación socioeconómica de forma digital.</p>
                        <button class="w-full bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white font-bold py-3 rounded-lg transition duration-300">
                            <i class="fas fa-file-download mr-2"></i>
                            Solicitar
                        </button>
                    </div>
                </div>
            </a>

            <!-- Certificado de Riesgos -->
            <a href="https://cucuta.gov.co/consulta-concepto-de-riesgos/">
                <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 overflow-hidden group">
                    <div class="bg-gradient-to-br from-red-500 to-orange-500 p-6 text-white">
                        <div class="flex justify-center mb-4">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full">
                                <i class="fas fa-exclamation-triangle text-5xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-center">Certificado de Riesgos</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Consulta y descarga el certificado de riesgos de tu propiedad.</p>
                        <button class="w-full bg-gradient-to-r from-red-500 to-orange-500 hover:from-red-600 hover:to-orange-600 text-white font-bold py-3 rounded-lg transition duration-300">
                            <i class="fas fa-file-download mr-2"></i>
                            Solicitar
                        </button>
                    </div>
                </div>
            </a>
            <!-- Concepto de Uso de Suelos -->
            <a href="https://cucuta.gov.co/consulta-uso-de-suelos/">
                <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 overflow-hidden group">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-500 p-6 text-white">
                        <div class="flex justify-center mb-4">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full">
                                <i class="fas fa-map-marked-alt text-5xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-center">Concepto de Uso de Suelos</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Solicita el concepto de uso de suelos para tu proyecto o inmueble.</p>
                        <button class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-bold py-3 rounded-lg transition duration-300">
                            <i class="fas fa-file-download mr-2"></i>
                            Solicitar
                        </button>
                    </div>
                </div>
            </a>
            <!-- Colombia Mayor -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 overflow-hidden group">
                <div class="bg-gradient-to-br from-blue-500 to-indigo-600 p-6 text-white">
                    <div class="flex justify-center mb-4">
                        <div class="bg-white bg-opacity-20 p-4 rounded-full">
                            <i class="fas fa-users text-5xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-center">Consulta Programa Colombia Mayor</h3>
                </div>
                <div class="p-6"><a href="consulta-colombia-mayor">
                    <p class="text-gray-600 mb-4">Consulta el estado de tu registro en el programa Colombia Mayor.</p>
                    <button class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-bold py-3 rounded-lg transition duration-300">
                        <i class="fas fa-search mr-2"></i>Consultar
                        
                    </button></a>
                </div>
            </div>

            <!-- Carta de Residencia -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 overflow-hidden group">
                <div class="bg-gradient-to-br from-green-500 to-teal-500 p-6 text-white">
                    <div class="flex justify-center mb-4">
                        <div class="bg-white bg-opacity-20 p-4 rounded-full">
                            <i class="fas fa-envelope text-5xl"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-center">Carta de Residencia</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Solicita tu carta de residencia de manera rápida y sencilla.</p>
                    <button class="w-full bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white font-bold py-3 rounded-lg transition duration-300">
                        <i class="fas fa-file-download mr-2"></i>
                        Solicitar
                    </button>
                </div>
            </div>

            <!-- Formulario de Caracterización -->
            <a href="https://survey123.arcgis.com/share/7c447c4951794eefb433e145b6a0563c?portalUrl=https://portalarcgis.cucuta.gov.co/arcgis">
                <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 overflow-hidden group">
                    <div class="bg-gradient-to-br from-yellow-500 to-orange-500 p-6 text-white">
                        <div class="flex justify-center mb-4">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full">
                                <i class="fas fa-edit text-5xl"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-center">Formulario de Caracterización</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">¿Por qué queremos conocer tus necesidades y particularidades?</p>
                        <button class="w-full bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white font-bold py-3 rounded-lg transition duration-300">
                            <i class="fas fa-pen mr-2"></i>
                            Ingresar aquí
                        </button>
                    </div>
                </div>
            </a>
        </div>

        <!-- Info Banner -->
        <div class="bg-gradient-to-r from-blue-600 to-green-500 rounded-2xl shadow-2xl p-8 text-white">
            <div class="grid md:grid-cols-3 gap-6 text-center">
                <div class="flex flex-col items-center">
                    <i class="fas fa-clock text-5xl mb-3"></i>
                    <h4 class="font-bold text-xl mb-2">Atención 24/7</h4>
                    <p class="text-blue-100">Trámites digitales disponibles todo el tiempo</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-shield-alt text-5xl mb-3"></i>
                    <h4 class="font-bold text-xl mb-2">Seguridad</h4>
                    <p class="text-blue-100">Tus datos protegidos en cada transacción</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-mobile-alt text-5xl mb-3"></i>
                    <h4 class="font-bold text-xl mb-2">Accesibilidad</h4>
                    <p class="text-blue-100">Desde cualquier dispositivo, en cualquier lugar</p>
                </div>
            </div>
        </div>
    </main>
            <script>
        const tramites = [
            { nombre: "Traslado de cadáveres", categoria: "gobierno", url: "https://www.gov.co/ficha-tramites-y-servicios/T33627" },
            { nombre: "Prórroga de sorteo de rifas", categoria: "gobierno", url: "https://www.gov.co/ficha-tramites-y-servicios/T33569" },
            { nombre: "Registro de ejemplares caninos de manejo especial", categoria: "gobierno", url: "https://www.gov.co/ficha-tramites-y-servicios/T33898" },
            { nombre: "Registro de actividades relacionadas con la enajenación de inmuebles destinados a vivienda", categoria: "vivienda", url: "https://www.gov.co/ficha-tramites-y-servicios/T27805" },
            { nombre: "Reconocimiento de personería jurídica de los organismos de acción comunal de primero y segundo grado", categoria: "juridico", url: "https://www.gov.co/ficha-tramites-y-servicios/T27805" },
            { nombre: "Reconocimiento de escenarios habilitados para la realización de espectáculos públicos de las artes escénicas", categoria: "espectaculos", url: "https://www.gov.co/ficha-tramites-y-servicios/T27811" },
            { nombre: "Permiso para demostraciones públicas de pólvora, artículos pirotécnicos o fuegos artificiales", categoria: "gobierno", url: "https://www.gov.co/ficha-tramites-y-servicios/T34113" },
            { nombre: "Permiso de captación de recursos", categoria: "permisos", url: "https://www.gov.co/ficha-tramites-y-servicios/T33561" },
            //{ nombre: "Pensión de jubilación para docentes oficiales", categoria: "educacion", url: "https://www.gov.co/ficha-tramites-y-servicios/T33561" },
            { nombre: "Participación en plusvalía", categoria: "juridico", url: "https://www.gov.co/ficha-tramites-y-servicios/T33564" },
            //{ nombre: "Inscripción de la propiedad horizontal", categoria: "vivienda", url: "https://www.gov.co/ficha-tramites-y-servicios/T33554" },
            //{ nombre: "Inclusión de personas en la base de datos del sistema de identificación y clasificación de potenciales beneficiarios de programas sociales – SISBEN", categoria: "sisben", url: "https://www.gov.co/ficha-tramites-y-servicios/T9825" },
            { nombre: "Impuesto de delineación urbana", categoria: "vivienda", url: "https://www.gov.co/ficha-tramites-y-servicios/T28681" },
            { nombre: "Formulación y radicación del proyecto del plan parcial", categoria: "vivienda", url: "https://www.gov.co/ficha-tramites-y-servicios/T33652" },
            { nombre: "Facilidades de pago para los deudores de obligaciones tributarias", categoria: "impuestos", url: "https://www.gov.co/ficha-tramites-y-servicios/T33369" },
            { nombre: "Facilidades de pago para los deudores de obligaciones no tributarias", categoria: "impuestos", url: "https://www.gov.co/ficha-tramites-y-servicios/T33669" },
            //{ nombre: "Exención del impuesto predial unificado", categoria: "hacienda", url: "https://drive.google.com/file/d/1mLqCxaMsIz1lsCsbBX7uI9YAK9IWP7rY/view" },
            //{ nombre: "Exención del impuesto de industria y comercio", categoria: "impuestos", url: "https://www.gov.co/ficha-tramites-y-servicios/T33547" },
            //{ nombre: "Exención del impuesto de espectáculos públicos", categoria: "espectaculos", url: "https://www.gov.co/ficha-tramites-y-servicios/T28575" },
            { nombre: "Esterilización canina y felina", categoria: "gobierno", url: "https://www.gov.co/ficha-tramites-y-servicios/T33897" },
            { nombre: "Duplicado de la licencia de tránsito de un vehículo automotor", categoria: "transito", url: "https://www.gov.co/ficha-tramites-y-servicios/T33626" },
            { nombre: "Derechos de explotación de juegos de suerte y azar en la modalidad de rifas", categoria: "sorteos", url: "https://www.gov.co/ficha-tramites-y-servicios/T39047" },
            { nombre: "Corrección de errores e inconsistencias en declaraciones y recibos de pago", categoria: "impuestos", url: "https://www.gov.co/ficha-tramites-y-servicios/T33348" },
            //{ nombre: "Concepto de norma urbanística", categoria: "dadp", url: "https://cucuta.gov.co/sipot/" },
            //{ nombre: "Clausura de un establecimiento educativo", categoria: "educacion", url: "https://www.gov.co/ficha-tramites-y-servicios/T33651" },
            //{ nombre: "Certificado de riesgo de predios", categoria: "dadp", url: "https://www.gov.co/ficha-tramites-y-servicios/T27761" },
            { nombre: "Certificado de libertad y tradición de un vehículo automotor", categoria: "certificados", url: "https://www.gov.co/ficha-tramites-y-servicios/T14134" },
            { nombre: "Certificado de estratificación socioeconómica", categoria: "vivienda", url: "http://tramitesplaneacion.cucuta.gov.co/pagina/" },
            { nombre: "Certificación de la personería jurídica y representación legal de las organizaciones comunales de primero y segundo grado", categoria: "juridico", url: "https://www.gov.co/ficha-tramites-y-servicios/T33647" },
            { nombre: "Certificación de la personería jurídica y representación legal de las organizaciones comunales de primero y segundo grado", categoria: "juridico", url: "https://www.gov.co/ficha-tramites-y-servicios/T33928" },
            { nombre: "Autorización de ocupación de inmuebles", categoria: "vivienda", url: "https://www.gov.co/ficha-tramites-y-servicios/T33560" },
            { nombre: "ASISTENCIA TÉCNICA RURAL", categoria: "rural", url: "https://www.gov.co/ficha-tramites-y-servicios/T33919" },
            { nombre: "Certificado de Residencia", categoria: "certificado", url: "https://www.gov.co/ficha-tramites-y-servicios/T33533" },
            { nombre: "Autorización para la operación de juegos de suerte y azar en la modalidad de promocionales", categoria: "sorteos", url: "https://www.gov.co/ficha-tramites-y-servicios/T33533" },
            //{ nombre: "Impuesto de industria y comercio y su complementario de avisos y tableros", categoria: "impuestos", url: "https://www.gov.co/ficha-tramites-y-servicios/T30791" },
            { nombre: "Modificación en el registro de contribuyentes del impuesto de industria y comercio", categoria: "impuestos", url: "https://www.gov.co/ficha-tramites-y-servicios/T33332" },
            { nombre: "Impuesto predial unificado", categoria: "impuestos", url: "https://www.gov.co/ficha-tramites-y-servicios/T9262" },
            { nombre: "Impuesto sobre casinos y juegos permitidos", categoria: "impuestos", url: "https://www.gov.co/ficha-tramites-y-servicios/T28606" },
            { nombre: "Permiso para espectáculos públicos diferentes a las artes escénicas", categoria: "espectaculos", url: "https://www.gov.co/ficha-tramites-y-servicios/T27940" },
            { nombre: "Sobretasa municipal o distrital a la gasolina motor", categoria: "impuestos", url: "https://www.gov.co/ficha-tramites-y-servicios/T27940" },
            //{ nombre: "Licencia de funcionamiento para las instituciones promovidas por particulares que ofrezcan el servicio educativo para el trabajo y el desarrollo humano", categoria: "educacion", url: "https://www.gov.co/ficha-tramites-y-servicios/T33600" },
            { nombre: "Cancelación del registro de contribuyentes del impuesto de industria y comercio", categoria: "tributos", url: "https://www.gov.co/ficha-tramites-y-servicios/T33632" },
            //{ nombre: "Autorización para la operación de juegos de suerte y azar en la modalidad de rifas", categoria: "sorteos", url: "https://www.gov.co/ficha-tramites-y-servicios/T28536" },
            //{ nombre: "Encuesta del sistema de identificación y clasificación de potenciales beneficiarios de programas sociales – SISBEN", categoria: "sisben", url: "https://www.gov.co/ficha-tramites-y-servicios/T10121" },
            //{ nombre: "Retiro de personas de la base de datos del sistema de identificación y clasificación de potenciales beneficiarios de programas sociales – SISBEN", categoria: "sisben", url: "https://www.gov.co/ficha-tramites-y-servicios/T10623" },
            //{ nombre: "Cambio de propietario de un establecimiento educativo", categoria: "educacion", url: "https://www.gov.co/ficha-tramites-y-servicios/T33659" },
            //{ nombre: "Vacunación antirrábica de caninos y felinos", categoria: "salud", url: "https://www.gov.co/ficha-tramites-y-servicios/T33659" },
            { nombre: "Traspaso de propiedad de un vehículo automotor", categoria: "transito", url: "https://www.gov.co/ficha-tramites-y-servicios/T33625" },
            //{ nombre: "Inscripción de dignatarios de las organizaciones comunales de primero y segundo grado", categoria: "vivienda", url: "https://www.gov.co/ficha-tramites-y-servicios/T27814" },
            //{ nombre: "Concepto de excepción de juegos de suerte y azar en la modalidad de rifas", categoria: "sorteos", url: "https://www.gov.co/ficha-tramites-y-servicios/T33648" },
            { nombre: "Registro de extinción de la propiedad horizontal", categoria: "vivienda", url: "https://www.gov.co/ficha-tramites-y-servicios/T33558" },
            { nombre: "Devolución de elementos retenidos por ocupación ilegal del espacio público", categoria: "espacio", url: "https://www.gov.co/ficha-tramites-y-servicios/T33602" },
            { nombre: "Inscripción o reforma de estatutos de las organizaciones comunales de primero y segundo grado", categoria: "juridico", url: "https://www.gov.co/ficha-tramites-y-servicios/T27803" },
            //{ nombre: "Ascenso o reubicación de nivel salarial en el escalafón docente oficial", categoria: "educacion", url: "https://www.gov.co/ficha-tramites-y-servicios/T33597" },
            { nombre: "Apertura y registro de libros de las organizaciones comunales de primero y segundo grado", categoria: "juridico", url: "https://www.gov.co/ficha-tramites-y-servicios/T27802" },
            { nombre: "Concepto sanitario", categoria: "salud", url: "https://cucuta.gov.co/tramite-concepto-uso-sanitario/" },
            { nombre: "Contribución por valorización", categoria: "impuestos", url: "https://www.gov.co/ficha-tramites-y-servicios/T33362" },
            { nombre: "Auxilio funerario Docentes", categoria: "educacion", url: "" },
            { nombre: "Registro de firmas de rectores, directores y secretario(a)s de establecimientos educativos", categoria: "educacion", url: "https://sac2.gestionsecretariasdeeducacion.gov.co/app_Login/?sec=27" },
            { nombre: "Inscripción de dignatarios de las organizaciones comunales de primero y segundo grado", categoria: "desarrollo", url: "#" },
            { nombre: "Reconocimiento de personería jurídica de los organismos de acción comunal de primero y segundo grado", categoria: "desarrollo", url: "https://sgd.cucuta.gov.co/ventanillaunica/ven_sec_Login/" },
            { nombre: "Cancelación de la personería jurídica de las organizaciones comunales de primero y segundo grado", categoria: "desarrollo", url: "https://sgd.cucuta.gov.co/ventanillaunica/ven_sec_Login/" },
            { nombre: "Apertura y registro de libros de las organizaciones comunales de primero y segundo grado", categoria: "desarrollo", url: "https://sgd.cucuta.gov.co/ventanillaunica/ven_sec_Login/" },
            { nombre: "Inscripción o reforma de estatutos de las organizaciones comunales de primero y segundo grado", categoria: "desarrollo", url: "https://sgd.cucuta.gov.co/ventanillaunica/ven_sec_Login/" },
            { nombre: "Certificación de la personería jurídica y representación legal de las organizaciones comunales de primero y segundo grado", categoria: "desarrollo", url: "https://sgd.cucuta.gov.co/ventanillaunica/ven_sec_Login/" },
            { nombre: "Reconocimiento de escenarios habilitados para la realización de espectáculos públicos de las artes escénicas", categoria: "turismo", url: "#" },
            { nombre: "Permiso para demostraciones públicas de pólvora, artículos pirotécnicos o fuegos artificiales", categoria: "turismo", url: "#" },
            { nombre: "Permiso para espectáculos públicos de las artes escénicas en escenarios no habilitados", categoria: "turismo", url: "#" },
            { nombre: "Licencia de funcionamiento de instituciones educativas que ofrezcan programas de educación formal de adultos", categoria: "educacion", url: "https://sac2.gestionsecretariasdeeducacion.gov.co/app_Login/?sec=27" },
            { nombre: "Licencia de funcionamiento para establecimientos educativos promovidos por particulares para prestar el servicio público educativo en los niveles de preescolar, básica y media", categoria: "educacion", url: "https://semcucuta.gov.co/legalizacion-y-novedad-de-instituciones-educativas-oficiales-y-privadas/" },
            { nombre: "Licencia de funcionamiento para las instituciones promovidas por particulares que ofrezcan el servicio educativo para el trabajo y el desarrollo humano", categoria: "educacion", url: "https://semcucuta.gov.co/legalizacion-y-novedad-de-instituciones-educativas-oficiales-y-privadas/" },
            { nombre: "Cambio de propietario de un establecimiento educativo", categoria: "educacion", url: "https://semcucuta.gov.co/wp-content/uploads/2015/09/Novedades-EE-de-EPBM-y-ETDH.pdf" },
            { nombre: "Certificado de residencia", categoria: "gobierno", url: "http://200.116.213.140/pagina/secretaria-planeacion/" },
            //{ nombre: "Exención del impuesto de espectáculos públicos", categoria: "hacienda", url: "https://drive.google.com/file/d/1PsW7kLITwJLc6qvsrThgHwnMSeB0B6hi/view" },
            //{ nombre: "Impuesto al degüello de ganado menor", categoria: "hacienda", url: "https://drive.google.com/file/d/1PsW7kLITwJLc6qvsrThgHwnMSeB0B6hi/view-" },
            //{ nombre: "Cancelación del registro de contribuyentes del impuesto de industria y comercio", categoria: "hacienda", url: "https://drive.google.com/file/d/1mLqCxaMsIz1lsCsbBX7uI9YAK9IWP7rY/view" },
            //{ nombre: "Sobretasa municipal a la gasolina motor", categoria: "hacienda", url: "https://drive.google.com/file/d/1mLqCxaMsIz1lsCsbBX7uI9YAK9IWP7rY/view" },
            //{ nombre: "Facilidades de pago para los deudores de obligaciones tributarias", categoria: "hacienda", url: "https://drive.google.com/file/d/1mLqCxaMsIz1lsCsbBX7uI9YAK9IWP7rY/view" },
            //{ nombre: "Exención del impuesto de industria y comercio", categoria: "hacienda", url: "https://drive.google.com/file/d/1mLqCxaMsIz1lsCsbBX7uI9YAK9IWP7rY/view" },
            //{ nombre: "Facilidades de pago para los deudores de obligaciones no tributarias", categoria: "hacienda", url: "https://drive.google.com/file/d/1mLqCxaMsIz1lsCsbBX7uI9YAK9IWP7rY/view" },
            { nombre: "Supervisión delegado de sorteos y concursos", categoria: "otros", url: "https://asambleanortedesantander.micolombiadigital.gov.co/sites/asambleanortedesantander/content/files/000042/2067_ordenanza-n-010.pdf" },
            { nombre: "Concepto uso de suelos", categoria: "dadp", url: "https://cucuta.gov.co/consulta-uso-de-suelos/" },
            { nombre: "Certificado de riesgo", categoria: "dadp", url: "http://tramitesplaneacion.cucuta.gov.co/pagina/certificado-de-riesgo-de-predios/" },
            { nombre: "Impuesto de delineación urbana", categoria: "dadp", url: "https://sgd.cucuta.gov.co/ventanillaunica/ven_sec_Login/" },
            { nombre: "Cancelación de la matrícula de arrendadores", categoria: "vivienda", url: "https://cucuta.gov.co/quienes-somos-vivienda/" },
            { nombre: "Inscripción de la propiedad horizontal", categoria: "vivienda", url: "https://cucuta.gov.co/quienes-somos-vivienda/" },
            { nombre: "Matrícula de arrendadores", categoria: "vivienda", url: "https://cucuta.gov.co/quienes-somos-vivienda/" },
            { nombre: "Corrección de año y/o periodo gravable en declaraciones de industria y comercio", categoria: "hacienda", url: "https://cucuta.gov.co/correccion-de-ano-y-o-periodo-gravable-en-declaraciones-de-industria-y-comercio/" },
            { nombre: "Impuesto sobre el servicio de alumbrado público", categoria: "hacienda", url: "https://cucuta.gov.co/impuesto-sobre-el-servicio-de-alumbrado-publico/" },
            { nombre: "Registro de contribuyentes del impuesto de industria y comercio", categoria: "hacienda", url: "https://cucuta.gov.co/registro-de-contribuyentes-del-impuesto-de-industria-y-comercio/" },
            { nombre: "Modificación en el registro de contribuyentes del impuesto de industria y comercio", categoria: "hacienda", url: "https://cucuta.gov.co/modificacion-en-el-registro-de-contribuyentes-del-impuesto-de-industria-y-comercio/" },
            { nombre: "IMPUESTO DE ESPECTÁCULOS PÚBLICOS", categoria: "hacienda", url: "https://cucuta.gov.co/impuesto-de-espectaculos-publicos/" },
            { nombre: "DEVOLUCIÓN Y/O COMPENSACIÓN DE PAGOS EN EXCESO Y PAGOS DE LO NO DEBIDO", categoria: "hacienda", url: "https://cucuta.gov.co/devolucion-y-o-compensacion-de-pagos-en-exceso-y-pagos-de-lo-no-debido/" },
            { nombre: "Cancelación del registro de contribuyentes del impuesto de industria y comercio", categoria: "hacienda", url: "https://cucuta.gov.co/cancelacion-del-registro-de-contribuyentes-del-impuesto-de-industria-y-comercio/" },
            { nombre: "Impuesto Predial Unificado", categoria: "hacienda", url: "https://cucuta.gov.co/impuesto-predial-unificado/" },
            { nombre: "Paz y Salvo alcaldía", categoria: "hacienda", url: "https://cucuta.gov.co/paz-y-salvo-alcaldia/" },
            { nombre: "Ruta de Atención a Víctimas de Trata de Personas", categoria: "gobierno", url: "https://cucuta.gov.co/ruta-de-atencion-a-victimas-de-trata-de-personas/" },
            { nombre: "Trámite de Comparendos de Convivencia", categoria: "gobierno", url: "https://cucuta.gov.co/tramite-de-comparendos-de-convivencia/" },
            { nombre: "Expedición de Carta de Residencia", categoria: "gobierno", url: "https://cucuta.gov.co/expedicion-de-carta-de-residencia/" },
            { nombre: "Permiso Excepcional de Extensión de Horario e funcionamiento de establecimientos de comercio", categoria: "gobierno", url: "https://cucuta.gov.co/permiso-excepcional-de-extension-de-horario/" },
            { nombre: "Permiso para Espectáculos Públicos en Escenarios No Habilitados", categoria: "cultura", url: "https://cucuta.gov.co/permiso-para-espectaculos-publicos-en-escenarios-no-habilitados/" },
            { nombre: "Reconocimiento de Escenarios Habilitados para Espectáculos Públicos", categoria: "cultura", url: "https://cucuta.gov.co/reconocimiento-de-escenarios-habilitados-para-espectaculos-publicos/" },
            { nombre: "Reconocimiento de Escenarios Habilitados para Espectáculos Públicos", categoria: "cultura", url: "https://cucuta.gov.co/reconocimiento-de-escenarios-habilitados-para-espectaculos-publicos/" },
            { nombre: "Solicitud Jornada de Comunidades con Bienestar e Integración", categoria: "dads", url: "https://cucuta.gov.co/solicitud-jornada-de-comunidades-con-bienestar-e-integracion/" },
            { nombre: "Solicitud de Auxilio Fúnebre", categoria: "dads", url: "https://cucuta.gov.co/solicitud-de-auxilio-funebre/" },
            { nombre: "Solicitud de Cupo - Centro de Protección para el Adulto Mayor", categoria: "dads", url: "https://cucuta.gov.co/solicitud-de-cupo-centro-de-proteccion-para-el-adulto-mayor/" },
            { nombre: "Levantamiento de Suspensión - Programa Colombia Mayor", categoria: "dads", url: "https://cucuta.gov.co/levantamiento-de-suspension-programa-colombia-mayor/" },
            { nombre: "Poder Especial a un tercero para realizar cobros en nombre del  Adulto Mayor", categoria: "dads", url: "https://cucuta.gov.co/poder-especial-adulto-mayor/" },
            { nombre: "Poder Notariado para el Cobro del Subsidio - Colombia Mayor", categoria: "dads", url: "https://cucuta.gov.co/poder-notariado-para-el-cobro-del-subsidio-colombia-mayor/" },
            { nombre: "Postulación Subsidio Colombia Mayor", categoria: "dads", url: "https://cucuta.gov.co/postulacion-subsidio-colombia-mayor/" },
            { nombre: "Creación de Asociaciones de Adulto Mayor", categoria: "dads", url: "https://cucuta.gov.co/creacion-de-asociaciones-de-adulto-mayor/" },
            { nombre: "Escritos de Acciones Constitucionales", categoria: "dads", url: "https://cucuta.gov.co/escritos-de-acciones-constitucionales/" },
            { nombre: "Certificado de Habitante de Calle", categoria: "dads", url: "https://cucuta.gov.co/certificado-de-habitante-de-calle/" },
            { nombre: "Evaluación y Diseño de Rutas - Habitante de Calle", categoria: "dads", url: "https://cucuta.gov.co/evaluacion-y-diseno-de-rutas-habitante-de-calle/" },
            { nombre: "Caracterizaciones en Puntos Estratégicos - Habitante de Calle", categoria: "dads", url: "https://cucuta.gov.co/caracterizaciones-en-puntos-estrategicos/" },
            { nombre: "Gestión y Articulación con Entidades - Habitante de Calle", categoria: "dads", url: "https://cucuta.gov.co/gestion-y-articulacion-con-entidades/" },
            { nombre: "Jornadas de Captación y Abordaje - Habitante de Calle", categoria: "dads", url: "https://cucuta.gov.co/jornadas-de-captacion-y-abordaje/" },
            { nombre: "Atención Médica y Psicológica - Habitante de Calle", categoria: "dads", url: "https://cucuta.gov.co/atencion-medica-y-psicologica/" },
            { nombre: "Provisión de autocuidados a personas - Habitante de Calle", categoria: "dads", url: "https://cucuta.gov.co/autocuidados-provision-de-autocuidados-a-personas-en-situacion-de-calle/" },
            { nombre: "Actualización de Información SISBÉN", categoria: "sisben", url: "https://cucuta.gov.co/actualizacion-de-informacion-sisben/" },
            { nombre: "Inclusión en SISBÉN", categoria: "sisben", url: "https://cucuta.gov.co/inclusion-en-sisben/" },
            { nombre: "Retiro de Personas del SISBÉN", categoria: "sisben", url: "https://cucuta.gov.co/retiro-de-personas-del-sisben/" },
            { nombre: "Encuesta del SISBÉN", categoria: "sisben", url: "https://cucuta.gov.co/encuesta-del-sisben/" },
            { nombre: "Reconocimiento de la Personería Jurídica (Inscripción de la Propiedad Horizontal)", categoria: "vivienda", url: "https://cucuta.gov.co/encuesta-del-sisben/" },
            { nombre: "Inscripción o Cambio del Representante Legal y/o Revisor Fiscal", categoria: "vivienda", url: "https://cucuta.gov.co/inscripcion-o-cambio-del-representante-legal-y-o-revisor-fiscal/" },
            { nombre: "Matrícula de Arrendadores", categoria: "vivienda", url: "https://cucuta.gov.co/matricula-de-arrendadores/" },
            { nombre: "Legalización de Documentos para Estudiar en el Exterior", categoria: "educacion", url: "https://cucuta.gov.co/legalizacion-de-documentos-para-estudiar-en-el-exterior/" },
            { nombre: "Duplicado de Diplomas y Actas - Instituciones Educativas Clausuradas", categoria: "educacion", url: "https://cucuta.gov.co/duplicado-de-diplomas-y-actas-instituciones-educativas-clausuradas/" },
            { nombre: "Certificados y Constancias de Estudio - Establecimientos Clausurados", categoria: "educacion", url: "https://cucuta.gov.co/certificados-y-constancias-de-estudio-establecimientos-clausurados/" },
            { nombre: "Certificación de Tiempo de Servicio - Docentes Privados", categoria: "educacion", url: "https://cucuta.gov.co/certificacion-de-tiempo-de-servicio-docentes-privados/" },
            { nombre: "Constancia de Existencia y Representación Legal - IETDH", categoria: "educacion", url: "https://cucuta.gov.co/constancia-de-existencia-y-representacion-legal-ietdh/" },
            { nombre: "Registro o Renovación de Programas Educativos", categoria: "educacion", url: "https://cucuta.gov.co/registro-o-renovacion-de-programas-educativos/" },
            { nombre: "Cambio de sede de un establecimiento educativo", categoria: "educacion", url: "https://cucuta.gov.co/cambio-de-sede-de-un-establecimiento-educativo/" },
            { nombre: "Ampliación del Servicio Educativo", categoria: "educacion", url: "https://cucuta.gov.co/ampliacion-del-servicio-educativo/" },
            { nombre: "Licencia de Funcionamiento para Establecimientos Educativos Privados", categoria: "educacion", url: "https://cucuta.gov.co/licencia-de-funcionamiento-para-establecimientos-educativos-privados/" },
            { nombre: "Licencia de Funcionamiento - Educación para el Trabajo y el Desarrollo Humano", categoria: "educacion", url: "https://cucuta.gov.co/licencia-de-funcionamiento-educacion-para-el-trabajo-y-el-desarrollo-humano/" },
            { nombre: "Licencia de Funcionamiento – Educación Formal de Adultos", categoria: "educacion", url: "https://cucuta.gov.co/licencia-de-funcionamiento-educacion-formal-de-adultos/" },
            { nombre: "Cambio de Propietario – Establecimiento Educativo", categoria: "educacion", url: "https://cucuta.gov.co/cambio-de-propietario-establecimiento-educativo/" },
            { nombre: "Clausura de Establecimiento Educativo", categoria: "educacion", url: "https://cucuta.gov.co/clausura-de-establecimiento-educativo/" },
            { nombre: "Tarifas de Matrícula y Cobros Periódicos - Establecimientos Privados", categoria: "educacion", url: "https://cucuta.gov.co/tarifas-de-matricula-y-cobros-periodicos-establecimientos-privados/" },
            { nombre: "CETIL – Certificación Electrónica de Tiempos Laborales", categoria: "humano", url: "https://cucuta.gov.co/cetil-certificacion-electronica-de-tiempos-laborales/" },
            { nombre: "CETIL – Emisión de Constancias y/o Certificados Laboraless", categoria: "humano", url: "https://cucuta.gov.co/cetil-certificacion-electronica-de-tiempos-laborales/" }

        ];
        
        function filtrarTramites() {
            const categoria = document.getElementById("categoria").value.toLowerCase();
            const busqueda = document.getElementById("buscar").value.toLowerCase();
            const resultadosDiv = document.getElementById("resultados");
        
            // Filtrar trámites
            const resultados = tramites.filter(tramite =>
                (categoria === "" || tramite.categoria === categoria) &&
                (busqueda === "" || tramite.nombre.toLowerCase().includes(busqueda))
            );
        
            // Mostrar resultados con enlaces
            resultadosDiv.innerHTML = resultados.length
                ? resultados.map(tramite => `<a href="${tramite.url}" target="_blank">${tramite.nombre}</a>`).join("")
                : "<p>No se encontraron resultados</p>";
        }
        
        function limpiarFiltro() {
            document.getElementById("categoria").value = "";
            document.getElementById("buscar").value = "";
            document.getElementById("resultados").innerHTML = "";
        }
        </script>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16 py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="mb-2">&copy; 2024 Alcaldía de Cúcuta - Todos los derechos reservados</p>
            <p class="text-gray-400 text-sm">Norte de Santander, Colombia</p>
        </div>
    </footer>
</body>
</html>