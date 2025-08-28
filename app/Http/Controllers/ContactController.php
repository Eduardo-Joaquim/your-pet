<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    // Exibe o formulário
    public function create()
    {
        return view('contato');
    }

    // Salva mensagem no banco
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return redirect()->route('site.contato')->with('success', 'Mensagem enviada com sucesso!');
    }
}
