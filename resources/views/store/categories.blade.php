@extends('layouts.store', [ 'store' => $store ])

@section('content')
    <h1 class="h1 text-3xl text-center font-medium">Todas as categorias</h1>

    <div class="flex flex-col justify-center items-center w-full h-full my-6">
        <div class="grid grid-cols-3 grid-flow-row">
            <div class="px-5 py-3">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .35)),
    url('https://img.oncartx.io/unsafe/400x400/https://cdn.oncartx.io/static/collection_images/ff/92/82/1592581475.jpg') no-repeat top;"
                     class="h-96 w-[22rem] flex justify-center items-center flex-col shadow-inner text-white divide-y-2 text-center">
                    <h3 class="h3 font-thin uppercase text-2xl">Espelhos</h3>
                </div>
            </div>
            <div class="px-5 py-3">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .35)),
    url('https://img.oncartx.io/unsafe/400x400/https://cdn.oncartx.io/static/collection_images/22/98/f6/1592581549.jpg') no-repeat top;"
                     class="h-96 w-[22rem] flex justify-center items-center flex-col shadow-inner text-white divide-y-2 text-center">
                    <h3 class="h3 font-thin uppercase text-2xl">Iluminação</h3>
                </div>
            </div>
            <div class="px-5 py-3">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .35)),
    url('https://img.oncartx.io/unsafe/400x400/https://cdn.oncartx.io/static/collection_images/77/c9/82/1592588208.jpg') no-repeat top;"
                     class="h-96 w-[22rem] flex justify-center items-center flex-col shadow-inner text-white divide-y-2 text-center">
                    <h3 class="h3 font-thin uppercase text-2xl">Quadros</h3>
                </div>
            </div>
            <div class="px-5 py-3">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .35)),
    url('https://img.oncartx.io/unsafe/400x400/https://cdn.oncartx.io/static/collection_images/0a/dd/29/1592588910.jpg') no-repeat top;"
                     class="h-96 w-[22rem] flex justify-center items-center flex-col shadow-inner text-white divide-y-2 text-center">
                    <h3 class="h3 font-thin uppercase text-2xl">Almofadas</h3>
                </div>
            </div>
            <div class="px-5 py-3">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .35)),
    url('https://img.oncartx.io/unsafe/400x400/https://cdn.oncartx.io/static/collection_images/50/e0/82/1592589522.jpg') no-repeat top;"
                     class="h-96 w-[22rem] flex justify-center items-center flex-col shadow-inner text-white divide-y-2 text-center">
                    <h3 class="h3 font-thin uppercase text-2xl">Cadeiras</h3>
                </div>
            </div>
            <div class="px-5 py-3">
                <div style="background: linear-gradient(0deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .35)),
    url('https://img.oncartx.io/unsafe/400x400/https://cdn.oncartx.io/static/collection_images/a6/64/d2/1592589410.jpg') no-repeat top;"
                     class="h-96 w-[22rem] flex justify-center items-center flex-col shadow-inner text-white divide-y-2 text-center">
                    <h3 class="h3 font-thin uppercase text-2xl">Plantas e Vasos</h3>
                </div>
            </div>
        </div>
    </div>

    @inertia
@endsection