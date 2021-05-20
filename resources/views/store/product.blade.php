@extends('layouts.store', [ 'store' => $store ])

@section('content')
    <div class="w-full h-full flex justify-center items-center">
        <div class="grid grid-cols-2 max-w-6xl justify-center items-center space-x-6">
            <div class="flex flex-col justify-center items-center">
                <img src="https://img.oncartx.io/unsafe/768x768/https://cdn.oncartx.io/static/products_images/31/e4/f6/1592588898.jpg"
                     alt="Imagem do produto" class="object-fit h-[24rem]">
                <div class="mt-4 flex flex-row space-x-4">
                    <button class="w-24 h-32 border-2 border-black bg-cover" style="background-image:
                            url('https://img.oncartx.io/unsafe/120x0/https://cdn.oncartx.io/static/products_images/31/e4/f6/1592588898.jpg')">
                    </button>
                    <button class="w-24 h-32 border-2 border-gray-200 bg-cover" style="background-image:
                            url('https://img.oncartx.io/unsafe/120x0/https://cdn.oncartx.io/static/products_images/d0/ef/34/1592588900.jpg')">
                    </button>
                </div>
            </div>
            <div class="flex flex-col space-y-2 justify-center items-left">
                <h1 class="h1 text-2xl">Almofada Cactus</h1>
                <div class="py-2 space-y-2">
                    <div class="flex space-x-2 font-normal">
                        <h2 class="h2 text-xl text-blue-500">R$ 89,90</h2>
                        <h2 class="h2 text-xl line-through">R$ 129,90</h2>
                    </div>
                    <h2 class="h1 text-xl font-bold">6X DE R$ 16,64</h2>
                    <p class="border-2 border-black py-1 px-3 text-lg font-bold mt-4 max-w-max">33% OFF</p>
                </div>
                <div>
                    <div class="divide-y-2 divide-gray-300">
                        <h3 class="h3 font-medium text-base py-2 uppercase">Detalhes do produto</h3>
                        <p class="text-gray-700 py-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur ducimus
                            eius esse inventore ipsam iste natus neque quas! Adipisci architecto beatae dolore eum
                            minus possimus praesentium sed, sunt voluptatem?
                        </p>
                    </div>
                </div>
                <h2 class="h2 text-xl font-medium text-yellow-500 uppercase py-2">Restam apenas 12 unidades!</h2>
                <a href="#" class="py-3">
                    <button class="btn rounded-full bg-blue-500 text-left text-white uppercase w-64">
                        Contatar vendedor
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
