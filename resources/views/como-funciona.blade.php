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
        }/* ===== TOPO ===== */
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
            <img src="{{ asset('imagem/logo.png') }}" alt="Logo">
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
</div>