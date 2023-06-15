<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404 - Refrigeração</title>
    <style>
        body {
            background-color: black;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
            overflow: hidden; /* Impede a barra de rolagem vertical */
            color: #fff;
        }

        .typewriter {
            overflow: hidden;
            white-space: nowrap;
            margin: 0 auto;
            letter-spacing: 0.15em;
            animation: typing 4s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes blink-caret {
            from, to {
                border-color: transparent;
            }

            50% {
                border-color: #fff;
            }
        }

        /* Estilos para o efeito de neve */
        #snowflakes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
        }

        .snowflake {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #fff;
            border-radius: 50%;
            pointer-events: none;
            animation: snowfall linear infinite;
        }

        @keyframes snowfall {
            0% {
                transform: translateY(-10%);
            }

            100% {
                transform: translateY(100vh);
            }
        }
    </style>
</head>
<body>
    <h1 class="typewriter">Erro 404</h1>
    <p class="typewriter">Lamentamos, a página que você está procurando não pode ser encontrada.</p>
    <p class="typewriter">Verifique se digitou corretamente o endereço ou tente pesquisar novamente.</p>
    <!-- Container para o efeito de neve -->
    <div id="snowflakes"></div>

    <!-- Script para criar a neve -->
    <script>
        // Função para criar os flocos de neve
        function createSnowflake() {
            const snowflake = document.createElement("div");
            snowflake.classList.add("snowflake");
            snowflake.style.left = Math.random() * 100 + "%";
            snowflake.style.animationDuration = Math.random() * 5 + 3 + "s";
            snowflake.style.animationDelay = Math.random() * 2 + "s";
            document.getElementById("snowflakes").appendChild(snowflake);

            // Remover o floco de neve após a animação
            snowflake.addEventListener("animationend", function () {
                snowflake.remove();
            });
        }

        // Criar flocos de neve periodicamente
        setInterval(createSnowflake, 200);

        // Obter todos os elementos com a classe "typewriter"
        const elements = document.getElementsByClassName("typewriter");

        // Função para animar o texto com efeito de digitação
        function animateText() {
            for (let i = 0; i < elements.length; i++) {
                const text = elements[i].innerHTML;
                elements[i].innerHTML = "";

                let charIndex = 0;
                const typing = setInterval(() => {
                    if (charIndex < text.length) {
                        elements[i].innerHTML += text.charAt(charIndex);
                        charIndex++;
                    } else {
                        clearInterval(typing);
                    }
                }, 100);
            }
        }

        // Chamar a função para animar o texto
        animateText();
    </script>
</body>
</html>
