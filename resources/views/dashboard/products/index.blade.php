@extends('layouts.dashboard')

@section('page_name')
    Produtos
@endsection

@section('content')
    <div>
        <div class="flex justify-end">
            <a href="{{ route('dashboard.products.create')  }}"
               class="btn-sm bg-green-500 hover:bg-green-600 text-white text-right">Criar produto
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
                                    Título
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Descrição
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Preço
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Categoria
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Editar</span>
                                    <span class="sr-only">Excluir</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach(auth()->user()->store->products as $product)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-25 w-25">
                                                <a href="{{ asset($product->image_path) }}" target="_blank">
                                                    <img class="h-10 rounded object-contain"
                                                         src="{{ asset($product->image_path) }}"
                                                         alt="Imagem do produto">
                                                </a>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $product->title }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $product->slug }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $product->description }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        R$ {{ $product->price }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        @if ($product->category)
                                            <span class="bg-gray-500 text-white min-w-20 py-1 px-2 rounded">
                                                {{ $product->category->name }}
                                            </span>
                                        @else
                                            Sem categoria
                                        @endif
                                    </td>
                                    <td class="m-auto whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end text-center space-x-4">
                                            <a href="#"
                                               class="bg-indigo-100 text-indigo-600 hover:text-indigo-900 py-1 px-2 rounded">
                                                Visualizar
                                            </a>
                                            <a href="{{ route('dashboard.products.edit', $product) }}"
                                               class="bg-yellow-100 text-yellow-600 hover:text-yellow-900 py-1 px-2 rounded">
                                                Editar
                                            </a>
                                            <form action="{{ route('dashboard.products.delete', $product) }}"
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
