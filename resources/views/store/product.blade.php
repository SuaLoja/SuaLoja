@extends('layouts.store', [ 'store' => $store ])

@section('content')
    <div class="w-full h-full flex justify-center items-center">
        <div class="grid grid-cols-2 max-w-6xl justify-center items-center space-x-6">
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset($product->images[0]->image_path) }}"
                     alt="Imagem do produto" class="object-contain h-[24rem] w-[384px]">
                <div class="mt-4 flex flex-row space-x-4">
                    @foreach($product->images as $image)
                        <button class="w-24 h-32 border-2 @if($loop->iteration === 1) border-black @else  border-gray-200 @endif bg-center bg-contain bg-no-repeat"
                                style="background-image: url('{{ asset($image->image_path) }}')">
                        </button>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col space-y-2 justify-center items-left">
                <h1 class="h1 text-2xl">{{ $product->title }}</h1>
                <div class="py-2 space-y-2">
                    <div class="flex space-x-2 font-normal">
                        <h2 class="h2 text-xl text-blue-500">R$ {{ $product->price }}</h2>
                        {{-- <h2 class="h2 text-xl line-through">R$ 129,90</h2>--}}
                    </div>
                    {{-- <h2 class="h1 text-xl font-bold">6X DE R$ 16,64</h2>--}}
                    {{-- <p class="border-2 border-black py-1 px-3 text-lg font-bold mt-4 max-w-max">33% OFF</p>--}}
                </div>
                <div>
                    <div class="divide-y-2 divide-gray-300">
                        <h3 class="h3 font-medium text-base py-2 uppercase">Detalhes do produto</h3>
                        <p class="text-gray-700 py-2">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
                @if($product->quantity_in_stock <= 25)
                    <h2 class="h2 text-xl font-medium text-yellow-500 uppercase py-2">
                        Restam
                        apenas {{ $product->quantity_in_stock }} {{ Str::plural("unidade", $product->quantity_in_stock) }}
                        !
                    </h2>
                @endif
                <a href="#" class="py-3">
                    <button class="btn rounded-full bg-blue-500 text-left text-white uppercase w-64">
                        Contatar vendedor
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
