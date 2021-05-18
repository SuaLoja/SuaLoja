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
@endsection