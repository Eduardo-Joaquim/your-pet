<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    // LISTAR ANIMAIS
    public function index(Request $request)
    {
        $q = $request->query('q');
        $especie = $request->query('especie');

        $animals = Animal::query()
            ->when($especie && $especie !== 'todos', fn($query)
                => $query->where('especie', $especie))
            ->when($q, fn($query, $q)
                => $query->where('nome', 'LIKE', "%$q%"))
            ->orderBy('created_at', 'desc')
            ->paginate(12)
            ->withQueryString();

        return view('animals.index', compact('animals', 'q', 'especie'));
    }

    // FORM DE CADASTRO
    public function create()
    {
        return view('animals.create');
    }

    // SALVAR ANIMAL
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string',
            'idade' => 'required|integer',
            'raca' => 'nullable|string|max:255',
            'descricao' => 'nullable|string',
            'foto' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('animals', 'public');
        }

        Animal::create($data);

        return redirect()->route('animals.index')->with('success', 'Animal cadastrado!');
    }

    // 🔍 PÁGINA DE DETALHES
    public function show(Animal $animal)
    {
        return view('animals.show', compact('animal'));
    }

    // ✏️ PÁGINA DE EDITAR
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    // 🔄 ATUALIZAR
    public function update(Request $request, Animal $animal)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string',
            'idade' => 'required|integer',
            'raca' => 'nullable|string|max:255',
            'descricao' => 'nullable|string',
            'foto' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            if ($animal->foto) Storage::disk('public')->delete($animal->foto);
            $data['foto'] = $request->file('foto')->store('animals', 'public');
        }

        $animal->update($data);

        return redirect()->route('animals.show', $animal)->with('success', 'Animal atualizado!');
    }

    // ❌ DELETAR
    public function destroy(Animal $animal)
    {
        if ($animal->foto) Storage::disk('public')->delete($animal->foto);
        $animal->delete();

        return redirect()->route('animals.index')->with('success', 'Animal removido!');
    }
}
