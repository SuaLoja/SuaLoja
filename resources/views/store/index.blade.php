@extends('layouts.store', [ 'store' => $store ])

@section('content')
    {{-- Start store banner --}}
    <div style="background-size: auto; background: linear-gradient(0deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)),
    url('https://img.oncartx.io/unsafe/1500x0/https://cdn.oncartx.io/static/theme_images/ac/ac/da/10128_5972951841.jpg') no-repeat top;"
         class="h-96 flex justify-center items-center flex-col shadow-inner text-white divide-y-2 text-center">
        <h1 class="h1 mb-2">Título da loja</h1>
        <div>
            <h3 class="h3 font-thin">Subtitulo</h3>
            <div class="mt-4">
                <a href="{{ $store->url . '/products' }}">
                    <button class="btn-sm uppercase bg-opacity-30 bg-black font-thin text-sm text-white border-2 border-white hover:bg-opacity-50">
                        Conheça nossos produtos
                    </button>
                </a>
            </div>
        </div>
    </div>
    {{-- End store banner --}}

    {{-- Start features card --}}
    <div class="my-2">
        <div class="flex justify-center items-center">
            <div class="w-[50vw] flex flex-row">
                <img src="https://img.oncartx.io/unsafe/1024x0/https://cdn.oncartx.io/static/theme_images/ac/ac/da/10128_4502119298.jpg"
                     class="object-cover"
                     alt="Feature 1"
                >
            </div>
            <div class="w-[50vw] flex justify-center items-center text-left">
                <div class="max-w-md">
                    <h1 class="h1 font-medium uppercase text-2xl">Soluções modernas</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque beatae debitis
                        deleniti, dolor doloribus ducimus eaque.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="w-[50vw] flex justify-center items-center text-left">
                <div class="max-w-md">
                    <h1 class="h1 font-medium uppercase text-2xl">Alta Qualidade</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque beatae debitis
                        deleniti, dolor doloribus ducimus eaque.
                    </p>
                </div>
            </div>
            <div class="w-[50vw] flex flex-row">
                <img src="https://img.oncartx.io/unsafe/1024x0/https://cdn.oncartx.io/static/theme_images/ac/ac/da/10128_2557822519.jpg"
                     class="object-cover"
                     alt="Feature 1"
                >
            </div>
        </div>
    </div>
    {{-- End features card --}}

    {{-- Start divider --}}
    <div class="divide-y">
        <div>&nbsp;</div>
        <div>&nbsp;</div>
    </div>
    {{-- End divider --}}

    {{-- Start featured product --}}
    <div class="w-full h-full flex justify-center items-center">
        <div class="grid grid-cols-2 max-w-6xl justify-center items-center space-x-6">
            <div class="flex flex-col justify-center items-center">
                <img src="https://img.oncartx.io/unsafe/768x768/https://cdn.oncartx.io/static/products_images/59/75/72/1592580315.jpg"
                     alt="Imagem do produto" class="object-contain h-[24rem]">
                <div class="mt-4 flex flex-row space-x-4">
                    <button class="w-24 h-32 border-2 border-gray-500 bg-cover" style="background-image:
                            url('https://img.oncartx.io/unsafe/120x0/https://cdn.oncartx.io/static/products_images/59/75/72/1592580315.jpg')">
                    </button>
                    <button class="w-24 h-32 border-2 border-gray-500 bg-cover" style="background-image:
                            url('https://img.oncartx.io/unsafe/120x0/https://cdn.oncartx.io/static/products_images/96/77/11/1592580352.jpg')">
                    </button>
                </div>
            </div>
            <div class="flex flex-col space-y-2 justify-center items-left">
                <h1 class="h1 text-2xl">Espelho Rosé</h1>
                <div class="py-2 space-y-2">
                    <div class="flex space-x-2 font-normal">
                        <h2 class="h2 text-xl text-blue-500">R$ 179,90</h2>
                        <h2 class="h2 text-xl line-through">R$ 259,90</h2>
                    </div>
                    <h2 class="h1 text-xl font-bold">6X DE R$ 33,29</h2>
                </div>
                <div>
                    <div class="divide-y-2">
                        <div>&nbsp;</div>
                        <h3 class="h3 font-medium text-base py-2 uppercase">Detalhes do produto</h3>
                        <div>&nbsp;</div>
                    </div>
                </div>
                <p class="text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur ducimus eius esse
                    inventore ipsam iste natus neque quas! Adipisci architecto beatae dolore eum minus possimus
                    praesentium sed, sunt voluptatem?
                </p>
                <a href="#" class="py-3">
                    <button class="btn rounded-full bg-blue-500 text-left text-white uppercase w-64">Visualizar</button>
                </a>
            </div>
        </div>
    </div>
    {{-- End featured product --}}

    {{-- Start divider --}}
    <div class="divide-y">
        <div>&nbsp;</div>
        <div>&nbsp;</div>
    </div>
    {{-- End divider --}}
@endsection
