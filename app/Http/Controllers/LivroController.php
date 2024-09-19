<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller




{
    public function index()
    {
        $livros = Livro::all();

        return view('home', ['livros' => $livros]); // Passagem correta
    }
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'isbn' => 'required|string|unique:livros,isbn',
        'page_count' => 'required|integer',
        'edition' => 'nullable|string|max:255',
        'publisher' => 'nullable|string|max:255',
    ]);

    Livro::create($request->all());

    return redirect()->route('livros.index')->with('success', 'Livro criado com sucesso!');
}

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        return view('livros.show', compact('livro')); // Crie uma view para exibir detalhes do livro
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        return view('livros.edit', compact('livro')); // Crie uma view para editar o livro
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|unique:livros,isbn,' . $livro->id,
            'page_count' => 'required|integer',
            'edition' => 'nullable|string|max:255',
            'publisher' => 'nullable|string|max:255',
        ]);

        $livro->update($request->all());

        return redirect()->route('livros.index')->with('success', 'Livro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livros.index')->with('success', 'Livro excluído com sucesso!');
    }

    public function search(Request $request)
{
    $query = $request->input('query');
    $livros = Livro::where('title', 'ILIKE', "%$query%")
        ->orWhere('author', 'ILIKE', "%$query%")
        ->orWhere('publisher', 'ILIKE', "%$query%")
        ->get();

    return view('home', ['livros' => $livros]);
}

}
