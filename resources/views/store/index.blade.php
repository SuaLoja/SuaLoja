@extends('layouts.store', [ 'store' => $store ])

@section('content')
    {{-- Start banner --}}
    @if($store->banner_path || $store->description)
        <div class='flex justify-center items-center'>
            <div class='grid grid-flow-col max-w-4xl space-x-4'>
                @if($store->banner_path)
                    <img
                            src='{{ asset($store->banner_path) }}'
                            alt='Banner image'
                            class='w-96 h-96 object-contain'>
                @endif
                @if($store->description)
                    <div class='flex flex-col justify-center items-center text-left'>
                        <p class='text-xl'>
                            {{ $store->description }}
                        </p>
                    </div>
                @endif
            </div>
        </div>
    @endif
    {{-- End banner--}}

    {{-- Start products grid--}}
    <h1 class='h1 text-3xl font-medium w-full text-center my-6' id='products'>Produtos</h1>

    <div class='grid grid-cols-3 max-w-7xl flex-none px-24 justify-center'>
        <div class='flex flex-col'>
            <h3 class='h3 text-xl font-bold' id='categories'>Categorias</h3>
            <ul class='mt-4 space-y-2 font-thin text-gray-700'>
                <li>
                    <a href='/{{ $store->url }}'
                       class='@if (!Request::query('category_id')) font-bold text-blue-500 @endif'
                    >
                        Todas
                    </a>
                </li>
                @foreach($categories as $category)
                    <li>
                        <a href='?category_id={{ $category->id }}'
                           class='@if (Request::query('category_id') == $category->id) font-bold text-blue-500 @endif'>
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class='col-span-2 flex justify-between'>
            @if(!$products->count())
                <h3 class='h3 text-xl font-normal'>
                    Nenhum produto encontrado!
                </h3>
            @endif
            <div class='grid grid-cols-3 grid-flow-row gap-4'>
                @foreach($products as $product)
                    <a href='/{{ $store->url }}/product/{{ $product->slug }}'>
                        <div class='flex flex-col hover:ring-2 hover:ring-gray-200 p-2 transition-all duration-150'>
                            <img src='/{{ $product->images[0]->image_path }}' alt=''>
                            <div>
                                <p class='h-20'>{{ $product->title }}</p>
                                <div class='flex justify-between items-center'>
                                    <p class='text-gray-700 text-sm'>
                                        {{ $product->quantity_in_stock }} unidade(s)
                                    </p>
                                    <p class='text-base font-medium text-gray-800'>
                                        R$ {{ $product->price }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class='col-span-3 flex justify-end'>
            {{ $products->links() }}
        </div>
    </div>
    {{-- End products grid--}}
@endsection
