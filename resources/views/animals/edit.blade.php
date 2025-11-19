<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Animal</title>

<style>
    body { font-family:Poppins; background:#f4f4ff; margin:0; padding:0; }
    .container {
        max-width: 700px;
        margin: 40px auto;
        padding: 25px;
        background:white;
        border-radius:20px;
        box-shadow:0 4px 20px rgba(0,0,0,0.1);
    }
    label { display:block; margin-top:15px; font-weight:600; }
    input, select, textarea {
        width:100%;
        padding:10px;
        border-radius:10px;
        border:1px solid #ccc;
        margin-top:5px;
    }
    .btn {
        margin-top:20px;
        display:inline-block;
        padding:10px 20px;
        background:#4facfe;
        border-radius:20px;
        color:white;
        text-decoration:none;
    }
</style>
</head>

<body>

<div class="container">

    <h2 style="text-align:center; color:#7b2ff7;">Editar Animal</h2>

    <form action="{{ route('animals.update', $animal) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nome</label>
        <input type="text" name="nome" value="{{ $animal->nome }}" required>

        <label>Espécie</label>
        <input type="text" name="especie" value="{{ $animal->especie }}" required>

        <label>Idade</label>
        <input type="number" name="idade" value="{{ $animal->idade }}" required>

        <label>Raça</label>
        <input type="text" name="raca" value="{{ $animal->raca }}">

        <label>Descrição</label>
        <textarea name="descricao">{{ $animal->descricao }}</textarea>

        <label>Foto</label>
        <input type="file" name="foto">

        @if($animal->foto)
            <img src="{{ asset('storage/'.$animal->foto) }}" width="200" style="margin-top:10px; border-radius:10px;">
        @endif

        <button class="btn">Salvar alterações</button>
    </form>

</div>

</body>
</html>
