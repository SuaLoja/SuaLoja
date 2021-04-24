@extends('layouts.app')

@section('content')
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
                                <rect width="32" height="32" rx="16" fill="url(#header-logo)" fill-rule="nonzero"></rect>
                            </svg>
                        </a></div>
                    <nav class="flex flex-grow">
                        <ul class="flex flex-grow justify-end flex-wrap items-center">
                            <li>
                                <a href="/signin"
                                    class="font-medium text-gray-600 hover:text-gray-900 px-5 py-3 flex items-center transition duration-150 ease-in-out">
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="/signup" class="btn-sm text-gray-200 bg-gray-900 hover:bg-gray-800 ml-3">
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
            <section class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 bottom-0 pointer-events-none" aria-hidden="true">
                    <svg width="1360" height="578" viewBox="0 0 1360 578" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="illustration-01">
                                <stop stop-color="#FFF" offset="0%"></stop>
                                <stop stop-color="#EAEAEA" offset="77.402%"></stop>
                                <stop stop-color="#DFDFDF" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <g fill="url(#illustration-01)" fill-rule="evenodd">
                            <circle cx="1232" cy="128" r="128"></circle>
                            <circle cx="155" cy="443" r="64"></circle>
                        </g>
                    </svg>
                </div>
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                        <div class="text-center pb-12 md:pb-16">
                            <h1 class="text-5xl md:text-6xl font-extrabold leading-tighter tracking-tighter mb-4">
                                Sua própria loja
                                <br />
                                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-[#4fd1c5]">
                                    com poucos clicks
                                </span>
                            </h1>
                            <div class="max-w-3xl mx-auto">
                                <p class="text-xl text-gray-600 mb-8">
                                    Crie uma página virtual para seu negócio, coloque seus produtos,
                                    customize e comece a vender. Tudo isso de graça e sem nenhuma
                                    taxa.
                                </p>
                                <div class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center">
                                    <div>
                                        <a class="btn text-white bg-blue-600 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0"
                                            href="/signup">
                                            Criar conta
                                        </a>
                                    </div>
                                    <div>
                                        <a class="btn text-white bg-gray-900 hover:bg-gray-800 w-full sm:w-auto sm:ml-4"
                                            href="https://victorfelipe-guedes.gitbook.io/sualoja/">
                                            Saiba mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="grid sm:grid-cols-12 gap-8 py-8 md:py-12 border-t border-gray-200">
                    <div class="sm:col-span-12 lg:col-span-3">
                        <div class="mb-2">
                            <a class="inline-block" aria-label="Logo" href="/" style="outline: none;">
                                <svg class="w-8 h-8" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <radialGradient cx="21.152%" cy="86.063%" fx="21.152%" fy="86.063%" r="79.941%"
                                            id="footer-logo">
                                            <stop stop-color="#4FD1C5" offset="0%"></stop>
                                            <stop stop-color="#81E6D9" offset="25.871%"></stop>
                                            <stop stop-color="#338CF5" offset="100%"></stop>
                                        </radialGradient>
                                    </defs>
                                    <rect width="32" height="32" rx="16" fill="url(#footer-logo)" fill-rule="nonzero">
                                    </rect>
                                </svg>
                            </a>
                        </div>
                        <div class="text-sm text-gray-600">
                            <a href="#"
                                class="text-gray-600 hover:text-gray-900 hover:underline transition duration-150 ease-in-out">
                                Termos
                            </a>
                            ·
                            <a href="#"
                                class="text-gray-600 hover:text-gray-900 hover:underline transition duration-150 ease-in-out">
                                Política de privacidade
                            </a>
                        </div>
                    </div>

                    <div class="sm:col-span-6 md:col-span-3 lg:col-span-2">
                        <h6 class="text-gray-800 font-medium mb-2">Recursos</h6>
                        <ul class="text-sm">
                            <li class="mb-2">
                                <a href="https://victorfelipe-guedes.gitbook.io/sualoja/"
                                    class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out">
                                    Documentação
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="/blog"
                                    class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="sm:col-span-6 md:col-span-3 lg:col-span-2">
                        <h6 class="text-gray-800 font-medium mb-2">Projeto</h6>
                        <ul class="text-sm">
                            <li class="mb-2">
                                <a href="/" class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out">
                                    Página inicial
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out">
                                    Sobre
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out">
                                    Política de privacidade
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="sm:col-span-6 md:col-span-3 lg:col-span-5">
                        <h6 class="text-gray-800 font-medium mb-2">Se inscreva</h6>
                        <p class="text-sm text-gray-600 mb-4">
                            Receba noticias sobre as próximas atualizações.
                        </p>
                        <form>
                            <div class="flex flex-wrap mb-4">
                                <div class="w-full">
                                    <label class="block text-sm sr-only">
                                        Email
                                    </label>
                                    <div class="relative flex items-center max-w-xs">
                                        <input id="newsletter" type="email"
                                            class="form-input w-full text-gray-800 px-3 py-2 pr-12 text-sm rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50"
                                            placeholder="Seu email" required />
                                        <button type="submit" class="absolute inset-0 left-auto" aria-label="Subscribe">
                                            <span class="absolute inset-0 right-auto w-px -ml-px my-2 bg-gray-300"
                                                aria-hidden="true"></span>
                                            <svg class="w-3 h-3 fill-current text-blue-600 mx-3 flex-shrink-0"
                                                viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"
                                                    fill-rule="nonzero" />
                                            </svg>
                                        </button>
                                    </div>
                                    {{-- <p class="mt-2 text-green-600 text-sm">Obrigado por se inscrever!</p> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="md:flex md:items-center md:justify-between py-4 md:py-8 border-t border-gray-200">
                    <ul class="flex mb-4 md:order-1 md:ml-4 md:mb-0">
                        <li class="ml-4">
                            <a href="https://github.com/SuaLoja"
                                class="flex justify-center items-center text-gray-600 hover:text-gray-900 bg-white hover:bg-white-100 rounded-full shadow transition duration-150 ease-in-out"
                                aria-label="Github">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z" />
                                </svg>
                            </a>
                        </li>
                    </ul>

                    <div class="text-sm text-gray-600 mr-4">
                        Feito por
                        <a class="text-blue-600 hover:underline" href="https://github.com/SuaLoja">
                            SuaLoja.
                        </a>
                        Alguns direitos reservados
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
