<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourPet - Animais para Adoção</title>

    <style>
        :root {
            --roxo: #7b2ff7;
            --azul: #4facfe;
            --branco: #ffffff;
            --cinza-claro: #f4f4ff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--branco);
            color: #333;
        }

        header {
            background: linear-gradient(135deg, var(--roxo), var(--azul));
            color: var(--branco);
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .logo img {
            height: 50px;
            margin-right: 15px;
        }

        .logo h1 {
            font-size: 28px;
            margin: 0;
            font-weight: 700;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 0;
            margin: 10px 0 0;
        }

        nav a {
            color: var(--branco);
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* HERO SECTION */
        .hero-container {
            display: flex;
            flex-wrap: wrap;
            height: 400px;
        }

        .hero {
            flex: 1;
            position: relative;
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: 0.3s;
            cursor: pointer;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.45);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 20px;
        }

        .btn {
            background-color: var(--azul);
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: var(--roxo);
        }

        footer {
            background: linear-gradient(135deg, var(--roxo), var(--azul));
            color: white;
            text-align: center;
            padding: 25px 0;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .hero-container {
                flex-direction: column;
                height: auto;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">
        <img src="{{ asset('imagem/logo.png') }}" alt="Logo">
        <h1>YourPet</h1>
    </div>

    <nav>
        <ul>
            <li><a href="{{ route('site.principal') }}">Home</a></li>
            <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
            <li><a href="{{ route('animals.index') }}">Animais Para Adoção</a></li>
            <li><a href="{{ route('como-funciona') }}">Como Funciona</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
        </ul>
    </nav>
</header>

<!-- HERO DUPLO — EXATAMENTE IGUAL AO ORIGINAL -->
<section class="hero-container">

    <div class="hero"
        style="background-image: url('{{ asset('imagem/adotar.jpg') }}');"
        onclick="window.location.href='{{ route('animals.index') }}'">

        <div class="hero-content">
            <h2>🐾 Adotar animais</h2>
            <p>Veja todos os pets disponíveis e encontre o companheiro ideal.</p>
            <a href="{{ route('animals.index') }}" class="btn">Ver animais</a>
        </div>
    </div>

    <div class="hero"
        style="background-image: url('{{ asset('imagem/cadastrar.jpg') }}');"
        onclick="window.location.href='{{ route('animals.create') }}'">

        <div class="hero-content">
            <h2>❤️ Colocar para adoção</h2>
            <p>Cadastre um animal e ajude-o a encontrar um novo lar.</p>
            <a href="{{ route('animals.create') }}" class="btn">Cadastrar pet</a>
        </div>
    </div>

</section>

<!-- LISTAGEM DE ANIMAIS -->
<section style="padding: 60px 20px;">

    <h2 style="text-align: center; color: #7b2ff7; font-size: 32px; margin-bottom: 40px;">
        Animais disponíveis para adoção
    </h2>

    @if($animals->count() === 0)
        <p style="text-align:center;">Nenhum animal disponível no momento.</p>
    @endif

    <div style="
        max-width:1100px; 
        margin:0 auto;
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:30px;">

        @foreach($animals as $animal)
            <div style="
                background:white;
                border-radius:15px;
                box-shadow:0 5px 20px rgba(0,0,0,0.1);
                padding:20px;
                text-align:center;
            ">
                @if($animal->foto)
                    <img src="{{ asset('storage/'.$animal->foto) }}"
                        style="width:100%; height:200px; object-fit:cover; border-radius:10px;">
                @endif

                <h3 style="color:#7b2ff7; margin-top:15px;">{{ $animal->nome }}</h3>
                <p><strong>Espécie:</strong> {{ $animal->especie }}</p>
                <p><strong>Idade:</strong> {{ $animal->idade }} anos</p>

                <a href="{{ route('animals.show', $animal) }}" class="btn">Ver mais</a>
            </div>
        @endforeach

    </div>

</section>

<footer>
    <p>&copy; 2025 YourPet - Plataforma de Adoção de Animais. Todos os direitos reservados.</p>
</footer>

</body>
</html>
