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
            <form action="{{ route('livros.update', $livro) }}" method="POST" class="w-full flex flex-col gap-5">
                @csrf
                @method('PUT') <!-- Necessário para o método PUT -->
                <div class="flex flex-col gap-5">
                    <div class="w-full flex flex-col">
                        <label class="text-sm">Nome</label>
                        <input name="title" value="{{ $livro->title }}" class="rounded outline-none border p-2" required
                            type="text" />
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="text-sm">Edição</label>
                        <input name="edition" value="{{ $livro->edition }}" class="rounded outline-none border p-2"
                            required type="text" />
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="text-sm">ISBN</label>
                        <input name="isbn" value="{{ $livro->isbn }}" class="rounded outline-none border p-2" required
                            type="text" />
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="text-sm">Autor</label>
                        <input name="author" value="{{ $livro->author }}" class="rounded outline-none border p-2"
                            required type="text" />
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="text-sm">Editora</label>
                        <input name="publisher" value="{{ $livro->publisher }}" class="rounded outline-none border p-2"
                            required type="text" />
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="text-sm">Número de páginas</label>
                        <input name="page_count" type="number" value="{{ $livro->page_count }}"
                            class="rounded outline-none border p-2" required />
                    </div>
                </div>
                <div class="w-full flex justify-center gap-5">
                    <button type="submit" class="p-2 py-1 bg-black rounded hover:opacity-80 text-white">Editar</button>
                </div>
            </form>
            <!-- Formulário de Deletar separado -->
            <form action="{{ route('livros.destroy', $livro) }}" method="POST" class="mt-5">
                @csrf
                @method('DELETE')
                <button type="submit" class="p-2 py-1 bg-black rounded hover:opacity-80 text-white">Deletar</button>
            </form>
        </div>
    </div>
</div>
@endsection
