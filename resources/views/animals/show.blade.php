<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Detalhes do Animal</title>

<style>
    body { font-family: Poppins; background:#f8f8ff; margin:0; padding:0; }

    .container {
        max-width: 850px;
        margin: 40px auto;
        background: #fff;
        padding: 25px;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    img {
        width: 100%;
        max-height: 380px;
        object-fit: cover;
        border-radius: 15px;
    }

    h1 { text-align:center; color: #7b2ff7; }

    .btn {
        padding: 10px 20px;
        display:inline-block;
        margin-top:20px;
        border-radius: 25px;
        background:#4facfe;
        color:white;
        text-decoration:none;
    }

    .delete-btn {
        background:#ff4d4d;
    }

    @media (max-width:768px){
        .container { margin:20px; padding:15px; }
    }
</style>
</head>

<body>

<div class="container">

    <h1>{{ $animal->nome }}</h1>

    @if($animal->foto)
        <img src="{{ asset('storage/'.$animal->foto) }}">
    @endif

    <p><strong>Espécie:</strong> {{ $animal->especie }}</p>
    <p><strong>Idade:</strong> {{ $animal->idade }} anos</p>
    <p><strong>Raça:</strong> {{ $animal->raca }}</p>
    <p><strong>Descrição:</strong> {{ $animal->descricao }}</p>

    <a class="btn" href="{{ route('animals.edit', $animal) }}">Editar</a>

    <form action="{{ route('animals.destroy', $animal) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button class="btn delete-btn" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
    </form>

    <a class="btn" href="{{ route('animals.index') }}">Voltar</a>

</div>

</body>
</html>
