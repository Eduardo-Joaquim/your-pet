<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    
    // Lista todos os animais
    public function index()
    {
        $animals = Animal::all(); // Puxa todos os animais do banco
        return view('animals.index', compact('animals'));
    }
    // Mostra o formulário de cadastro
    public function create()
    {
        return view('animals.create');
    }

    // Salva o animal no banco
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'idade' => 'required|integer',
            'raca' => 'nullable|string|max:255',
            'descricao' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $animal = new Animal();
        $animal->nome = $request->nome;
        $animal->especie = $request->especie;
        $animal->idade = $request->idade;
        $animal->raca = $request->raca;
        $animal->descricao = $request->descricao;

        // Upload da foto
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('animals', 'public');
            $animal->foto = $path;
        }

        $animal->save();

        return redirect()->route('animals.index')->with('success', 'Animal cadastrado com sucesso!');
    }
}