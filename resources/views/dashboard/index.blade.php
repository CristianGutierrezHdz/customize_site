@extends('layouts.dashboard')

@section('script-page')
    <script>
        const checkbox = document.getElementById("toggle_1");
        const activo = document.getElementById("activo");
        const label = document.querySelector('label[for="toggle_1"]');
        const span = label.querySelector("span");

        checkbox.addEventListener("change", function() {
            if (checkbox.value === "1") {
                checkbox.value = 0;
                activo.value = 0;
                label.style.justifyContent = "flex-start";
                label.style.backgroundColor = "white";
                span.style.backgroundColor = "black";
            } else {
                checkbox.value = 1;
                activo.value = 1;
                label.style.justifyContent = "flex-end";
                label.style.backgroundColor = "black";
                span.style.backgroundColor = "white";

            }
        });
    </script>
@endsection

@section('content')
    <div class="grid grid-cols-2 gap-4">

        {{--  value="{{ isset($slider) ? $slider->link :  '' }}" --}}


        <div class="w-[80vh] h-[60vh] block overflow-y-scroll overflow-x-hidden scroll-auto ">

            @if (isset($site_web))
                @include('dashboard.website.header')

                @include('dashboard.website.main')

                @include('dashboard.website.footer')
            @else
                @include('dashboard.website.page-not-found')
            @endif

        </div>


        <div>
            <form action="{{ isset($slider) ? route('dashboard.actualizar-web-site') : route('dashboard.guardar-web-site') }}" method="GET">
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Sitio web</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">En este apartado se encuentran las configuraciones
                            basicas de tu propio sitio web, que es una personalizacion del estilo del sitio web principal
                        </p>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <input type="hidden" id="id" value="1" name="id">

                            <div class="sm:col-span-4">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nombre de
                                    dominio</label>
                                <div class="mt-2">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">zerosoft.com/mysite/</span>
                                        <input type="text" name="dominio" id="dominio" autocomplete="dominio"
                                            value="{{ isset($site_web) ? $site_web->dominio : '' }}"
                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="nombre_dominio">
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full flex">
                                <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Activo</label>
                                <!-- Agrega espacio de separación con una clase de margen a continuación -->
                                <label class="ml-4 relative inline-flex cursor-pointer items-center">
                                    @if (isset($site_web))
                                        <input type="hidden" id="activo" value="{{ $site_web->activo }}" name="activo">
                                        <input class="hidden" type="checkbox" id="toggle_1" value="{{ $site_web->activo }}">
                                        <label
                                            class="flex items-center w-10 border border-black h-6 p-1 rounded-full cursor-pointer {{ $site_web->activo == 0 ? 'justify-start' : 'justify-end bg-black' }}"
                                            for="toggle_1">
                                            <span class="w-4 h-4 rounded-full {{ $site_web->activo == 0 ? 'bg-black' : 'bg-white' }}"></span>
                                        </label>
                                    @else
                                        <input type="hidden" id="activo" value="1" name="activo">
                                        <input class="hidden" type="checkbox" id="toggle_1" value="1">
                                        <label class="flex items-center w-10 border border-black h-6 p-1 rounded-full cursor-pointer justify-end bg-black"
                                            for="toggle_1">
                                            <span class="w-4 h-4 rounded-full bg-white"></span>
                                        </label>
                                    @endif
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    @isset($site_web)
                        <a href="{{ route('web-site.index', ['dominio' => $site_web->dominio]) }}" class="text-sm font-semibold leading-6 text-gray-900">Ver
                            Sitio</a>
                    @endisset
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ isset($site_web) ? 'Actualizar' : 'Crear' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
