<div>
    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Como Funciona - YourPet</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
        <style>
            :root {
                --roxo: #6a0dad;
                --azul-goiaba: #4fc3f7;
                --rosa-claro: #fce4ec;
                --cinza-claro: #f9f9f9;
                --branco: #ffffff;
                --preto: #333333;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background-color: var(--cinza-claro);
                color: var(--preto);
            }

            header {
                background: linear-gradient(90deg, var(--roxo), var(--azul-goiaba));
                color: var(--branco);
                padding: 30px 0;
                text-align: center;
            }

            header h1 {
                font-size: 36px;
            }

            nav ul {
                display: flex;
                justify-content: center;
                gap: 30px;
                list-style: none;
                margin-top: 15px;
            }

            nav a {
                color: var(--branco);
                text-decoration: none;
                font-weight: 500;
            }

            .hero {
                background: url('/imagem/funciona.png') center/cover no-repeat;
                height: 400px;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                position: relative;
            }

            .hero::after {
                content: '';
                background-color: rgba(0, 0, 0, 0.4);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .hero-content {
                position: relative;
                color: var(--branco);
                z-index: 1;
            }

            .hero-content h2 {
                font-size: 48px;
            }

            .section {
                padding: 60px 20px;
                max-width: 1200px;
                margin: auto;
            }

            .section h3 {
                text-align: center;
                color: var(--roxo);
                font-size: 32px;
                margin-bottom: 40px;
            }

            .steps {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 30px;
            }

            .step {
                background-color: var(--branco);
                border-left: 6px solid var(--azul-goiaba);
                padding: 25px;
                border-radius: 12px;
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s;
            }

            .step:hover {
                transform: translateY(-5px);
            }

            .step h4 {
                color: var(--roxo);
                font-size: 20px;
                margin-bottom: 10px;
            }

            .step p {
                font-size: 16px;
                line-height: 1.6;
            }

            .highlight {
                background-color: var(--rosa-claro);
                border-left-color: var(--roxo);
            }

            footer {
                background-color: var(--roxo);
                color: var(--branco);
                text-align: center;
                padding: 20px;
                margin-top: 60px;
            }
        </style>
    </head>

    <body>
        <header>
            <h1>YourPet</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Adoção</a></li>
                    <li><a href="#">Como Funciona</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </header>

        <section class="hero">
            <div class="hero-content">
                <h2>Como Funciona</h2>
                <p>Entenda todas as etapas para adotar com segurança e amor.</p>
            </div>
        </section>

        <section class="section">
            <h3>Etapas do Processo de Adoção</h3>
            <div class="steps">
                <div class="step highlight">
                    <h4>1. Cadastro na Plataforma</h4>
                    <p>ONGs e protetores devem enviar documentos de verificação. Adotantes criam um perfil com
                        informações e preferências.</p>
                </div>
                <div class="step">
                    <h4>2. Publicação dos Animais</h4>
                    <p>Pets são cadastrados com nome, idade, porte, personalidade e fotos. Isso permite que o adotante
                        conheça o animal antes de decidir.</p>
                </div>
                <div class="step highlight">
                    <h4>3. Busca Avançada</h4>
                    <p>Use filtros como localização, tipo de animal, faixa etária, comportamento e tamanho para
                        encontrar o pet ideal.</p>
                </div>
                <div class="step">
                    <h4>4. Comunicação com Protetores</h4>
                    <p>Ao encontrar um animal de interesse, você pode conversar diretamente com a ONG ou protetor, tirar
                        dúvidas e demonstrar interesse.</p>
                </div>
                <div class="step highlight">
                    <h4>5. Avaliação e Visita</h4>
                    <p>ONGs podem agendar entrevistas ou visitas. Esse passo garante que o adotante está preparado para
                        receber o animal.</p>
                </div>
                <div class="step">
                    <h4>6. Confirmação e Acompanhamento</h4>
                    <p>Após a aprovação, a adoção é formalizada. O status do animal muda para "adotado" e o adotante
                        recebe orientações pós-adoção.</p>
                </div>
            </div>
        </section>

        <footer>
            <p>&copy; 2025 YourPet. Todos os direitos reservados.</p>
        </footer>
    </body>

    </html>
</div>
