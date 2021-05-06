@extends('layouts.dashboard')

@section('page_name')
    Criar categoria
@endsection

@section('content')
    <div>
        <form action="{{ route('dashboard.categories.create') }}" method="post">
            @csrf

            <div class="flex flex-col mt-2">
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full px-3">
                        <label class="block text-gray-800 text-sm font-medium mb-1">
                            Nome
                        </label>
                        <input name="name" type="text"
                               class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50 @error('title') border-red-500 @enderror"
                               value="{{ old('name') }}">
                        @error('name')
                        <span class="text-red-600 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('dashboard.categories') }}"
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
