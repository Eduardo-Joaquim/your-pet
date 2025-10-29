<div>
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
            margin: 10px 0 0 0;
        }

        nav a {
            color: var(--branco);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
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
            transition: transform 0.3s ease;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.45);
            z-index: 1;
            border-radius: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 20px;
        }

        .hero:hover {
            transform: scale(1.02);
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

        /* FEATURES SECTION */
        .features {
            background-color: var(--cinza-claro);
            padding: 80px 20px;
            text-align: center;
        }

        .features h2 {
            color: var(--roxo);
            font-size: 32px;
            margin-bottom: 40px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .feature {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            padding: 30px;
            transition: all 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .feature img {
            width: 100%;
            max-width: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        footer {
            background: linear-gradient(135deg, var(--roxo), var(--azul));
            color: white;
            text-align: center;
            padding: 25px 0;
            font-size: 14px;
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
            <li><a href="{{ route('animals.index') }}">Animais Para Adoção</a></li>
            <li><a href="{{ route('como-funciona') }}">Como Funciona</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
        </ul>
    </nav>
</header>

<section class="hero-container">
            <div class="hero" style="background-image: url('{{ asset('imagem/adotar.jpg') }}');" onclick="window.location.href='{{ route('animals.index') }}'">
            <div class="hero-content">
            <h2>🐾 Adotar animais</h2>
            <p>Veja todos os pets disponíveis e encontre o companheiro ideal.</p>
            <a href="{{ route('animals.index') }}" class="btn">Ver animais</a>
        </div>
    </div>

            <div class="hero" style="background-image: url('{{ asset('imagem/cadastrar.jpg') }}');" onclick="window.location.href='{{ route('animals.create') }}'">
            <div class="hero-content">
            <h2>❤️ Colocar para adoção</h2>
            <p>Cadastre um animal e ajude-o a encontrar um novo lar.</p>
            <a href="{{ route('animals.create') }}" class="btn">Cadastrar pet</a>
        </div>
    </div>
</section>


<section class="features">
    <h2> Por que escolher o YourPet?</h2>
    <div class="feature-grid">
        <div class="feature">
            <img src="{{ asset('imagem/adoção.png') }}" alt="Adoção Segura">
            <h3>Adoção Segura</h3>
            <p>ONGs e protetores verificados garantem um processo confiável e responsável.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('imagem/pesquisa.png') }}" alt="Busca Inteligente">
            <h3>Busca Inteligente</h3>
            <p>Encontre o pet ideal usando filtros por espécie, porte e idade.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('imagem/suporte.png') }}" alt="Suporte Completo">
            <h3>Suporte Completo</h3>
            <p>Te acompanhamos em todas as etapas com suporte humanizado e acolhedor.</p>
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
</div>