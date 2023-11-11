<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Zerosoft</title>
    <!-- Vite -->
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden">

    <header class="bg-morado-1 text-neutral-200">
        @if (Route::has('login'))
                @auth
                    <div class="h-12 w-screen py-3 px-2 flex font-semibold">
                        <div class="w-1/3">

                        </div>

                        <div class="h-12 w-1/3 grid place-content-center">
                            <img class="w-[67px] -mt-5 filter invert sepia" src="{{ URL::asset('resources/web/logo/logo.png') }}">
                        </div>

                        <a href="{{ url('/dashboard') }}"
                            class="w-1/3 text-right font-semibold text-amarillo-1 hover:text-azul-1 dark:text-gray-400 dark:hover:text-white hover:underline">
                            Dashboard
                        </a>
                    </div>
                @else
                    <div class="h-12 w-screen py-3 px-2 flex font-semibold">
                        <a href="{{ route('login') }}"
                            class="w-1/3 font-semibold text-amarillo-1 hover:text-azul-1 dark:text-gray-400 dark:hover:text-white hover:underline">
                            Log in
                        </a>

                        <div class="h-12 w-1/3 grid place-content-center">
                            <img class="w-[67px] -mt-5 filter invert sepia" src="{{ URL::asset('resources/web/logo/logo.png') }}">
                        </div>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="w-1/3 text-right ml-4 font-semibold text-amarillo-1 hover:text-azul-1 dark:text-gray-400 dark:hover:text-white hover:underline">
                                Register
                            </a>
                        @endif
                    </div>
                @endauth
        @endif 
    </header>

    @yield('content')

    <footer class="bg-morado-1 py-4">
        <div class="grid grid-cols-1">
            <div>
                <div class="pt-12 pb-6 grid place-content-center">
                    <img class="w-44 -my-8 filter invert sepia" src="{{ URL::asset('resources/web/logo/logo.png') }}">
                </div>
                <div class="grid place-content-center font-light text-lg text-amarillo-1">
                    <p> Creando oportunidades </p>
                </div>
            </div> 
        </div>
    </footer>
</body>

</html>
