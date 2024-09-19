@extends('master')

@section('content')
<div class="w-full h-full flex flex-wrap justify-center items-center gap-8 mt-10 transition-all duration-500">
    <a
        href="{{ route('livros.create') }}"
        class="w-[252px] h-[450px] flex flex-col items-center rounded-xl hover:shadow-xl transition-all duration-300 cursor-pointer bg-black/5"
    >
        <div class="w-full flex justify-center items-center h-full">
            <i class="text-[100px] p-2 hover:bg-black/10 rounded-full text-black/30 duration-300 transition-all">+</i>
        </div>
    </a>

    @if ($livros->isEmpty())
    <p>Nenhum livro encontrado ou cadastrado, cadastre ao lado.</p>
    @else
    @foreach($livros as $livro)
    <a
        href="{{ route('livros.show', $livro->id) }}"
        class="w-[252px] h-[450px] flex flex-col items-center rounded-xl hover:shadow-xl transition-all duration-300 cursor-pointer bg-black/5"
    >
        <div class="w-full h-[340px] flex rounded-t-[8px] justify-center items-center overflow-hidden">
            <img
                src='/book.webp'
                class="w-full h-full object-cover rounded-t-[8px] rounded-b-[8px] hover:rounded-b-[0px] transition-all duration-300 hover:scale-105"
            />
        </div>
        <div class="w-full flex-col justify-center items-center px-4 py-5 gap-2">
            <div class="w-full flex">
                <p class="flex text-center text-[12px] text-[#191f28] font-bold uppercase">
                    {{ $livro->author }}
                </p>
            </div>
            <div class="w-full flex items-center my-5">
                <h1 class="flex text-left text-xl font-semibold text-[#191f28]">{{ $livro->title }}</h1>
            </div>
            <div class="w-full flex items-center">
                <p class="flex text-left text-sm text-[#191f28]">{{ $livro->publisher }}</p>
            </div>
        </div>
    </a>
    @endforeach
    @endif
</div>
@endsection
