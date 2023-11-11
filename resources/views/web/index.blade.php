@extends('layouts.web')

@section('content')
    <section>
        <div class="h-[530px] w-auto bg-azul-1 relative">
            <div class="h-[310px]">
                <div class="h-full w-full bg-cover bg-center"
                    style="background-image: url({{asset('resources/web/images/img2.jpg')}})">
                </div>
            </div>
            <div class="p-5">
                <h1 class="font-bold text-[27px] text-morado-1">
                    ¡Somos la empresa que estás buscando!
                </h1>
                <div class="w-52 p-3 mt-6 bg-morado-1">
                    <p class="font-semibold text-base text-center text-amarillo-1">
                        Conoce porque aquí
                    </p>
                </div>
            </div>
            <div class="h-10 w-screen grid place-content-center absolute bottom-0">
                <div class="flex gap-5">
                    <div class="h-2.5 w-2.5 bg-amarillo-1 border-amabg-amarillo-1 rounded-full"></div>
                    <div class="h-2.5 w-2.5 border-[1px] border-amarillo-1 rounded-full"></div>
                    <div class="h-2.5 w-2.5 border-[1px] border-amarillo-1 rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="h-96 bg-amarillo-1 grid place-content-center overflow-hidden">
            <div class="h-60 w-screen flex">
                <div class="h-full w-[100%] bg-azul-1">
                    <div class="h-full px-16 py-10 grid place-content-center">
                        <H2 class="pb-2 font-normal text-3xl text-morado-1">
                            Desarrolladores de alto calibre
                        </H2>
                        <h1 class="pb-2 font-light">
                            Somos una empresa con un enorme recorrido en la elaboración de páginas web, nosotros nos adaptamos a las necesidades que tengas para que tu empresa tenga un próspero despegue.
                        </h1>
                    </div>
                </div>
                <div class="relative w-3/5">
                    <div class="tri"></div>
                    <img class="h-full object-cover object-right"
                        src="{{ URL::asset('resources/web/images/mujer-home.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-stone-300 px-10 py-5 shadow-inner">
            <div class="w-[90vw] overflow-x-scroll">
                <div class="flex mb-2 gap-5">
                    <div class="h-[600px] w-[420px] bg-amarillo-1 shadow-md">
                        <img class="h-[50%] w-full" src="{{ asset('resources/web/images/cliente.jpg') }}" alt="">
                        <div class="h-[50%] p-6 relative">
                            <h2 class="font-semibold text-2xl"> Desarrollamos páginas a medida </h2>
                            <p class="w-[420px] pt-3 text-base text-gray-500">#Cuchao</p>
                            <div class="absolute flex bottom-0 left-0 p-8 gap-2">
                                <div class="pt-0.5">
                                    <svg class="h-5 w-5 text-morado-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <p class="font-semibold text-base text-morado-1">Conoce más aquí</p>
                            </div>
                        </div>
                    </div>
                    <div class="h-[600px] w-[420px] bg-amarillo-1 shadow-md">
                        <img class="h-[50%] w-full" src="{{ asset('resources/web/images/bg4.jpg') }}" alt="">
                        <div class="h-[50%] p-6 relative">
                            <h2 class="font-semibold text-2xl"> Trabajamos con diseños innovadores! </h2>
                            <p class="w-[420px] pt-3 text-base text-gray-500">#Beautiful</p>
                            <div class="absolute flex bottom-0 left-0 p-8 gap-2">
                                <div class="pt-0.5">
                                    <svg class="h-5 w-5 text-morado-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <p class="font-semibold text-base text-morado-1">Conoce más aquí</p>
                            </div>
                        </div>
                    </div>
                    <div class="h-[600px] w-[420px] bg-amarillo-1 shadow-md">
                        <img class="h-[50%] w-full" src="{{ asset('resources/web/images/Seguridad.jpg') }}" alt="">
                        <div class="h-[50%] p-6 relative">
                            <h2 class="font-semibold text-2xl"> Contamos con seguridad de Vanguardia </h2>
                            <p class="w-[420px] pt-3 text-base text-gray-500">#Safe</p>
                            <div class="absolute flex bottom-0 left-0 p-8 gap-2">
                                <div class="pt-0.5">
                                    <svg class="h-5 w-5 text-morado-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <p class="font-semibold text-base text-morado-1">Conoce más aquí</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <section>
        <div class="h-96 bg-amarillo-1 grid place-content-center overflow-hidden">
            <div class="h-60 w-screen flex">
                <div class="h-full w-[100%] bg-morado-1 grid place-content-center">
                    <div class="pl-16 py-10 h-full flex gap-2">
                        <div class="pt-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-azul-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </div>
                        <div class="text-amarillo-1">
                            <H2 class="pb-2 text-3xl">Talento 100% Chiapaneco</H2>
                            <h1 class="pb-2">Nuestro equipo se conforma de talento del Estado, todos estudiantes de la Universidad Autónoma de Chiapas!
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="relative w-3/5">
                    <div class="tri-2"></div>
                    <img class="h-full object-cover object-right" src="{{ asset('resources/web/images/unach.jpg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="h-[150vh] w-screen px-40 grid grid-cols-1 md:grid-cols-3 md:h-[50vh] bg-stone-300 shadow-inner">
            <div class="h-full w-full grid place-content-center">
                <div class="grid place-content-center">
                    <div class="h-52 w-52 rounded-full bg-azul-1 shadow-md bg-cover bg-center"
                        style="background-image: url({{asset('resources/web/images/Cristian.jpg')}})"
                    ></div>
                </div>
                <div class="w-56 text-center">
                    <h1 class="font-medium text-2xl py-3">
                        Cristian Gutiérrez Hernández
                    </h1>
                    <h2 class="font-medium text-base text-morado-1">
                        Desarrollador BackEnd
                    </h2>
                </div>
            </div>
            <div class="h-full w-full grid place-content-center">
                <div class="grid place-content-center">
                    <div class="h-52 w-52 rounded-full bg-azul-1 shadow-md bg-cover bg-center"
                    style="background-image: url({{asset('resources/web/images/foto-c.jpeg')}})"
                    >
                </div>
                </div>
                <div class="w-56 text-center">
                    <h1 class="font-medium text-2xl py-3">
                        Cedrick Marcial Quintero
                    </h1>
                    <h2 class="font-medium text-base text-morado-1">
                        Desarrollador FrontEnd
                    </h2>
                </div>
            </div>
            <div class="h-full w-full grid place-content-center">
                <div class="grid place-content-center">
                    <div class="h-52 w-52 rounded-full bg-azul-1 shadow-md bg-cover bg-center"
                    style="background-image: url({{asset('resources/web/images/Fatima.jpeg')}})"></div>
                </div>
                <div class="w-56 text-center">
                    <h1 class="font-medium text-2xl py-3">
                        Fátima De Los Santos Fiallo
                    </h1>
                    <h2 class="font-medium text-base text-morado-1">
                        Especialista en Ciberseguridad
                    </h2>
                </div>
            </div>
        </div>
    </section>
@endsection
