<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Hambúrguer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .menu {
            display: flex;
            background-color: #333;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .hamburguer {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburguer span {
            background-color: white;
            height: 3px;
            width: 30px;
            margin: 5px 0;
        }

        .nav {
            display: flex;
            gap: 20px;
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        /* Menu toggle */
        input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"]:checked ~ .nav {
            display: block;
            position: absolute;
            top: 60px;
            left: 0;
            right: 0;
            background-color: #333;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        input[type="checkbox"]:checked ~ .nav a {
            font-size: 22px;
        }

        /* Menu responsivo */
        @media (max-width: 768px) {
            .hamburguer {
                display: flex;
            }

            .nav {
                display: none;
                flex-direction: column;
                gap: 10px;
                position: absolute;
                top: 60px;
                left: 0;
                right: 0;
                background-color: #333;
                align-items: center;
                width: 100%;
            }

            .nav a {
                color: white;
                text-decoration: none;
                font-size: 22px;
                padding: 10px;
                width: 100%;
                text-align: center;
            }

            input[type="checkbox"]:checked ~ .nav {
                display: block;
            }
        }
    </style>
</head>
<body>

    <div class="menu">
        <div class="logo">Meu Site</div>
        <label class="hamburguer" for="toggle">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <input type="checkbox" id="toggle">
        <div class="nav">
            <a href="#">Início</a>
            <a href="#">Sobre</a>
            <a href="#">Serviços</a>
            <a href="#">Contato</a>
        </div>
    </div>

</body>
</html>
