@extends('layouts.store', [ 'store' => $store ])

@section('content')
    <h1 class="h1 text-3xl text-center font-medium">Todos os produtos</h1>

    @if(!$products->count())

    @else
        {{-- Start products grid --}}
        <div class="flex flex-col justify-center items-center w-full h-full my-6">
            <div class="grid grid-cols-3 grid-flow-row">
                @foreach($products as $product)
                    <a href="/{{ $store->url  }}/product/{{ $product->slug }}">
                        <div class="px-10 py-3 w-[400px] h-[400px]">
                            <img src="{{ asset($product->images[0]->image_path) }}"
                                 alt="Imagem do produto" class="w-[300px] h-[300px] object-contain bg-no-repeat">
                            <div class="mt-4">
                                <h3 class="h3 text-lg font-thin">{{ $product->title }}</h3>
                                <div class="flex space-x-2 mt-2">
                                    {{-- <h2 class="h2 text-lg font-bold line-through">R$ 129,90</h2>--}}
                                    <h2 class="h2 text-lg font-bold text-blue-500">R$ {{ $product->price }}</h2>
                                </div>
                                {{-- <h2 class="h2 text-lg font-bold uppercase">6x de R$ 16,64</h2>--}}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex justify-center items-center">
                {{ $products->links() }}
            </div>
    @endif
@endsection
