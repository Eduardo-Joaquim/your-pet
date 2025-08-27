<div>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - YourPet</title>
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

        .about-hero {
           background: url('/imagem/sobrenos.png') no-repeat center center;
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .about-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
        }

        .about-hero-content {
            position: relative;
            z-index: 1;
            color: var(--branco);
            max-width: 800px;
            padding: 0 20px;
        }

        .about-hero h2 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .about-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .about-section {
            margin-bottom: 50px;
        }

        .about-section h3 {
            color: var(--roxo);
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
        }

        .about-section p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: justify;
        }

        .mission-vision {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .mission, .vision {
            background-color: #f0f8ff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .mission h4, .vision h4 {
            color: var(--azul-goiaba);
            font-size: 24px;
            margin-bottom: 15px;
            text-align: center;
        }

        .team {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .team-member {
            background-color: var(--branco);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid var(--azul-goiaba);
        }

        .team-member h4 {
            color: var(--roxo);
            margin-bottom: 10px;
        }

        .team-member p {
            color: #666;
            font-size: 16px;
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
            .about-hero h2 {
                font-size: 36px;
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
                <li><a href="{{ route('site.principal') }}">Home</a></li>
                <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                <li><a href="{{ route('animals.index') }}">Animais para Adoção</a></li>
                <li><a href="{{ route('como-funciona') }}">Como Funciona</a> </li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="about-hero">
        <div class="about-hero-content">
            <h2>Sobre Nós</h2>
        </div>
    </section>

    <div class="about-container">
        <section class="about-section">
            <h3>Nossa História</h3>
            <p>O YourPet nasceu em 2025 como um projeto de estudantes da ETEC de Itaquera I, motivados pelo problema do abandono de animais no Brasil. Segundo a Organização Mundial de Saúde (OMS), existem mais de 30 milhões de cães e gatos vivendo nas ruas do país.</p>
            <p>Diante desse cenário alarmante, decidimos criar uma plataforma que conectasse ONGs, protetores independentes e adotantes, tornando o processo de adoção mais acessível, eficiente e seguro para todos os envolvidos.</p>
        </section>

        <div class="mission-vision">
            <div class="mission">
                <h4>Missão</h4>
                <p>Promover a adoção responsável por meio de ferramentas tecnológicas que simplifiquem a conexão entre adotantes e protetores, reduzindo o número de animais abandonados.</p>
            </div>
            <div class="vision">
                <h4>Visão</h4>
                <p>Tornar-se uma referência nacional em soluções digitais voltadas ao bem-estar animal, influenciando positivamente a cultura de adoção no Brasil.</p>
            </div>
        </div>

        <section class="about-section">
            <h3>Nossos Valores</h3>
            <p><strong>Respeito aos animais:</strong> Acreditamos que todo animal merece dignidade, cuidado e amor.</p>
            <p><strong>Ética profissional:</strong> Atuamos com transparência e integridade em todas as nossas relações.</p>
            <p><strong>Inclusão digital:</strong> Buscamos tornar a tecnologia acessível para todos os envolvidos no processo de adoção.</p>
            <p><strong>Compromisso social:</strong> Contribuímos para a solução de um problema social grave.</p>
            <p><strong>Inovação:</strong> Estamos sempre buscando melhorar e evoluir nossas soluções.</p>
        </section>

        <section class="about-section">
            <h3>Nossa Equipe</h3>
            <div class="team">
                <div class="team-member">
                    <img src="{{ asset('imagem/antoni.png') }}" alt="Antony de Souza Del Rey">
                    <h4>Antony de Souza Del Rey</h4>
                    <p>Desenvolvedor Back-end</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('imagem/edu.png') }}" alt="Eduardo Joaquim">
                    <h4>Eduardo Joaquim</h4>
                    <p>Desenvolvedor Front-end</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('imagem/agosto.png') }}" alt="Matheus Agostinho de Lima">
                    <h4>Matheus Agostinho de Lima</h4>
                    <p>Analista de Sistemas</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('imagem/preto.png') }}" alt="Matheus Henrique de Souza Gonçalves Campos">
                    <h4>Matheus Henrique de Souza Gonçalves Campos</h4>
                    <p>Designer UX/UI</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('imagem/pedro.png') }}" alt="Pedro Henrique Damas Hinno">
                    <h4>Pedro Henrique Damas Hinno</h4>
                    <p>Gerente de Projeto</p>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 YourPet - Plataforma de Adoção de Animais. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
</div>
