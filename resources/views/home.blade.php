<div>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourPet - Plataforma de Adoção de Animais</title>
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
         background: url('/imagem/home.png') no-repeat center center;
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

        .btn {
            display: inline-block;
            background-color: var(--azul-goiaba);
            color: var(--branco);
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: var(--roxo);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .features {
            padding: 80px 20px;
            text-align: center;
            background-color: var(--branco);
        }

        .features h2 {
            color: var(--roxo);
            font-size: 36px;
            margin-bottom: 50px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature {
            padding: 30px;
            border-radius: 10px;
            background-color: #f0f8ff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .feature img {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }

        .feature h3 {
            color: var(--roxo);
            font-size: 24px;
            margin-bottom: 15px;
        }

        footer {
            background: linear-gradient(135deg, var(--roxo), var(--azul-goiaba));
            color: var(--branco);
            text-align: center;
            padding: 30px 0;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .hero h2 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
            }
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
            <h2>Encontre seu novo melhor amigo</h2>
            <p>Conectamos animais que precisam de um lar com pessoas dispostas a dar amor e carinho</p>
            <a href="#" class="btn">Ver animais disponíveis</a>
        </div>
    </section>

    <section class="features">
        <h2>Por que escolher o YourPet?</h2>
        <div class="feature-grid">
            <div class="feature">
                <img src="https://via.placeholder.com/80" alt="Ícone de segurança">
                <h3>Adoção Segura</h3>
                <p>Todas as ONGs e protetores são verificados para garantir a segurança do processo.</p>
            </div>
            <div class="feature">
                <img src="https://via.placeholder.com/80" alt="Ícone de busca">
                <h3>Busca Inteligente</h3>
                <p>Encontre o pet perfeito com nosso sistema de busca avançado por características.</p>
            </div>
            <div class="feature">
                <img src="https://via.placeholder.com/80" alt="Ícone de suporte">
                <h3>Suporte Completo</h3>
                <p>Te acompanhamos em todo o processo de adoção e damos suporte pós-adoção.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 YourPet - Plataforma de Adoção de Animais. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
</div>
