@extends('layouts.app')

@section('content')
    <section class="bg-gradient-to-b from-gray-100 to-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h1 class="h1">
                        Bem vindo de volta. Faça login em sua conta.
                    </h1>
                </div>
                <div class="max-w-sm mx-auto">
                    @if (session()->has('message'))
                        <div class='text-center bg-red-500 mb-4 py-3 px-3 sm:px-6 lg:px-8 rounded'>
                            <p class="font-medium text-white">{{ session('message') }}</p>
                        </div>
                    @endif

                    <form action={{ route('auth.signin') }} method="POST">
                        @csrf

                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full px-3">
                                <label class="block text-gray-800 text-sm font-medium mb-1">
                                    Email
                                </label>
                                <input name="email" type="email"
                                    class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50 @error('email') border-red-500 @enderror"
                                    placeholder="Digite seu email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-red-600 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full px-3">
                                <div class="flex justify-between">
                                    <label class="block text-gray-800 text-sm font-medium mb-1">
                                        Senha
                                    </label>
                                    <a href="reset-password" class="text-sm font-medium text-blue-600 hover:underline">
                                        Tendo problemas pra entrar?
                                    </a>
                                </div>
                                <input name="password" type="password"
                                    class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50 @error('password') border-red-500 @enderror"
                                    placeholder="Digite sua senha">
                                @error('password')
                                    <span class="text-red-600 text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full px-3">
                                <div class="flex justify-between">
                                    <label class="flex items-center">
                                        <input name="remember" type="checkbox"
                                            class="text-blue-500 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50" />
                                        <span class="text-gray-600 ml-2">
                                            Mantenha-me conectado
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mt-6">
                            <div class="w-full px-3">
                                <button class="btn text-white bg-blue-600 hover:bg-blue-700 w-full" type="submit">
                                    Entrar
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="flex items-center my-6">
                        <div class="border-t border-gray-300 flex-grow mr-3"></div>
                        <div class="text-gray-600 italic">Ou</div>
                        <div class="border-t border-gray-300 flex-grow ml-3"></div>
                    </div>
                    <div class="text-gray-600 text-center mt-6">
                        Não possui uma conta?
                        <a href="{{ route('auth.signup') }}"
                            class="text-blue-600 hover:underline transition duration-150 ease-in-out">
                            Crie uma gratuitamente</a>.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
