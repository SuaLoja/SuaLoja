@extends('layouts.dashboard')

@section('page_name')
    Criar produto
@endsection

@section('content')
    <div>
        <form action="{{ route('dashboard.products.create') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="flex flex-col mt-2">
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full lg:w-9/12 px-3">
                        <label class="block text-gray-800 text-sm font-medium mb-1">
                            Título
                        </label>
                        <input name="title" type="text"
                               class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50 @error('title') border-red-500 @enderror"
                               value="{{ old('title') }}">
                        @error('title')
                        <span class="text-red-600 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="w-full lg:w-3/12 px-3">
                        <label class="block text-gray-800 text-sm font-medium mb-1">
                            Preço
                        </label>
                        <input name="price" type="number" step="0.01"
                               class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50 @error('price') border-red-500 @enderror"
                               value="{{ old('price') }}">
                        @error('price')
                        <span class="text-red-600 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full px-3">
                        <label class="block text-gray-800 text-sm font-medium mb-1">
                            Descrição
                        </label>
                        <input name="description" type="text"
                               class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50 @error('description') border-red-500 @enderror"
                               value="{{ old('description') }}">
                        @error('description')
                        <span class="text-red-600 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full px-3">
                        <label class="block text-gray-800 text-sm font-medium mb-1">
                            Quantidade em estoque
                        </label>
                        <input name="quantity_in_stock" type="number"
                               class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50 @error('quantity_in_stock') border-red-500 @enderror"
                               value="{{ old('quantity_in_stock') }}">
                        @error('quantity_in_stock')
                        <span class="text-red-600 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full px-3">
                        <label class="block text-gray-800 text-sm font-medium mb-1">
                            Categoria
                        </label>
                        <select name="category_id"
                                class="form-select w-full text-gray-800 px-3 py-2 pr-12 rounded
                                border-gray-300 focus:ring-blue-500 focus:ring-opacity-50">
                            <option value={{ null }}></option>
                            @foreach($categories as $category)
                                <option value="{{ $category["id"] }}">
                                    {{ $category["name"] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full px-3">
                        <label class="block text-gray-800 text-sm font-medium mb-1">
                            Imagem
                        </label>
                        <input name="images[]" type="file" multiple
                               class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50 @error('image') border-red-500 @enderror">
                        @error('images.*')
                        <span class="text-red-600 text-sm">
                                {{ $message }}
                        </span>
                        @enderror
                        @error('images')
                        <span class="text-red-600 text-sm">
                                {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('dashboard.products') }}"
                   class="btn-sm bg-blue-500 hover:bg-blue-600 text-white text-right">
                    Voltar
                </a>
                <button class="btn-sm bg-green-500 hover:bg-green-600 text-white text-right" type="submit">
                    Criar
                </button>
            </div>
        </form>
        <div>
@endsection
