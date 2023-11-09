@extends('layouts.web')

@section('content')
    <section>
        <div class="h-[530px] w-auto bg-azul-1 relative">
            <div class="h-[310px]">
                <div class="h-full">
                    <img class="h-full w-full bg-cover bg-center" src="{{ URL::asset('resources/web/images/mobile-bbva.png')}}" alt="">
                </div>
            </div>
            <div class="p-5">
                <h1 class="font-bold text-[27px] text-morado-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h1>
                <div class="w-52 p-3 mt-6 bg-morado-1">
                    <p class="font-semibold text-base text-center text-amarillo-1">
                        Conoce cómo aquí
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
            <div class="h-60 w-screen bg-azul-1 flex">
                <div class="h-full w-[100%] bg-azul-1">
                    <div class="px-16 py-10">
                        <H2 class="pb-2 font-normal text-xl text-morado-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </H2>
                        <h1 class="pb-2 font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </h1>
                        <button class="border-x-[20px] border-y-2 p-2 border-morado-1 bg-morado-1 text-amarillo-1 font-semibold">
                            Conoce cómo hacerlo 
                        </button>
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
        <div class="flex bg-amarillo-1 py-4 text-morado-1 font-semibold">
            <div class="w-1/5 grid place-content-center">
                <div class="grid place-content-center">
                    <svg class="h-5 w-5 text-morado-1" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2" />
                        <line x1="1" y1="10" x2="23" y2="10" />
                    </svg>
                </div>
                <p>Busco una tarjeta</p>
            </div>
            <div class="w-1/5 grid place-content-center">
                <div class="grid place-content-center">
                    <svg class="h-5 w-5 text-morado-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p>Necesito un credito</p>
            </div>
            <div class="w-1/5 grid place-content-center">
                <div class="grid place-content-center">
                    <svg class="h-5 w-5 text-morado-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p>Quiero una cuenta</p>
            </div>
            <div class="w-1/5 grid place-content-center">
                <div class="grid place-content-center">
                    <svg class="h-5 w-5 text-morado-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="12" cy="12" r="4" />
                        <circle cx="12" cy="12" r="9" />
                        <line x1="15" y1="15" x2="18.35" y2="18.35" />
                        <line x1="9" y1="15" x2="5.65" y2="18.35" />
                        <line x1="5.65" y1="5.65" x2="9" y2="9" />
                        <line x1="18.35" y1="5.65" x2="15" y2="9" />
                    </svg>
                </div>
                <p>Seguros</p>
            </div>
            <div class="w-1/5 grid place-content-center">
                <div class="grid place-content-center">
                    <svg class="h-5 w-5 text-morado-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <p>Pago de impuestos</p>
            </div>
        </div>
    </section>

    <section>
        <div class="flex bg-stone-300 px-10 py-5 shadow-inner">
            <div class="h-[600px] w-[420px] bg-amarillo-1 shadow-md">
                <img class="h-[50%] " src="{{ asset('resources/web/images/mujer-home.png') }}" alt="">
                <div class="h-[50%] p-6 relative">
                    <h2 class="font-semibold text-2xl"> Nos unimos para ayudar a salvar vidas</h2>
                    <p class="pt-3 text-base text-gray-500">#AliadosPorLaSalud</p>
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
    </section>

    <section>
        <div class="h-96 bg-amarillo-1 grid place-content-center overflow-hidden">
            <div class="h-60 w-screen flex">
                <div class="h-full w-[100%] bg-morado-1">
                    <div class="pl-16 py-10 flex gap-2">
                        <div class="pt-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-emerald-300">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </div>
                        <div class="text-amarillo-1">
                            <H2 class="pb-2 text-2xl">¿Quieres saber de finanzas?</H2>
                            <h1 class="pb-2">Pregúntale a Educación Financiera BBVA</h1>
                            <div class="grid md:flex md:gap-3">
                                <button
                                    class="w-32 border-x-[20px] border-y-2 p-2 border-azul-1 bg-azul-1 text-white font-semibold">
                                    Ver video
                                </button>
                                <a class="pt-2.5" href="#"> Quiero saber más </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative w-3/5">
                    <div class="tri-2"></div>
                    <img class="h-full object-cover object-right" src="{{ asset('resources/web/images/mujer-home.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="h-72 bg-amarillo-1 grid place-content-center overflow-hidden">
            <div class="h-60 w-screen flex">
                <div class="h-full w-[100%] bg-azul-1">
                    <div class="pl-16 py-10 flex gap-2">
                        <div class="pt-1.5">
                            <div class="relative h-5 w-5 mt-0.5 bg-morado-1 rounded-full">
                                <p class="absolute text-azul-1 -mt-1.5 h-5 w-5 text-center">¡</p>
                            </div>
                        </div>
                        <div class="text-negro">
                            <H2 class="pb-2 text-2xl">¿Y tú ya estás al día?</H2>
                            <h1 class="pb-2">Con la última actualización de tu app BBVA tienes lo que ya conoces y más,
                                solo te tomará unos minutos actualizarla</h1>
                            <div class="py-2.5">
                                <a class="flex hover:underline text-morado-1" href="#">
                                    <div class="relative h-5 w-5 mt-0.5 mr-3 bg-morado-1 rounded-full">
                                        <p class="absolute text-azul-1 text-sm -mt-[0.5px] h-5 w-5 text-center">✓</p>
                                    </div>
                                    <p class="text-morado-1 font-semibold">
                                        Conoce como hacerlo
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="pb-16 bg-morado-1">
            <div class="h-44 grid place-content-center ">
                <div class="text-center gap-4 grid grid-cols-1 text-amarillo-1">
                    <h1 class="text-[27px] font-light">
                        Tu banco desde el celular
                    </h1>
                    <p class="font-bold">
                        Conoce nuestras aplicaciones moviles
                    </p>
                </div>
            </div>

            {{-- este elemeto se puede repetir --}}
            <div class="mx-4 h-72 bg-azul-1 text-morado-1 flex">
                <div class="h-full w-3/5 grid place-content-center">
                    <div class="w-[340px] gap-4 grid grid-cols-1 text-neutral-100">
                        <h1 class="font-bold text-xl">
                            BBVA México
                        </h1>
                        <p class="text-base">
                            Puedes realizar operaciones bancarias estés donde estés, conectándote con BBVA desde tu celular.
                        </p>
                    </div>
                </div>
                <div class="h-full w-2/5 overflow-hidden relative">
                    <div class="bg-contain bg-right-top bg-no-repeat h-[600px] w-[550px] absolute right-0"
                        style="background-image: url({{ asset('resources/web/images/bbva-mx-go.avif') }})"></div>
                </div>
            </div>
            {{--  --}}
        </div>
    </section>

    <section>
        <div class="h-72 bg-amarillo-1 grid place-content-center overflow-hidden">
            <div class="h-44 w-screen">
                <div class="h-full w-[100%] bg-azul-1">
                    <div class="pl-10 py-5 flex gap-10 md:place-content-around md:gap-0">
                        <div class="pt-1.5">
                            <img class="h-32 w-32" src="{{ asset('resources/web/images/mujer-home.png') }}"
                                alt="">
                        </div>
                        <div class="text-negro w-80 md:w-auto grid place-content-center">
                            <H2 class="pb-2 font-medium text-2xl">
                                Protegete del fraude
                            </H2>
                            <h1 class="pb-2">
                                Conoce lo que nunca, nunca, nunca debes hacer, cómo operan los delincuentes y cómo
                                distinguir a BBVA de ellos.
                            </h1>
                        </div>
                        <div class="grid place-content-center">
                            <a class="h-16 mr-10 px-4 grid place-content-center bg-morado-1" href="#">
                                <p class="text-azul-1 text-center font-semibold">
                                    Conoce más
                                </p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-amarillo-1">
        <div class="py-5 px-8 grid gap-8 grid-cols-1 md:grid-cols-2">
            <div class="h-[50vh] bg-azul-1 md:h-full">
                <div class="h-3/5 bg-cover"
                    style="background-image: url({{ asset('resources/web/images/mobile-bbva.png') }})"></div>
                <div class="h-2/5 px-6 relative">
                    <div class="absolute top-7 gap-2 text-morado-1 grid grid-cols-1">
                        <h1 class="font-medium text-2xl">
                            Medio ambiente
                        </h1>
                        <p class="font-light text-negro">
                            En BBVA, la sostenibilidad significa crear oportunidades para poder conseguirlo.
                        </p>
                        <a class="text-blue-700 font-medium" href="#">
                            Saber más
                        </a>
                    </div>
                </div>
            </div>
            <div class="h-[75vh] grid grid-cols-2 gap-4">
                <div class="bg-azul-1 grid place-content-center px-6">
                    <div
                        class="bg-morado-1 h-6 w-6 mb-6 rounded-full text-azul-1 font-medium grid place-content-center">
                        $
                    </div>
                    <h1 class="font-medium text-lg text-morado-1">
                        Sabemos lo valioso que es tu tiempo
                    </h1>
                    <p class="font-light my-1">
                        Realiza los pagos de tus servicios de manera más rápida, a través de nuestros medios digitales
                    </p>
                    <a class="text-morado-1 font-medium" href="#">
                        Saber más
                    </a>
                </div>
                <div class="bg-azul-1 grid place-content-center px-6">
                    <div
                        class="bg-morado-1 h-6 w-6 mb-6 rounded-full text-azul-1 font-medium grid place-content-center">
                        $
                    </div>
                    <h1 class="font-medium text-lg text-morado-1">
                        Sabemos lo valioso que es tu tiempo
                    </h1>
                    <p class="font-light my-1">
                        Realiza los pagos de tus servicios de manera más rápida, a través de nuestros medios digitales
                    </p>
                    <a class="text-morado-1 font-medium" href="#">
                        Saber más
                    </a>
                </div>
                <div class="bg-azul-1 grid place-content-center px-6">
                    <div
                        class="bg-morado-1 h-6 w-6 mb-6 rounded-full text-azul-1 font-medium grid place-content-center">
                        $
                    </div>
                    <h1 class="font-medium text-lg text-morado-1">
                        Sabemos lo valioso que es tu tiempo
                    </h1>
                    <p class="font-light my-1">
                        Realiza los pagos de tus servicios de manera más rápida, a través de nuestros medios digitales
                    </p>
                    <a class="text-morado-1 font-medium" href="#">
                        Saber más
                    </a>
                </div>
                <div class="bg-azul-1 grid place-content-center px-6">
                    <div
                        class="bg-morado-1 h-6 w-6 mb-6 rounded-full text-azul-1 font-medium grid place-content-center">
                        $
                    </div>
                    <h1 class="font-medium text-lg text-morado-1">
                        Sabemos lo valioso que es tu tiempo
                    </h1>
                    <p class="font-light my-1">
                        Realiza los pagos de tus servicios de manera más rápida, a través de nuestros medios digitales
                    </p>
                    <a class="text-morado-1 font-medium" href="#">
                        Saber más
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="h-[150vh] w-screen px-40 grid grid-cols-1 md:grid-cols-3 md:h-[50vh] bg-stone-300 shadow-inner">
            <div class="h-full w-full grid place-content-center">
                <div class="grid place-content-center">
                    <div class="h-52 w-52 rounded-full bg-azul-1 shadow-md"></div>
                </div>
                <div class="w-56 text-center">
                    <h1 class="font-medium text-2xl py-3">
                        Sucursales y cajeros
                    </h1>
                    <h2 class="font-medium text-base text-morado-1">
                        Siempre cerca de ti
                    </h2>
                </div>
            </div>
            <div class="h-full w-full grid place-content-center">
                <div class="grid place-content-center">
                    <div class="h-52 w-52 rounded-full bg-azul-1 shadow-md"></div>
                </div>
                <div class="w-56 text-center">
                    <h1 class="font-medium text-2xl py-3">
                        Sucursales y cajeros
                    </h1>
                    <h2 class="font-medium text-base text-morado-1">
                        Siempre cerca de ti
                    </h2>
                </div>
            </div>
            <div class="h-full w-full grid place-content-center">
                <div class="grid place-content-center">
                    <div class="h-52 w-52 rounded-full bg-azul-1 shadow-md"></div>
                </div>
                <div class="w-56 text-center">
                    <h1 class="font-medium text-2xl py-3">
                        Sucursales y cajeros
                    </h1>
                    <h2 class="font-medium text-base text-morado-1">
                        Siempre cerca de ti
                    </h2>
                </div>
            </div>
        </div>
    </section>
@endsection
