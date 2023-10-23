<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Laravel</title>
    <!-- Vite -->
    @vite('resources/css/app.css')
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .tri {
            position: absolute;
            top: 0;
            left: 0;
            border-top: 240px solid rgb(220 252 231);
            border-right: 50px solid rgba(255, 255, 255, 0);
        }

        .tri-2 {
            position: absolute;
            top: 0;
            left: 0;
            border-top: 240px solid rgb(23 37 84);
            border-right: 50px solid rgba(255, 255, 255, 0);
        }
    </style>
</head>

<body class="bg-gray-500 overflow-x-hidden">

    <header class="bg-indigo-950 flex text-neutral-200">
        <div class="h-12 w-1/3 py-3 px-2 font-semibold">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <p>Acceso</p>
        </div>
        <div class="h-12 w-1/3 grid place-content-center">
            <img class="w-[67px]" src="{{ URL::asset('resources/web/images/logo_bbva_blanco.png') }}">
        </div>
        <div class="h-12 w-1/3 py-3 px-2 text-right font-semibold">
            <p>Menu</p>
        </div>

    </header>

    @yield('content')

    <footer class="bg-indigo-950 h-96">
        <div class="py-12 grid place-content-center">
            <img class="w-32" src="{{ URL::asset('resources/web/images/logo_bbva_blanco.png') }}">
        </div>
        <div class="grid place-content-center">
            <div class="grid place-content-center">
                <div class="flex text-sky-400 font-semibold gap-5">
                    <p>Aviso legal</p>
                    <p>Mapa del sitio</p>
                    <p>Aviso de privacidad</p>
                </div>
            </div>
            <div class="text-sky-400 font-semibold pt-4">
                <p>Consulta los costos y las comisiones de nuestro productos </p>
            </div>
        </div>
        <div class="grid place-content-center py-4">
            <div class="flex">
                <svg class="h-6 w-6 text-sky-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg>
                <svg class="h-6 w-6 text-sky-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg>
                <svg class="h-6 w-6 text-sky-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg>
            </div>
        </div>
        <div class="px-14 text-xs font-light text-center text-white">
            <p>
                © 2023 BBVA México, S.A., Institución de Banca Múltiple, Grupo Financiero BBVA México. Avenida Paseo de
                la Reforma 510, colonia Juárez, código postal 06600, alcaldía Cuauhtémoc, Ciudad de México.
            </p>
        </div>
        <div class="grid place-content-center font-semibold text-cyan-400 pt-6">
            <p> Creando oportunidades </p>
        </div>
    </footer>

</body>

</html>
