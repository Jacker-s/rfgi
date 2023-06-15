<!DOCTYPE html>
<html>
<head>
    <title>Insira a senha</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .password-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .password-input {
            width: 200px;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .submit-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form class="password-form" method="POST" action="inicio.php">
        <label for="password">Insira a senha:</label>
        <input type="password" id="password" name="password" class="password-input" required>
        <input type="submit" value="Enviar" class="submit-button">
    </form>
</body>
</html>
