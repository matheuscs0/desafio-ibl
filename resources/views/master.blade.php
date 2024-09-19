<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHub</title>
    @vite('resources/css/app.css')
    <!-- Referência para o JavaScript gerado pelo Vite -->
    @vite('resources/js/app.js')
</head>

<body>
    <nav class="w-full h-20 flex justify-between shadow-md items-center sm:h-24 md:h-24 z-50 px-10 bg-black">
        <div class="w-1/2 h-full flex justify-start items-center gap-10">
            <div class="flex justify-center items-center gap-5">

                <a href="{{ route('livros.index') }}" class="flex text-2xl font-bold text-white">BookHub</a>
            </div>
            <div>
                <form action="{{ route('livros.search') }}" method="GET">
                    <input type="text" name="query" class="w-[250px] p-2 border rounded"
                        placeholder="Procure por um livro..." />
                </form>
            </div>
        </div>
    </nav>
    <div class="container mx-auto my-4">
        @yield('content')
    </div>

</body>

</html>
