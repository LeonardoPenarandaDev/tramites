<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Consulta Programa Colombia Mayor - Alcaldía de Cúcuta</title>
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

    <!-- Contenido Principal -->
    <main class="container mx-auto px-4 py-8">
        <!-- Botón Volver -->
        <a href="/" class="inline-flex items-center text-blue-600 hover:text-blue-800 mb-6 transition">
            <i class="fas fa-arrow-left mr-2"></i>
            Volver a Trámites y Servicios
        </a>

        <!-- Card Principal -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-4xl mx-auto">
            <!-- Header del Card -->
            <div class="bg-gradient-to-r from-blue-500 to-blue-700 px-8 py-6">
                <div class="flex items-center space-x-4 text-white">
                    <div class="bg-white/20 rounded-full p-4">
                        <i class="fas fa-users text-3xl"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold">Consulta Programa Colombia Mayor</h2>
                        <p class="text-blue-100 mt-1">Consulta el estado de tu registro en el programa Colombia Mayor</p>
                    </div>
                </div>
            </div>

            <!-- Contenido del Card -->
            <div class="p-8">
                <!-- Información -->
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6 rounded">
                    <div class="flex items-start">
                        <i class="fas fa-info-circle text-blue-500 text-xl mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-semibold text-blue-900 mb-1">Información del Programa</h3>
                            <p class="text-sm text-blue-800">
                                El programa Colombia Mayor es un subsidio económico que entrega el Gobierno Nacional 
                                a los adultos mayores en condición de pobreza o vulnerabilidad.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Formulario de Consulta -->
                <form id="consultaForm" class="space-y-6">
                    @csrf
                    <div>
                        <label for="cedula" class="block text-sm font-medium text-gray-700 mb-2">
                            Número de Cédula <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-id-card text-gray-400"></i>
                            </div>
                            <input 
                                type="text" 
                                id="cedula" 
                                name="cedula"
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="Ingrese su número de cédula"
                                required
                                maxlength="20"
                            >
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Ingrese solo números, sin puntos ni espacios</p>
                    </div>

                    <button 
                        type="submit" 
                        id="btnConsultar"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 flex items-center justify-center space-x-2"
                    >
                        <i class="fas fa-search"></i>
                        <span>Consultar Estado</span>
                    </button>
                </form>

                <!-- Área de Resultados -->
                <div id="resultadoArea" class="mt-8 hidden">
                    <!-- El resultado se insertará aquí dinámicamente -->
                </div>

                <!-- Loading Spinner -->
                <div id="loadingSpinner" class="mt-8 hidden text-center">
                    <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600"></div>
                    <p class="mt-3 text-gray-600">Consultando información...</p>
                </div>
            </div>
        </div>

        <!-- Información Adicional -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-blue-600 text-2xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Atención 24/7</h3>
                <p class="text-sm text-gray-600">Consulta disponible todo el tiempo</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6 text-center">
                <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-green-600 text-2xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Seguridad</h3>
                <p class="text-sm text-gray-600">Tus datos protegidos en cada transacción</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6 text-center">
                <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-mobile-alt text-purple-600 text-2xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Accesibilidad</h3>
                <p class="text-sm text-gray-600">Desde cualquier dispositivo, en cualquier lugar</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-16">
        <div class="container mx-auto px-4 text-center">
            <p class="text-sm">© 2024 Alcaldía de Cúcuta - Todos los derechos reservados</p>
            <p class="text-xs text-gray-400 mt-2">Norte de Santander, Colombia</p>
        </div>
    </footer>

    <script>
        document.getElementById('consultaForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const cedula = document.getElementById('cedula').value.trim();
            const loadingSpinner = document.getElementById('loadingSpinner');
            const resultadoArea = document.getElementById('resultadoArea');
            const btnConsultar = document.getElementById('btnConsultar');
            
            // Validar que no esté vacío
            if (!cedula) {
                mostrarError('Por favor ingrese un número de documento válido');
                return;
            }
            
            // Mostrar loading
            loadingSpinner.classList.remove('hidden');
            resultadoArea.classList.add('hidden');
            btnConsultar.disabled = true;
            btnConsultar.classList.add('opacity-50', 'cursor-not-allowed');
            
            try {
                const response = await fetch('/colombia-mayor/consultar', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ cedula })
                });
                
                const data = await response.json();
                
                if (data.success) {
                    mostrarResultado(data.data);
                } else {
                    mostrarError(data.message);
                }
            } catch (error) {
                mostrarError('Error al consultar. Por favor intente nuevamente.');
                console.error('Error:', error);
            } finally {
                loadingSpinner.classList.add('hidden');
                btnConsultar.disabled = false;
                btnConsultar.classList.remove('opacity-50', 'cursor-not-allowed');
            }
        });
        
        function mostrarResultado(data) {
            const estadoColors = {
                'Activo': { bg: 'bg-green-50', border: 'border-green-500', text: 'text-green-800', icon: 'fa-check-circle', iconColor: 'text-green-500' },
                'Inactivo': { bg: 'bg-red-50', border: 'border-red-500', text: 'text-red-800', icon: 'fa-times-circle', iconColor: 'text-red-500' },
                'Suspendido': { bg: 'bg-yellow-50', border: 'border-yellow-500', text: 'text-yellow-800', icon: 'fa-pause-circle', iconColor: 'text-yellow-500' },
                'En Proceso': { bg: 'bg-blue-50', border: 'border-blue-500', text: 'text-blue-800', icon: 'fa-clock', iconColor: 'text-blue-500' },
                'Potencial Beneficiario': { bg: 'bg-purple-50', border: 'border-purple-500', text: 'text-purple-800', icon: 'fa-user-clock', iconColor: 'text-purple-500' },
                'Inscrito': { bg: 'bg-indigo-50', border: 'border-indigo-500', text: 'text-indigo-800', icon: 'fa-user-check', iconColor: 'text-indigo-500' }
            };
            
            const colors = estadoColors[data.estado] || estadoColors['En Proceso'];
            
            const resultadoArea = document.getElementById('resultadoArea');
            resultadoArea.innerHTML = `
                <div class="border-l-4 ${colors.border} ${colors.bg} p-6 rounded-lg">
                    <div class="flex items-start">
                        <i class="fas ${colors.icon} ${colors.iconColor} text-3xl mt-1 mr-4"></i>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold ${colors.text} mb-3">Resultado de la Consulta</h3>
                            
                            <div class="space-y-3">
                                <div class="bg-white p-3 rounded">
                                    <p class="text-sm text-gray-600">Nombre Completo:</p>
                                    <p class="font-semibold text-gray-800">${data.nombre_completo}</p>
                                </div>
                                
                                <div class="bg-white p-3 rounded">
                                    <p class="text-sm text-gray-600">Número de Documento:</p>
                                    <p class="font-semibold text-gray-800">${data.numero_documento}</p>
                                </div>
                                
                                <div class="bg-white p-3 rounded">
                                    <p class="text-sm text-gray-600">Estado:</p>
                                    <p class="font-semibold ${colors.text}">${data.estado}</p>
                                </div>
                            </div>
                            
                            <div class="mt-4 p-4 bg-white rounded border ${colors.border}">
                                <p class="${colors.text}">${data.mensaje}</p>
                            </div>
                            
                            ${data.estado !== 'Activo' ? `
                                <div class="mt-4 p-3 bg-white rounded">
                                    <p class="text-sm text-gray-700">
                                        <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                                        Para más información, puede acercarse a nuestras oficinas o comunicarse 
                                        con la línea de atención 123.
                                    </p>
                                </div>
                            ` : ''}
                        </div>
                    </div>
                </div>
            `;
            resultadoArea.classList.remove('hidden');
        }
        
        function mostrarError(mensaje) {
            const resultadoArea = document.getElementById('resultadoArea');
            resultadoArea.innerHTML = `
                <div class="border-l-4 border-red-500 bg-red-50 p-6 rounded-lg">
                    <div class="flex items-start">
                        <i class="fas fa-exclamation-triangle text-red-500 text-2xl mt-1 mr-4"></i>
                        <div>
                            <h3 class="text-lg font-semibold text-red-800 mb-2">No se encontraron resultados</h3>
                            <p class="text-red-700">${mensaje}</p>
                            <p class="text-sm text-red-600 mt-3">
                                Si considera que esto es un error, por favor comuníquese con 
                                la línea de atención 123 o acérquese a nuestras oficinas.
                            </p>
                        </div>
                    </div>
                </div>
            `;
            resultadoArea.classList.remove('hidden');
        }
        
        // Solo permitir números en el campo de cédula
        document.getElementById('cedula').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
</body>
</html>