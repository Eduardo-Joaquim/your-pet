<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourPet - Contato</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        }

        header .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        header .logo img {
            height: 50px;
        }

        header nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 15px;
            padding: 0;
        }

        header nav a {
            color: var(--branco);
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        /* Banner */
        .hero {
            background: url('/imagem/contato-banner.png') no-repeat center center;
            background-size: cover;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            color: var(--branco);
        }

        .hero-content h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 18px;
        }

        /* Equipe */
        .equipe {
            text-align: center;
            margin: 60px auto;
            max-width: 1200px;
            padding: 0 20px;
        }

        .contato-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            width: 280px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .card i {
            font-size: 40px;
            color: var(--roxo);
            margin-bottom: 15px;
        }

        footer {
            background: linear-gradient(135deg, var(--roxo), var(--azul-goiaba));
            color: var(--branco);
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
        /* ===== TOPO ===== */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 50px;
            position: relative;
        }

        .user-actions {
            position: absolute;
            top: 15px;
            right: 40px;
            display: flex;
            gap: 10px;
        }

        /* ===== BOTÕES DE LOGIN/CADASTRO ===== */
        .btn-login, .btn-register {
            background-color: var(--azul-goiaba);
            color: var(--branco);
            padding: 8px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
            border: none;
        }

        .btn-login:hover, .btn-register:hover {
            background-color: var(--roxo);
            transform: translateY(-2px);
        }

        /* ===== MENU DO USUÁRIO ===== */
        .user-btn {
            background: var(--azul-goiaba);
            color: var(--branco);
            border: none;
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .user-btn:hover {
            background: var(--roxo);
        }

        .user-menu-container {
            position: relative;
        }

        .user-menu {
            display: none;
            position: absolute;
            right: 0;
            top: 45px;
            background: rgba(255,255,255,0.95);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            min-width: 200px;
            padding: 10px;
            z-index: 1000;
        }

        .user-menu p {
            color: #333;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .user-menu a,
        .user-menu button {
            display: block;
            width: 100%;
            background: none;
            border: none;
            color: var(--roxo);
            text-decoration: none;
            text-align: left;
            padding: 8px 10px;
            font-size: 14px;
            border-radius: 5px;
            transition: 0.2s;
        }

        .user-menu a:hover,
        .user-menu button:hover {
            background-color: rgba(106, 13, 173, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('imagem/logo.png') }}" alt="Logo YourPet">
            <h1>YourPet</h1>
        </div>

        <div class="user-actions">
            @auth
                <div class="user-menu-container">
                    <button id="user-btn" class="user-btn">
                        👤 {{ Auth::user()->name }}
                    </button>
                    <div id="user-menu" class="user-menu">
                        <p>Email: {{ Auth::user()->email }}</p>
                        <a href="{{ route('profile.edit') }}">Perfil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Sair</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn-login">Entrar</a>
                <a href="{{ route('register') }}" class="btn-register">Cadastrar</a>
            @endauth
        </div>
    </div>

        <nav>
            <ul>
                <li><a href="{{ route('site.principal') }}">Home</a></li>
                <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                <li><a href="{{ route('animals.index') }}">Animais para Adoção</a></li>
                <li><a href="{{ route('como-funciona') }}">Como Funciona</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="contato equipe">
    <h2>Equipe YourPet</h2>
    <p>Aqui estão os contatos de todos os integrantes do grupo:</p>

    <div class="contato-grid">
        <div class="card">
            <i class="fas fa-user"></i>
            <h3>Eduardo Joaquim</h3>
            <p><strong>Tel:</strong> <a href="tel:+5511978112728">(11) 97811-2728</a></p>
            <p><strong>Email:</strong> <a href="mailto:joaquimeeduardo680@gmail.com">joaquimeeduardo680@gmail.com</a></p>
        </div>

        <div class="card">
            <i class="fas fa-user"></i>
            <h3>Matheus Agostinho</h3>
            <p><strong>Tel:</strong> <a href="tel:+5511993463127">(11) 99346-3127</a></p>
            <p><strong>Email:</strong> <a href="mailto:matheusagostinhodelima82@gmail.com">matheusagostinhodelima82@gmail.com</a></p>
        </div>

        <div class="card">
            <i class="fas fa-user"></i>
            <h3>Antony Del Rey</h3>
            <p><strong>Tel:</strong> <a href="tel:+5511951473885">(11) 95147-3885</a></p>
            <p><strong>Email:</strong> <a href="mailto:delrey357@gmail.com">delrey357@gmail.com</a></p>
        </div>

        <div class="card">
            <i class="fas fa-user"></i>
            <h3>Pedro Damas</h3>
            <p><strong>Tel:</strong> <a href="tel:+5511954362456">(11) 95436-2456</a></p>
            <p><strong>Email:</strong> <a href="mailto:pedrodamas840@gmail.com">pedrodamas840@gmail.com</a></p>
        </div>

        <div class="card">
            <i class="fas fa-user"></i>
            <h3>Matheus Henrrique</h3>
            <p><strong>Tel:</strong> <a href="tel:+5511933336975">(11) 93333-6975</a></p>
            <p><strong>Email:</strong> <a href="mailto:mahteush14@gmail.com">mahteush14@gmail.com</a></p>
        </div>
    </div>
</section>

    <footer>
        <p>&copy; 2025 YourPet - Plataforma de Adoção de Animais. Todos os direitos reservados.</p>


        
    </footer>
    <script>
document.addEventListener('DOMContentLoaded', () => {
    const userBtn = document.getElementById('user-btn');
    const userMenu = document.getElementById('user-menu');

    if (userBtn && userMenu) {
        userBtn.addEventListener('click', (e) => {
            e.stopPropagation(); // impede o fechamento imediato
            userMenu.style.display = userMenu.style.display === 'block' ? 'none' : 'block';
        });

        // Fecha o menu ao clicar fora
        document.addEventListener('click', (e) => {
            if (!userMenu.contains(e.target) && e.target !== userBtn) {
                userMenu.style.display = 'none';
            }
        });
    }
});
</script>
</body>
</html>
