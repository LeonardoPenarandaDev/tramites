<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado de Estratificación Socioeconómica - Alcaldía de Cúcuta</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
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

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center space-x-2 text-sm text-gray-600">
                <a href="/" class="hover:text-blue-600 transition">
                    <i class="fas fa-home"></i> Inicio
                </a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-gray-400">Trámites</span>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-gray-800 font-medium">Certificado de Estratificación Socioeconómica</span>
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <main class="container mx-auto px-4 py-8">
        <!-- Título Principal -->
        <div class="bg-gradient-to-r from-pink-500 to-pink-600 rounded-lg shadow-lg p-8 mb-8 text-white">
            <div class="flex items-start space-x-6">
                <div class="bg-white/20 rounded-full p-6 hidden md:block">
                    <i class="fas fa-file-certificate text-5xl"></i>
                </div>
                <div class="flex-1">
                    <h1 class="text-3xl font-bold mb-3">Certificado de Estratificación Socioeconómica</h1>
                    <p class="text-pink-100 text-lg">
                        Certificar el estrato socioeconómico oficial de uno o varios inmuebles residenciales, 
                        urbanos y rurales que se encuentren en jurisdicción del municipio.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Columna Principal -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Descripción del Trámite -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-pink-500 px-6 py-4">
                        <h2 class="text-xl font-bold text-white flex items-center">
                            <i class="fas fa-info-circle mr-3"></i>
                            TRÁMITE - Certificado de estratificación socioeconómica
                        </h2>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 leading-relaxed">
                            Certificar el estrato socioeconómico oficial de uno o varios inmuebles residenciales, 
                            urbanos y rurales que se encuentren en jurisdicción del municipio.
                        </p>
                    </div>
                </div>

                <!-- Pasos para realizar el trámite -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-gray-100 px-6 py-4 border-b">
                        <h3 class="text-lg font-bold text-gray-800">Pasos para realizar trámite</h3>
                    </div>
                    
                    <div class="divide-y">
                        <!-- Paso 1 -->
                        <div class="p-6">
                            <button 
                                class="w-full flex items-center justify-between text-left group"
                                onclick="toggleAccordion('paso1')"
                            >
                                <span class="text-blue-600 font-semibold group-hover:text-blue-700 transition">
                                    1 - Reunir Documentos
                                </span>
                                <i class="fas fa-chevron-down text-gray-400 transition-transform" id="icon-paso1"></i>
                            </button>
                            
                            <div id="paso1" class="hidden mt-4 space-y-3">
                                <div class="flex items-start bg-gray-50 p-4 rounded-lg">
                                    <div class="flex-shrink-0 w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center text-pink-600 font-bold mr-3">
                                        1
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-medium text-gray-800">Solicitud escrita de certificación</p>
                                        <p class="text-sm text-gray-600 mt-1">
                                            <span class="font-semibold">Cantidad:</span> 1 Original(es), 1 Fotocopia(s)
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start bg-gray-50 p-4 rounded-lg">
                                    <div class="flex-shrink-0 w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center text-pink-600 font-bold mr-3">
                                        2
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-medium text-gray-800">Factura de servicios públicos</p>
                                        <p class="text-sm text-gray-600 mt-1">
                                            <span class="font-semibold">Cantidad:</span> 1 Fotocopia(s)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Paso 2 -->
                        <div class="p-6">
                            <button 
                                class="w-full flex items-center justify-between text-left group"
                                onclick="toggleAccordion('paso2')"
                            >
                                <span class="text-blue-600 font-semibold group-hover:text-blue-700 transition">
                                    2 - Realizar pagos
                                </span>
                                <i class="fas fa-chevron-down text-gray-400 transition-transform" id="icon-paso2"></i>
                            </button>
                            
                            <div id="paso2" class="hidden mt-4">
                                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                                    <p class="text-blue-800">
                                        <i class="fas fa-wallet mr-2"></i>
                                        Seleccionar en Tributo el Item CERTIFICADO DE ESTRATIFICACIÓN 
                                    </p>
                                    <button class="button">Pagar Click Aquí</button>
                                    <p class="text-blue-800">En la entidad solicitante: En la oficina 105 ubicada en el primer piso de la Alcaldía Municipal, en las ventanillas de IFINORTE</p>
                                </div>
                            </div>
                        </div>

                        <!-- Paso 3 -->
                        <div class="p-6">
                            <button 
                                class="w-full flex items-center justify-between text-left group"
                                onclick="toggleAccordion('paso3')"
                            >
                                <span class="text-blue-600 font-semibold group-hover:text-blue-700 transition">
                                    3 - Radicar Documentos
                                </span>
                                <i class="fas fa-chevron-down text-gray-400 transition-transform" id="icon-paso3"></i>
                            </button>
                            
                            <div id="paso3" class="hidden mt-4">
                                <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded">
                                    <p class="text-green-800">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Radique sus documentos en la <strong>Alcaldía Municipal de San José de Cúcuta</strong>
                                    </p>
                                    <p class="text-sm text-green-700 mt-2">
                                        Calle 11 No. 5-4 - 5833939 fax 5718895
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Paso 4 -->
                        <div class="p-6">
                            <button 
                                class="w-full flex items-center justify-between text-left group"
                                onclick="toggleAccordion('paso4')"
                            >
                                <span class="text-blue-600 font-semibold group-hover:text-blue-700 transition">
                                    4 - Programar y esperar visita del comité permanente de Estratificación
                                </span>
                                <i class="fas fa-chevron-down text-gray-400 transition-transform" id="icon-paso4"></i>
                            </button>
                            
                            <div id="paso4" class="hidden mt-4">
                                <div class="bg-purple-50 border-l-4 border-purple-500 p-4 rounded">
                                    <p class="text-purple-800">
                                        <i class="fas fa-calendar-check mr-2"></i>
                                        Dirigirse a la Oficina de Planeación Municipal, ubicada en el segundo piso de la Alcaldía Municipal, y programar la visita con el funcionario de la Secretaría Técnica del Comité Permanente de Estratificación. ALCALDIA MUNICIPAL DE SAN JOSÉ DE CÚCUTA - Calle 11 No. 5-4 - 5833939 fax 5718895
                                    </p>
                                    <p class="text-sm text-purple-700 mt-2">
                                        Tiempo estimado: <strong>7 días hábiles</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna Lateral -->
            <div class="space-y-6">
                <!-- Información Complementaria -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-purple-500 px-6 py-4">
                        <h3 class="text-lg font-bold text-white flex items-center">
                            <i class="fas fa-info-circle mr-2"></i>
                            INFORMACIÓN COMPLEMENTARIA
                        </h3>
                    </div>
                    
                    <div class="p-6 space-y-4">
                        <div class="border-b pb-3">
                            <p class="text-sm text-gray-600 mb-1">¿Requiere pago?</p>
                            <p class="font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                Sí
                            </p>
                        </div>
                        
                        <div class="border-b pb-3">
                            <p class="text-sm text-gray-600 mb-1">¿Cuánto se demora?</p>
                            <p class="font-semibold text-gray-800">7 Día(s) - hábil(es) Presencial</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-600 mb-2">¿Dónde hacer seguimiento?</p>
                            <p class="text-sm text-gray-700 leading-relaxed">
                                <i class="fas fa-building text-purple-500 mr-2"></i>
                                Presencial: ALCALDIA MUNICIPAL DE SAN JOSÉ DE CÚCUTA
                            </p>
                            <p class="text-xs text-gray-600 mt-2">
                                Calle 11 No. 5-4 - 5833939 fax 5718895
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Soporte Legal -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button 
                        class="w-full bg-blue-500 hover:bg-blue-600 px-6 py-4 transition flex items-center justify-between text-white"
                        onclick="toggleAccordion('soporte-legal')"
                    >
                        <span class="font-bold flex items-center">
                            <i class="fas fa-balance-scale mr-2"></i>
                            Soporte Legal
                        </span>
                        <i class="fas fa-chevron-down transition-transform" id="icon-soporte-legal"></i>
                    </button>
                    
                    <div id="soporte-legal" class="hidden p-6 space-y-3">
                        <!-- Decreto 007 -->
                        <a href="/descargas/decreto-007-de-2010.pdf" download class="flex items-start p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition group">
                            <i class="fas fa-file-pdf text-red-500 text-2xl mr-3 mt-1"></i>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800 group-hover:text-blue-600">Decreto 007 de 2010</p>
                                <p class="text-xs text-gray-600">(Artículo 1)</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-blue-600"></i>
                        </a>

                        <!-- Ley 142 -->
                        <a href="/descargas/LEY-142-DE-1994.pdf" download class="flex items-start p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition group">
                            <i class="fas fa-file-pdf text-red-500 text-2xl mr-3 mt-1"></i>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800 group-hover:text-blue-600">Ley 142 de 1994</p>
                                <p class="text-xs text-gray-600">(Artículo 101 Numerales 101.1 - 101.4)</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-blue-600"></i>
                        </a>

                        <!-- Ley 505 -->
                        <a href="/descargas/LEY-505-DE-1999.pdf" download class="flex items-start p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition group">
                            <i class="fas fa-file-pdf text-red-500 text-2xl mr-3 mt-1"></i>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800 group-hover:text-blue-600">Ley 505 de 1999</p>
                                <p class="text-xs text-gray-600">(Todos)</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-blue-600"></i>
                        </a>

                        <!-- Ley 732 -->
                        <a href="/descargas/LEY-732-2002.pdf" download class="flex items-start p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition group">
                            <i class="fas fa-file-pdf text-red-500 text-2xl mr-3 mt-1"></i>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800 group-hover:text-blue-600">Ley 732 de 2002</p>
                                <p class="text-xs text-gray-600">(Artículo 6)</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-blue-600"></i>
                        </a>

                        <!-- Ley 689 -->
                        <a href="/descargas/Ley_689_2001.pdf" download class="flex items-start p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition group">
                            <i class="fas fa-file-pdf text-red-500 text-2xl mr-3 mt-1"></i>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800 group-hover:text-blue-600">Ley 689 de 2001</p>
                                <p class="text-xs text-gray-600">(Artículos 16, 17)</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-blue-600"></i>
                        </a>

                        <!-- Ordenanza 26 -->
                        <a href="/descargas/ORDENANZA-26-2007.pdf" download class="flex items-start p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition group">
                            <i class="fas fa-file-pdf text-red-500 text-2xl mr-3 mt-1"></i>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800 group-hover:text-blue-600">Ordenanza 26 de 2007</p>
                                <p class="text-xs text-gray-600">(Artículo 4, numeral 7)</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-blue-600"></i>
                        </a>

                        <!-- Ordenanza 29 -->
                        <a href="/descargas/ORDENANZA-29-2007.pdf" download class="flex items-start p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition group">
                            <i class="fas fa-file-pdf text-red-500 text-2xl mr-3 mt-1"></i>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800 group-hover:text-blue-600">Ordenanza 29 de 2007</p>
                                <p class="text-xs text-gray-600">(Artículo 4, numeral 7)</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-blue-600"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p class="text-sm">© 2024 Alcaldía de Cúcuta - Todos los derechos reservados</p>
                <p class="text-xs text-gray-400 mt-2">Norte de Santander, Colombia</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleAccordion(id) {
            const element = document.getElementById(id);
            const icon = document.getElementById('icon-' + id);
            
            if (element.classList.contains('hidden')) {
                element.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                element.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
</body>
</html>