<div>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourPet - como funciona </title>
    <style>
        :root {
            --roxo: #6a0dad;
            --azul-goiaba: #4fc3f7;
            --branco: #ffffff;
        }

        body {
            font-family: 'Arial Rounded MT Bold', 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, var(--roxo), var(--azul-goiaba));
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
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        nav a {
            color: var(--branco);
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            text-decoration: underline;
            transform: translateY(-2px);
        }

        .hero {
            background: url('/imagem/funciona.png') no-repeat center center;
            background-size: cover;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            color: var(--branco);
            max-width: 800px;
            padding: 0 20px;
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }





    </style>
</head>
<body>
    <header>
        <div class="logo">
            <!-- Substitua pelo seu logo real -->
            <img src="{{ asset('imagem/logo.png') }}" alt="Logo">
            <h1>YourPet</h1>
        </div>
 <nav>
            <ul>
                <li><a href="{{ route('site.principal') }}"> Home</a></li>
                <li><a href="{{ route('site.sobrenos') }}"> Sobre Nós </a></li>
                <li><a href="#">Animais para Adoção</a></li>
                <li><a href="{{ route('como-funciona') }}">Como Funciona</a> </li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>como funciona</h2>
            <p>Conectamos animais que precisam de um lar com pessoas dispostas a dar amor e carinho</p>
        </div>
    </section>

        </div>
    </section>

    <footer>
        <p>&copy; 2025 YourPet - Plataforma de Adoção de Animais. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
</div>
