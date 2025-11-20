<header class="bg-gradient-to-r from-blue-900 to-blue-700 text-white shadow-2xl">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="p-2">
                    <img src="{{ asset('img/logob.png') }}" 
                         alt="Logo de la alcaldía de Cúcuta" 
                         class="h-16 w-auto">
                </div>
                <div class="hidden md:block">
                    <h1 class="text-lg font-bold">Alcaldía de Cúcuta</h1>
                    <p class="text-sm text-blue-200">Gobierno local</p>
                </div>
            </div>

            <!-- Información de contacto -->
            <div class="hidden md:flex items-center space-x-4 bg-blue-800 px-4 py-2 rounded-lg">
                <i class="fas fa-phone-alt text-blue-200"></i>
                <div>
                    <span class="text-sm font-semibold">Línea de atención:</span>
                    <span class="text-sm">PBX: (60) (7) 5960051</span>
                </div>
            </div>

            <!-- Menú móvil (opcional) -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Menú de navegación (puedes agregarlo después) -->

    </div>
</header>

<!-- Menú móvil desplegable -->


<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>