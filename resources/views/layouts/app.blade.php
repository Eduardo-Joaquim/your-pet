<!DOCTYPE html<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourPet - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <div class="top-bar">
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

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2025 YourPet - Plataforma de Adoção de Animais. Todos os direitos reservados.</p>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const userBtn = document.getElementById('user-btn');
    const userMenu = document.getElementById('user-menu');

    if (userBtn && userMenu) {
        userBtn.addEventListener('click', () => {
            userMenu.style.display = userMenu.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', (e) => {
            if (!userBtn.contains(e.target) && !userMenu.contains(e.target)) {
                userMenu.style.display = 'none';
            }
        });
    }
});
</script>

</body>
</html>