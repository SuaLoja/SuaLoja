@extends('layouts.store', [ 'store' => $store ])

@section('content')
    <h1 class="h1 text-3xl text-center font-medium">Todos os produtos</h1>

    {{-- Start products grid --}}
    <div class="flex flex-col justify-center items-center w-full h-full my-6">
        <div class="grid grid-cols-3 grid-flow-row">
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/31/e4/f6/1592588898.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Almofada Cactus</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 129,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 89,90</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 16,64</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/f9/d2/39/1592588815.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Almofada de Tricô</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 139,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 119,00</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 22,02</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/ff/b5/5d/1592588913.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Almofada Flores Belas</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 139,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 119,00</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 22,02</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/0d/bf/a2/1592588682.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Almofada Flores do Jardim</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 119,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 89,90</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 16,64</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/36/5d/77/1592588571.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Almofada Geométrica</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 139,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 119,00</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 22,02</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/f0/32/64/1592588617.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Almofada Olho de Hórus</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 139,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 119,00</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 22,02</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/1b/7e/c5/1592588447.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Almofada Pelinhos</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 149,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 119,00</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 22,02</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/ec/29/53/1592588752.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Almofada Relevo</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 139,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 119,00</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 22,02</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/e5/a8/3a/1592588519.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Almofada Texturada</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 139,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 119,00</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 22,02</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/32/ef/11/1592594772.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Almofada Escrivaninha</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 279,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 229,00</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 45,55</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/84/10/c0/1592589408.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Banco Geométrico</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 179,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 139,00</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 25,72</h2>
                </div>
            </div>
            <div class="px-10 py-3">
                <img src="https://img.oncartx.io/unsafe/300x300/https://cdn.oncartx.io/static/products_images/bc/e2/80/1592589455.jpg"
                     alt="Imagem do produto">
                <div class="mt-4">
                    <h3 class="h3 text-lg font-thin">Cadeira Acapulco Turquesa</h3>
                    <div class="flex space-x-2 mt-2">
                        <h2 class="h2 text-lg font-bold line-through">R$ 199,90</h2>
                        <h2 class="h2 text-lg font-bold text-blue-500">R$ 149,00</h2>
                    </div>
                    <h2 class="h2 text-lg font-bold uppercase">6x de R$ 27,57</h2>
                </div>
            </div>
        </div>
        <div class="text-left flex justify-center items-center">
            <button class="btn-sm bg-gray-200 text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
            </button>
            <p class="m-4">Página 1 de 4</p>
            <button class="btn-sm bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </div>
    </div>
    {{-- End products grid --}}

    {{-- Start pagination buttons --}}

    {{-- End pagination buttons --}}
@endsection