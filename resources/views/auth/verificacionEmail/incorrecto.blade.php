@extends('layouts.Base_L')

@section('content')

    <section class="h-screen w-screen grid place-content-center absolute">
        <div class="p-3 border-2 border-morado-1 bg-stone-50 bg-opacity-60 rounded-lg">
            <h1 class="text-morado-1 font-bold underline">
                <p class="text-7xl">
                    Falta por verificar
                </p>
            </h1>
            <div class="grid place-content-center mt-7">
                <a
                class="px-3 py-1 rounded-full bg-morado-1 border-2 border-morado-1 text-azul-1 transition hover:bg-azul-1 hover:text-morado-1 hover:font-medium"
                href="{{url('/')}}">
                    Ir a inicio
                </a>
            </div>
        </div>
        
    </section>

    <section class="h-screen w-screen overflow-hidden">
        <div class="underlay-photo h-full w-full" style="background-image: url({{asset('resources/web/images/bg4.jpg')}})"></div>
        <div class="underlay-black"></div> 
    </section>

@endsection