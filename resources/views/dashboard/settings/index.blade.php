@extends('layouts.dashboard')

@section('page_name')
    Configurações
@endsection

@section('content')
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1 px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Informações</h3>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('dashboard.settings') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-gray-800 text-sm font-medium mb-1">
                                        Nome
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="name"
                                               value="{{ old('name') ?? auth()->user()->store->name }}"
                                               class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50 @error('name') border-red-500 @enderror">
                                    </div>
                                    @error('name')
                                    <span class="text-red-600 text-sm">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-gray-800 text-sm font-medium mb-1">
                                        URL
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" disabled value="{{ auth()->user()->store->url }}"
                                               class="form-input w-full text-gray-400 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50">
                                        <span class="inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            .sualoja.app
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-gray-800 text-sm font-medium mb-1">
                                        Descrição
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <textarea name="description"
                                                  rows='6' maxlength='255'
                                                  class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50"
                                        >{{ old('description') ?? auth()->user()->store->description }}</textarea>
                                    </div>
                                    @error('description')
                                    <span class="text-red-600 text-sm">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-gray-800 text-sm font-medium mb-1">
                                        Banner
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input name="banner" type="file"
                                               class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300
                                           focus:ring-blue-500 focus:ring-opacity-50 @error('banner') border-red-500 @enderror">
                                    </div>

                                    @error('banner')
                                    <span class="text-red-600 text-sm">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            @if(auth()->user()->store->banner_path)
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <div class='flex flex-col space-y-2 my-2'>
                                            <span class="block text-gray-800 text-sm font-medium mb-1">
                                                Imagem atual
                                            </span>
                                            <img src='{{ asset(auth()->user()->store->banner_path) }}'
                                                 class='object-fit rounded'>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="btn-sm bg-green-500 text-white hover:bg-green-600">
                                Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
