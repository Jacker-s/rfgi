<!DOCTYPE html>
<html>
<head>
    <title>Arcevo RFG</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Inclusão do Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9bKj7e1N80DCIiZVLE0qqm+Nw6stc8WbrEF50eT9g9jxhJFm8WPrdzxdpZCfUpcLw84eyzGRSxdY1bJn1fXaDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9bKj7e1N80DCIiZVLE0qqm+Nw6stc8WbrEF50eT9g9jxhJFm8WPrdzxdpZCfUpcLw84eyzGRSxdY1bJn1fXaDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- ... -->
    <!-- Inclusão do Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <style>
        .widget-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }

        .widget-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .widget-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background-color: #f6f6f6;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }

            .widget-container.active {
                animation: genieIn 0.5s ease-in-out forwards;
            }

        .widget-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .widget-submit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        @keyframes genieIn {
            0% {
                opacity: 0;
                transform: scale(0.5) translate(-50%, -50%);
            }

            100% {
                opacity: 1;
                transform: scale(1) translate(-50%, -50%);
            }
        }

        @keyframes genieOut {
            0% {
                opacity: 1;
                transform: scale(1) translate(-50%, -50%);
            }

            100% {
                opacity: 0;
                transform: scale(0.5) translate(-50%, -50%);
            }
        }
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        /* Adicione as seguintes linhas de código */
        h1, p {
            margin-left: auto;
            margin-right: auto;
            max-width: 800px; /* Ajuste o valor conforme necessário */
            padding: 0 20px;
            text-align: justify;
        }
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #007bff;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.5;
        }

        .list-group-item {
            padding: 1rem;
            border: none;
        }

        .my-icon {
            margin-right: 1rem;
            color: #007bff;
        }

            .my-icon:before {
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                content: "\f07b";
            }

        .my-icon-folder:before {
            font-family: "Font Awesome 5 Free";
            font-weight: 400;
            content: "\f07b";
        }

        .my-icon-file:before {
            font-family: "Font Awesome 5 Free";
            font-weight: 400;
            content: "\f15b";
        }

        .list-group-item:hover {
            background-color: #d9d9d9;
            cursor: pointer;
        }
    </style>

</head>
<body onload="onApiLoad()">

    <!-- Menu superior -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">


        

        <!-- Itens do menu -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="inicio">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="sobre">Sobre</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="widget-float">
        <button class="widget-button" onclick="toggleWidget()">Contato</button>
    </div>

    <div id="widget-container" class="widget-container">
        <h2>Entre em Contato</h2>
        <form action="https://formspree.io/f/mvonyzew" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" class="widget-input" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="_replyto" class="widget-input" required>

            <label for="message">Mensagem:</label>
            <textarea id="message" name="message" rows="5" class="widget-input" required></textarea>

            <input type="submit" value="Enviar" class="widget-submit">
        </form>
    </div>

    <h1>Refrigeração Industrial</h1>
    <p>A refrigeração industrial é uma área especializada que abrange sistemas de resfriamento projetados para atender as necessidades de grandes instalações industriais. Esses sistemas são utilizados em setores como indústria química, alimentícia, farmacêutica, entre outros, onde é necessário controlar a temperatura de forma precisa e eficiente.</p>

    <h1>Refrigeração Convencional</h1>
    <p>A refrigeração convencional é a forma tradicional de resfriamento usada em residências, escritórios e pequenas instalações comerciais. Ela utiliza equipamentos como refrigeradores e condicionadores de ar que funcionam com base em ciclos de compressão e expansão de gases refrigerantes para remover o calor do ambiente e manter a temperatura desejada.</p>

    <h1>Refrigeração Doméstica</h1>
    <p>A refrigeração doméstica refere-se aos sistemas de resfriamento projetados especificamente para uso residencial. Isso inclui refrigeradores, freezers, condicionadores de ar residenciais e outros aparelhos que são utilizados para manter os alimentos frescos, conservar medicamentos, garantir o conforto térmico dentro de casa, entre outras finalidades.</p>

    <h1>Elétrica</h1>
    <p>A área da elétrica abrange uma ampla gama de conhecimentos e aplicações relacionadas à eletricidade e seus princípios. Isso inclui o estudo de circuitos elétricos, sistemas de distribuição de energia, dispositivos eletrônicos, automação residencial e industrial, energias renováveis, entre outros temas. A eletricidade é fundamental em diversas áreas, sendo essencial para o funcionamento de equipamentos elétricos e eletrônicos que utilizamos no nosso dia a dia.</p>

    <h1>Termo Dinâmica</h1>
    <p>A termo dinâmica é um ramo da física que estuda as relações entre calor, trabalho e energia. Ela é fundamental para entender o comportamento dos sistemas termodinâmicos, como motores, refrigeradores e máquinas térmicas. Através dos princípios da termo dinâmica, é possível analisar e descrever o fluxo de calor, as transformações de energia e as propriedades termodinâmicas dos materiais.</p>

    <div>
        <script>
            function toggleWidget() {
                var widgetContainer = document.getElementById("widget-container");

                if (widgetContainer.style.display === "none" || widgetContainer.style.display === "") {
                    widgetContainer.style.display = "block";
                    widgetContainer.classList.add("active");
                    widgetContainer.style.animation = "genieIn 0.5s ease-in-out forwards";
                } else {
                    widgetContainer.style.animation = "genieOut 0.5s ease-in-out forwards";

                    // Aguarda a conclusão da animação antes de ocultar o widget e remover a classe "active"
                    setTimeout(function () {
                        widgetContainer.style.display = "none";
                        widgetContainer.classList.remove("active");
                    }, 500);
                }
            }
        </script>
    </div>

    <footer style="text-align: center;">
        <p style="font-size: smaller;"><strong>Quem sou eu:</strong></p>
        <p style="font-size: smaller;">Eu sou Jackson Silva, um profissional dedicado e multifacetado, com experiência em refrigeração industrial e um entusiasta da programação.</p>
        <p style="font-size: smaller;">Minha carreira é dividida entre o mundo prático da refrigeração e a criatividade da programação,</p>
        <p style="font-size: smaller;">combinando minhas habilidades técnicas com uma mente analítica.</p>
        <p style="font-size: smaller; margin-top: 30px;">© 2023 Jackson Silva. Todos os direitos reservados.</p>
        <p style="font-size: smaller;">Alguns arquivos são protegidos por direitos autorais de terceiros.</p>
    </footer>
    <div class="home-button" style="position: fixed; bottom: 20px; left: 20px;">
        <a href="inicio">
            <i class="fas fa-home fa-2x"></i>
        </a>
    </div>
</body>
</html>
