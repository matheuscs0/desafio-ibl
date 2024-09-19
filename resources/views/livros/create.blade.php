@extends('master')

@section('content')
<div class="w-full h-full flex justify-center items-center mt-10">
    <div class="w-full flex h-full justify-around items-center">
        <div class="w-1/2 h-full flex justify-center items-center">
            <div class="w-96 h-96">
                <img src="/book.webp" alt="" class="w-full h-full object-cover" />
            </div>
        </div>
        <div class="w-1/2 flex flex-col justify-center items-center gap-5">
            <div>
                <h1 class="text-2xl font-bold justify-start">
                    Descrição do livro:
                </h1>
            </div>
            <form action="{{ route('livros.store') }}" method="POST" class="w-full flex flex-col gap-5">
                @csrf
                <div class="w-full flex justify-center gap-10">
                <div class="flex flex-col gap-5">
                <div class="w-full flex flex-col">
                    <label class="text-sm">Nome</label>
                    <input name="title" class="rounded outline-none border p-2" required type="text"/>
                </div>
                <div class="w-full flex flex-col">
                    <label class="text-sm">Edição</label>
                    <input name="edition" class="rounded outline-none border p-2" required type="text"/>
                </div>
                <div class="w-full flex flex-col">
                    <label class="text-sm">ISBN</label>
                    <input name="isbn" class="rounded outline-none border p-2" required type="text" />
                </div>
                </div>
                <div class="flex flex-col gap-5">
                <div class="w-full flex flex-col">
                    <label class="text-sm">Autor</label>
                    <input name="author" class="rounded outline-none border p-2" required type="text"/>
                </div>
                <div class="w-full flex flex-col">
                    <label class="text-sm">Editora</label>
                    <input name="publisher" class="rounded outline-none border p-2" required type="text"/>
                </div>
                <div class="w-full flex flex-col">
                    <label class="text-sm">Número de páginas</label>
                    <input name="page_count" type="text" class="rounded outline-none border p-2" required />
                </div>
                </div>
                </div>
                <div class="w-full flex justify-center gap-5">
                    <button type="submit" class="p-2 bg-black rounded hover:opacity-80 text-white">Criar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


