<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro; 

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Livro::create([
            'title' => 'Exemplo de Livro',
            'author' => 'Autor Exemplo',
            'isbn' => '123456789',
            'page_count' => 200,
            'edition' => '1ª Edição',
            'publisher' => 'Editora Exemplo',
        ]);
    }
}
