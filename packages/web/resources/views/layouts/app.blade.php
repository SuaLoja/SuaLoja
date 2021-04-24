<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuaLoja</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="font-inter antialiased bg-white text-gray-900 tracking-tight">
    <div class="flex flex-col min-h-screen overflow-hidden">
        <header class='fixed w-full z-30 md:bg-opacity-90 transition duration-300 ease-in-out bg-white blur shadow-lg'>
            <div class="max-w-6xl mx-auto px-5 sm:px-6">
                <div class="flex items-center justify-between h-16 md:h-20">
                    <div class="flex-shrink-0 mr-4"><a class="block" aria-label="Logo" href="/" style="outline: none;">
                            <svg class="w-8 h-8" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <radialGradient cx="21.152%" cy="86.063%" fx="21.152%" fy="86.063%" r="79.941%"
                                        id="header-logo">
                                        <stop stop-color="#4FD1C5" offset="0%"></stop>
                                        <stop stop-color="#81E6D9" offset="25.871%"></stop>
                                        <stop stop-color="#338CF5" offset="100%"></stop>
                                    </radialGradient>
                                </defs>
                                <rect width="32" height="32" rx="16" fill="url(#header-logo)" fill-rule="nonzero">
                                </rect>
                            </svg>
                        </a></div>
                    <nav class="flex flex-grow">
                        <ul class="flex flex-grow justify-end flex-wrap items-center">
                            <li>
                                <a href="{{ route('auth.signin') }}"
                                    class="font-medium text-gray-600 hover:text-gray-900 px-5 py-3 flex items-center transition duration-150 ease-in-out">
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('auth.signup') }}"
                                    class="btn-sm text-gray-200 bg-gray-900 hover:bg-gray-800 ml-3">
                                    <span>Registrar-se</span>
                                    <svg class="w-3 h-3 fill-current text-gray-400 flex-shrink-0 ml-2 -mr-1"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"
                                            fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="flex-grow">
            @yield('content')
        </main>
    </div>
</body>

</html>
