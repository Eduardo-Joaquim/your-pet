<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourPet - Contato</title>
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
            background: url("{{ asset('imagem/contato.png') }}") no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            background-attachment: scroll;
            min-height: 70vh;
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
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            color: var(--branco);
            max-width: 800px;
            padding: 0 20px;
        }

        .hero h2 {
            font-size: 42px;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 0;
        }

        .contato {
            padding: 60px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .contato h2 {
            text-align: center;
            color: var(--roxo);
            font-size: 32px;
            margin-bottom: 40px;
        }

        .contato-form {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .contato-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--roxo);
        }

        .contato-form input,
        .contato-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        .contato-form button {
            background: var(--azul-goiaba);
            color: var(--branco);
            border: none;
            padding: 14px 30px;
            border-radius: 50px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        .contato-form button:hover {
            background: var(--roxo);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
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
                <li><a href="{{ route('site.principal') }}"> Home</a></li>
                <li><a href="{{ route('site.sobrenos') }}"> Sobre Nós </a></li>
                <li><a href="#">Animais para Adoção</a></li>
                <li><a href="{{ route('como-funciona') }}">Como Funciona</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Entre em Contato</h2>
            <p>Estamos prontos para tirar suas dúvidas e ouvir suas sugestões.</p>
        </div>
    </section>

    <section class="contato">
        <h2>Fale Conosco</h2>
        <div class="contato-form">
            <form action="{{ route('contato.store') }}" method="POST">
                @csrf
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="name" placeholder="Seu nome completo" required>

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Seu melhor e-mail" required>

                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="message" rows="5" placeholder="Escreva sua mensagem..." required></textarea>

                <button type="submit">Enviar Mensagem</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 YourPet - Plataforma de Adoção de Animais. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
