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
                        </a>
                    </div>
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
                                            fill-rule="nonzero"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="flex-grow">
            <section class="bg-gradient-to-b from-gray-100 to-white">
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                        <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                            <h1 class="h1">Crie sua conta gratuitamente.</h1>
                        </div>
                        <div class="max-w-sm mx-auto">
                            <form>
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="w-full px-3">
                                        <label class="block text-gray-800 text-sm font-medium mb-1">
                                            Nome <span class="text-red-600">*</span>
                                        </label>
                                        <input name="name" type="text"
                                            class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50"
                                            placeholder="Digite seu nome">
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="w-full px-3">
                                        <label class="block text-gray-800 text-sm font-medium mb-1">
                                            Email <span class="text-red-600">*</span>
                                        </label>
                                        <input name="email" type="email"
                                            class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50"
                                            placeholder="Digite seu email">
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="w-full px-3">
                                        <label class="block text-gray-800 text-sm font-medium mb-1">
                                            Senha <span class="text-red-600">*</span>
                                        </label>
                                        <input name="password" type="password"
                                            class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50"
                                            placeholder="Digite sua senha">
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="w-full px-3">
                                        <label class="block text-gray-800 text-sm font-medium mb-1">
                                            Confirme sua senha <span class="text-red-600">*</span>
                                        </label>
                                        <input name="password_confirmation" type="password"
                                            class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50"
                                            placeholder="Digite sua senha novamente">
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mt-6">
                                    <div class="w-full px-3">
                                        <button class="btn text-white bg-blue-600 hover:bg-blue-700 w-full" type="button">
                                            Enviar
                                        </button>
                                    </div>
                                </div>
                                <div class="text-sm text-gray-500 text-center mt-3">
                                    Ao criar uma conta, você concorda com os <a class="underline" href="#0">termos e
                                        condições</a>.
                                </div>
                            </form>
                            <div class="flex items-center my-6">
                                <div class="border-t border-gray-300 flex-grow mr-3"></div>
                                <div class="text-gray-600 italic">Ou</div>
                                <div class="border-t border-gray-300 flex-grow ml-3"></div>
                            </div>
                            <div class="text-gray-600 text-center mt-6">
                                <a href="/signin" class="text-blue-600 hover:underline transition duration-150 ease-in-out">
                                    Faça login
                                </a>
                                , caso já possuir uma conta.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
