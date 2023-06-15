
<!DOCTYPE html>
<html>
<head>
    <title>Bem Vindos A Geloteca</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Inclusão do Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9bKj7e1N80DCIiZVLE0qqm+Nw6stc8WbrEF50eT9g9jxhJFm8WPrdzxdpZCfUpcLw84eyzGRSxdY1bJn1fXaDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9bKj7e1N80DCIiZVLE0qqm+Nw6stc8WbrEF50eT9g9jxhJFm8WPrdzxdpZCfUpcLw84eyzGRSxdY1bJn1fXaDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Inclusão do Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <style>
        .logo {
            width: 20px;
            height: 35px;
            margin-top: 20px;
        }

        body {
            background: linear-gradient(45deg, #f4a45a, #f7d072, #a8e063, #56c596, #4b92db, #c883de, #f57dc6);
            background-size: 800% 800%;
            animation: gradientAnimation 20s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

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
                    <a class="nav-link" href="index2">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre">Sobre</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Lista de pastas do Google Drive -->
    <div class="container mt-4">
        <h2>Bem Vindos A Geloteca</h2>
        <ul id="fileList" class="list-group"></ul>
    </div>

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

    <!-- Script para carregar a API do Google Drive -->
    <script src="https://apis.google.com/js/api.js"></script>
    <script>
        function onApiLoad() {
            gapi.load('client', listFiles);
        }

        function listFiles() {
            gapi.client.init({
                apiKey: 'AIzaSyCz3wDFAaDKSaHuLs9luT_TFIJuLveGw9I',
                discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/drive/v3/rest'],
            }).then(function () {
                return gapi.client.drive.files.list({
                    q: "mimeType='application/vnd.google-apps.folder' and trashed = false and '1Tzp5ZKLtA0NIdzPFQqOR7wjI-5u0__lh' in parents",
                    fields: 'nextPageToken, files(id, name)',
                    pageSize: 10
                });
            }).then(function (response) {
                var files = response.result.files;
                var fileList = document.getElementById('fileList');
                for (var i = 0; i < files.length; i++) {
                    var file = files[i];
                    var li = document.createElement('li');
                    li.className = "list-group-item d-flex align-items-center";
                    var icon = document.createElement('i');
                    if (file.mimeType === "application/vnd.google-apps.folder") {
                        icon.className = "far fa-folder fa-lg mr-3 my-icon";
                    } else {
                        icon.className = "far fa-file fa-lg mr-3 my-icon";
                    }
                    li.appendChild(icon);
                    var link = document.createElement('a');
                    link.href = "https://drive.google.com/drive/folders/" + file.id;
                    link.textContent = file.name;
                    li.appendChild(link);
                    fileList.appendChild(li);
                }
            });
        }
    </script>

    <div>
      <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VFZ9ZWCWSR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VFZ9ZWCWSR');
</script>
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
        <div class="info-button" style="position: fixed; bottom: 20px; left: 20px;">
            <a href="sobre">
                <i class="fas fa-info-circle fa-2x"></i>
            </a>
        </div>

    </div>
    <footer 
           style="text-align: center;">
        <p style="font-size: smaller;"><strong>Quem sou eu:</strong></p>
        <p style="font-size: smaller;">Eu sou Jackson Silva, um profissional dedicado e multifacetado, com experiência em refrigeração industrial e um entusiasta da programação.</p>
        <p style="font-size: smaller;">Minha carreira é dividida entre o mundo prático da refrigeração e a criatividade da programação,</p>
        <p style="font-size: smaller;">combinando minhas habilidades técnicas com uma mente analítica.</p>
        <p style="font-size: smaller; margin-top: 30px;">© 2023 Jackson Silva. Todos os direitos reservados.</p>
        <p style="font-size: smaller;">Alguns arquivos são protegidos por direitos autorais de terceiros.</p>
    </footer>
</body>
</html>