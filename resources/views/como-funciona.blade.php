<div>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourPet - Como Funciona</title>
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
            height: 450px;
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
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        /* Seção Como Funciona */
        .steps {
            padding: 60px 20px;
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .step {
            background: var(--branco);
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .step:hover {
            transform: translateY(-5px);
        }

        .step h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--roxo);
        }

        .step p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        footer {
            background: var(--roxo);
            color: var(--branco);
            text-align: center;
            padding: 15px;
            margin-top: 40px;
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
                <li><a href="#">Animais para Adoção</a></li>
                <li><a href="{{ route('como-funciona') }}">Como Funciona</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Como Funciona</h2>
            <p>Conectamos animais que precisam de um lar com pessoas dispostas a dar amor e carinho.</p>
        </div>
    </section>

    <section class="steps">
        <div class="step">
            <h3>1. Cadastro</h3>
            <p>Crie sua conta na plataforma e complete seu perfil para começar.</p>
        </div>
        <div class="step">
            <h3>2. Escolha</h3>
            <p>Navegue pelos animais disponíveis e encontre aquele que combina com você.</p>
        </div>
        <div class="step">
            <h3>3. Solicitação</h3>
            <p>Envie sua solicitação de adoção e aguarde a análise da instituição parceira.</p>
        </div>
        <div class="step">
            <h3>4. Adoção e Acompanhamento</h3>
            <p>Finalize a adoção e receba suporte e dicas para cuidar do seu novo amigo.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 YourPet - Plataforma de Adoção de Animais. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
</div>