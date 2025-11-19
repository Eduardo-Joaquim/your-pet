<div>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animal - YourPet</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f4ff;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 650px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #7b2ff7;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            margin-top: 15px;
            display: block;
            color: #333;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        textarea {
            resize: none;
            height: 120px;
        }

        button {
            width: 100%;
            background: #4facfe;
            border: none;
            padding: 15px;
            border-radius: 25px;
            color: white;
            font-weight: bold;
            margin-top: 20px;
            cursor: pointer;
            transition: .3s;
        }

        button:hover {
            background: #7b2ff7;
        }

        a {
            text-decoration: none;
            color: #4facfe;
            font-weight: bold;
            display: block;
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🐾 Cadastrar Animal para Adoção</h2>

    <form action="{{ route('animals.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nome do Animal</label>
        <input type="text" name="nome" required>

        <label>Espécie</label>
        <select name="especie" required>
            <option value="Cachorro">Cachorro</option>
            <option value="Gato">Gato</option>
            <option value="Outro">Outro</option>
        </select>

        <label>Idade (em anos)</label>
        <input type="number" name="idade" required>

        <label>Raça</label>
        <input type="text" name="raca" required>

        <label>Descrição e Contato</label>
        <textarea name="descricao" required></textarea>

        <label>Foto do Animal</label>
        <input type="file" name="foto" required>

        <button type="submit">Cadastrar Pet</button>

        <a href="{{ route('animals.index') }}">← Voltar para a lista</a>
    </form>
</div>

</body>
</html>
    
</div>
