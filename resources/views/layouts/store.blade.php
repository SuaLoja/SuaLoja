<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $store->name }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="font-inter antialiased bg-white tracking-tight transition ease-in-out duration-150">
{{-- Start header --}}
<header class="grid grid-cols-3 items-center px-12 py-8 bg-black text-white text-center">
    <div>
        <ul class="flex flex-row space-x-4 uppercase text-xs font-medium tracking-wider">
            <li>
                <a href="/{{ $store->url }}">Home</a>
            </li>
            <li>
                <a href="/{{ $store->url }}#products">Produtos</a>
            </li>
            <li>
                <a href="/{{ $store->url }}#categories">Categorias</a>
            </li>
        </ul>
    </div>
    <h4 class="h4 uppercase font-medium text-2xl">{{ $store->name }}</h4>
    <div class="flex items-center justify-end space-x-2">
        <div class="border-2 border-white px-4 py-2 flex items-center justify-center space-x-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="text-xs font-bold">R$ 0,00</span>
        </div>
    </div>
</header>
{{-- End header --}}

<main class="m-4">
    @yield('content')
</main>

{{-- Start divider --}}
<hr />
{{-- End divider --}}

{{-- Start footer --}}
<footer class="flex justify-center items-center">
    <div class="grid @if($store->description) grid-cols-3 @else grid-cols-2 @endif py-8 auto-cols-max max-w-6xl">
        @if($store->description)
            <div class="text-left">
                <h3 class="h3 text-lg uppercase mb-6">Sobre nós</h3>
                <p>
                    {{ $store->description }}
                </p>
            </div>
        @endif
        <div class='text-center'>
            <h1 class="h1 font-medium text-2xl uppercase">{{ $store->name }}</h1>
            <div class="mt-4">
                <ul class="flex flex-col justify-center items-center">
                    <li class="flex flex-row items-center justify-between w-32 space-x-2 ">
                        <span class="text-md text-gray-700">Facebook:</span>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24">
                                <path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="flex flex-row items-center justify-between w-32 space-x-2 ">
                        <span class="text-md text-gray-700">Instagram:</span>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24">
                                <path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path>
                                <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                <path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="flex flex-row items-center justify-between w-32 space-x-2 ">
                        <span class="text-md text-gray-700">Youtube:</span>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24">
                                <path d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404 c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814 c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763 C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-right">
            <h3 class="h3 text-lg uppercase mb-6">Rodapé</h3>
            <ul class="flex flex-col space-x-4 uppercase text-sm font-medium tracking-wider">
                <li>
                    <a href="/{{ $store->url }}">Home</a>
                </li>
                <li>
                    <a href="/{{ $store->url . "/products" }}">Produtos</a>
                </li>
                <li>
                    <a href="/{{ $store->url . "/categories" }}">Categorias</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
{{-- End footer --}}
</body>

</html>
