<!-- Footer -->
<footer class="bg-white shadow-2xl rounded-t-3xl mt-16">
    <div class="container mx-auto px-6 py-8">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <div class="mb-4 md:mb-0">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                    Alcaldía de San José de Cúcuta
                </h2>
            </div>
            <div class="flex-shrink-0">
                <img src="{{ asset('img/logo.png') }}" 
                         alt="Logo de la alcaldía de Cúcuta" 
                         class="h-16 w-auto">
            </div>
        </div>

        <!-- Contact Information -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 text-gray-700">
            <!-- Dirección 1 -->
            <div>
                <p class="font-semibold text-gray-800 mb-1">Dirección 1:</p>
                <p class="text-sm">Calle 11 No. 5-49 Palacio Municipal Barrio Centro</p>
            </div>

            <!-- Dirección 2 -->
            <div>
                <p class="font-semibold text-gray-800 mb-1">Dirección 2:</p>
                <p class="text-sm">Calle 10 No. 0E-16 Edificio Centro Empresarial Hotel Tonchalá</p>
            </div>

            <!-- Horario -->
            <div>
                <p class="font-semibold text-gray-800 mb-1">Horario de Atención:</p>
                <p class="text-sm">Lunes a Viernes de 7:00 a.m. a 11:00 m y de 2:00 p.m. a 5:30 p.m.</p>
            </div>

            <!-- Contacto -->
            <div>
                <p class="font-semibold text-gray-800 mb-1">Línea de Atención:</p>
                <p class="text-sm">PBX: (60) (7)5960051</p>
                <p class="font-semibold text-gray-800 mb-1 mt-2">Código Postal:</p>
                <p class="text-sm">540001</p>
            </div>
        </div>

        <!-- Additional Contact -->
        <div class="grid md:grid-cols-2 gap-6 mb-6 text-gray-700">
            <div>
                <p class="font-semibold text-gray-800 mb-1">Línea Anticorrupción:</p>
                <p class="text-sm">PBX: (60) (7)5960051</p>
            </div>
            <div>
                <p class="font-semibold text-gray-800 mb-1">Notificaciones Judiciales:</p>
                <p class="text-sm">
                    <a href="mailto:notificaciones_judiciales@cucuta.gov.co" 
                       class="text-blue-600 hover:text-blue-800 hover:underline transition duration-300">
                        notificaciones_judiciales@cucuta.gov.co
                    </a>
                </p>
            </div>
        </div>

        <!-- Social Media Icons -->
        <div class="flex items-center gap-4 mb-6">
            <!-- Facebook -->
            <a href="https://www.facebook.com/AlcaldiaDeCucuta" 
               target="_blank"
               class="w-12 h-12 bg-blue-600 hover:bg-blue-700 rounded-full flex items-center justify-center text-white transition duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </a>

            <!-- Twitter/X -->
            <a href="https://twitter.com/AlcaldiaCucuta" 
               target="_blank"
               class="w-12 h-12 bg-black hover:bg-gray-800 rounded-full flex items-center justify-center text-white transition duration-300 transform hover:scale-110">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
            </a>

            <!-- YouTube -->
            <a href="https://www.youtube.com/@AlcaldiaDeCucuta" 
               target="_blank"
               class="w-12 h-12 bg-red-600 hover:bg-red-700 rounded-full flex items-center justify-center text-white transition duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/alcaldiacucuta" 
               target="_blank"
               class="w-12 h-12 bg-gradient-to-br from-purple-600 via-pink-600 to-orange-500 hover:from-purple-700 hover:via-pink-700 hover:to-orange-600 rounded-full flex items-center justify-center text-white transition duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>

            <!-- TikTok -->
            <a href="https://www.tiktok.com/@alcaldiacucuta" 
               target="_blank"
               class="w-12 h-12 bg-gray-800 hover:bg-gray-900 rounded-full flex items-center justify-center text-white transition duration-300 transform hover:scale-110">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                </svg>
            </a>
        </div>

        <!-- Footer Links -->
        <div class="border-t border-gray-200 pt-6">
            <div class="flex flex-wrap justify-center gap-4 text-sm text-purple-600">
                <a href="#" class="hover:text-purple-800 hover:underline transition duration-300">
                    Política de seguridad y privacidad de la información
                </a>
                <span class="text-gray-400">||</span>
                <a href="#" class="hover:text-purple-800 hover:underline transition duration-300">
                    Política de Tratamiento de datos personales
                </a>
                <span class="text-gray-400">||</span>
                <a href="#" class="hover:text-purple-800 hover:underline transition duration-300">
                    Política de Derechos de autor
                </a>
                <span class="text-gray-400">||</span>
                <a href="#" class="hover:text-purple-800 hover:underline transition duration-300">
                    Mapa del sitio
                </a>
                <span class="text-gray-400">||</span>
                <a href="#" class="hover:text-purple-800 hover:underline transition duration-300">
                    Términos y condiciones de uso
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Gov.co Section -->
<div class="bg-gradient-to-r from-blue-700 to-blue-900 py-4">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <!-- Colombia Logo -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('img/co.png') }}" 
                         alt="Logo de la alcaldía de Cúcuta" 
                         class="h-16 w-auto">
            </div>
            
            <!-- Gov.co Logo -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('img/gov.png') }}" 
                         alt="Logo de la alcaldía de Cúcuta" 
                         class="h-16 w-auto">
            </div>
        </div>
    </div>
</div>