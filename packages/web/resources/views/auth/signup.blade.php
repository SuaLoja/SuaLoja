@extends('layouts.app')

@section('content')
    <section class="bg-gradient-to-b from-gray-100 to-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h1 class="h1">Crie sua conta gratuitamente.</h1>
                </div>
                <div class="max-w-sm mx-auto">
                    <form action={{ route('auth.signup') }} method="POST">
                        @csrf

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
                                <button class="btn text-white bg-blue-600 hover:bg-blue-700 w-full" type="submit">
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
                        <a href="{{ route('auth.signin') }}"
                            class="text-blue-600 hover:underline transition duration-150 ease-in-out">
                            Faça login
                        </a>
                        , caso já possuir uma conta.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
