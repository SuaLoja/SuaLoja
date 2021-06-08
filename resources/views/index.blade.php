@extends('layouts.app')

@section('content')
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
                            @auth
                                <div>
                                    <a class="btn text-white bg-blue-600 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0"
                                       href="/dashboard">
                                        Ir para a dashboard
                                    </a>
                                </div>
                            @endauth
                            @guest
                                <div>
                                    <a class="btn text-white bg-blue-600 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0"
                                       href="{{ route('auth.signup') }}">
                                        Criar conta
                                    </a>
                                </div>
                            @endguest
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

    <section class="relative">


        <div class="absolute inset-0 bg-gray-100 pointer-events-none mb-16" aria-hidden="true"></div>
        <div class="absolute left-0 right-0 m-auto w-px p-px h-20 bg-gray-200 transform -translate-y-1/2"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-12 md:pt-20">
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-16">
                    <h1 class="h2">Explore as funcionalidades</h1>
                </div>

                <div class="md:grid md:grid-cols-12 md:gap-6">
                    <div class="max-w-xl md:max-w-none md:w-full mx-auto md:col-span-7 lg:col-span-6 md:mt-6">
                        <div class="mb-8 md:-mt-6">
                            <section
                                    class='flex items-center text-lg p-5 rounded border transition duration-300 ease-in-out mb-3'>
                                <div>
                                    <div class="font-bold leading-snug tracking-tight mb-1">
                                        Grátis
                                    </div>
                                    <div class="text-gray-600">
                                        Uma vitrine virtual para você usar e modificar, sem custo algum.
                                    </div>
                                </div>
                                <div class="flex justify-center items-center w-8 h-8 bg-white rounded-full shadow flex-shrink-0 ml-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </section>
                            <section
                                    class='flex items-center text-lg p-5 rounded border transition duration-300 ease-in-out mb-3'>
                                <div>
                                    <div class="font-bold leading-snug tracking-tight mb-1">
                                        Simples de usar
                                    </div>
                                    <div class="text-gray-600">
                                        Você só precisa criar uma conta, adicionar categorias e produtos, fazer algumas
                                        configurações simples e pronto!
                                    </div>
                                </div>
                                <div class="flex justify-center items-center w-8 h-8 bg-white rounded-full shadow flex-shrink-0 ml-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                    </svg>
                                </div>
                            </section>
                            <section
                                    class='flex items-center text-lg p-5 rounded border transition duration-300 ease-in-out mb-3'>
                                <div>
                                    <div class="font-bold leading-snug tracking-tight mb-1">
                                        Open Source
                                    </div>
                                    <div class="text-gray-600">
                                        O código está hospedado no Github, ou seja, você mesmo pode
                                        contribuir para o projeto.
                                    </div>
                                </div>
                                <div class="flex justify-center items-center w-8 h-8 bg-white rounded-full shadow flex-shrink-0 ml-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="max-w-xl md:max-w-none md:w-full mx-auto md:col-span-5 lg:col-span-6 mb-8 md:mb-0 md:order-1"
                         data-aos="zoom-y-out">
                        <div class="relative flex flex-col text-center lg:text-right">
                            <div class="relative inline-flex flex-col">
                                <img class="md:max-w-none absolute w-full left-0 transform animate-float"
                                     src="https://simple.cruip.com/static/media/features-bg.69c5091d.png" width="500"
                                     height="44"
                                     alt="Element" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
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
@endsection
