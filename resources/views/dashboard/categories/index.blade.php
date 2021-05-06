@extends('layouts.dashboard')

@section('page_name')
    Categorias
@endsection

@section('content')
    <div>
        <div class="flex justify-end">
            <a href="{{ route('dashboard.categories.create')  }}"
               class="btn-sm bg-green-500 hover:bg-green-600 text-white text-right">
                Criar categoria
            </a>
        </div>
        <div class="flex flex-col mt-2">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-x border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nome
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Editar</span>
                                    <span class="sr-only">Excluir</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach(auth()->user()->store->categories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-medium text-gray-900">
                                        {{ $category->name }}
                                    </td>
                                    <td class="m-auto whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end text-center space-x-4">
                                            <a href="{{ route('dashboard.categories', $category) }}"
                                               class="bg-yellow-100 text-yellow-600 hover:text-yellow-900 py-1 px-2 rounded">
                                                Editar
                                            </a>
                                            <form action="{{ route('dashboard.categories', $category) }}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="bg-red-100 text-red-600 hover:text-red-900 py-1 px-2 rounded"
                                                        type="submit">
                                                    Excluir
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
