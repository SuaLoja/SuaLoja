@extends('layouts.store', [ 'store' => $store ])

@section('content')
    <h1 class="h1 text-3xl text-center font-medium">Todas as categorias</h1>

    @if(!$categories->count())
        <h2 class="h2 text-2xl text-center font-medium mt-4">A loja não possui nenhuma categoria.</h2>
    @else
        <div class="flex flex-col justify-center items-center w-full h-full my-6">
            <div class="grid grid-cols-3 grid-flow-row">
                @foreach($categories as $category)
                    <div class="px-5 py-3">
                        <div style="background: linear-gradient(0deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .35)),
                                rgba(255, 255, 255, 1) no-repeat top;"
                             class="h-96 w-[22rem] flex justify-center items-center flex-col shadow-inner text-white
                                divide-y-2 text-center w-[350px] h-[350px]">
                            <h3 class="h3 font-thin uppercase text-2xl">{{ $category->name }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex items-center justify-center">{{ $categories->links() }}</div>
    @endif
@endsection