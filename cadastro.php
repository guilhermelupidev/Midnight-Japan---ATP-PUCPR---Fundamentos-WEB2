<?php

    if(isset($_POST['button-login']))
    {
        print_r($_POST['email']);
        print_r($_POST['senha']);
        print_r($_POST['nome']);
        print_r($_POST['datanascimento']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se tornar um Midnighter</title>
    <link rel="shortcut icon" href="./all/images/midnight.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/cadastro.css">
    <link rel="stylesheet" href="styles/fonts.css">
</head>
<body>
    <header>
        <div id="gengar">
            <img class="gengar" src="./all/images/gengar.png" alt="oh-oh">
        </div>
        <div id="title">
            <h1>Midnight</h1>
            <h1>Japan</h1>
        </div>

        <ul>
            <a href="./index.html"><li>Início</li></a>
            <a href="./sobre.html"><li>Sobre nós</li></a>
            <a href="./products.html"><li>Produtos</li></a>
            <a href="https://linktr.ee/midnightjapan"><li>Contato</li></a>
            <a href="./cadastro.html" id="signup"><li>Quer se tornar um midnighter?</li></a>
        </ul>
    </header>

    <div class="main-login-midnight">
        <div class="side1">
            <h1>Cadastre-se na plataforma<br><span>e desfrute de nosso imenso catálogo!</span></h1>
            <img src="./all/images/dragon-animate.svg" class="animate-logo" alt="">
        </div>
        <div class="side2">
            <form action="cadastro.php" method="POST" class="login">
                <div class="login">
                    <h1>Entrar</h1>
                    <div class="text">
                        <label for="user">Email</label>
                        <input type="text" name="email" placeholder="Insira seu email">
                    </div>
                    <div class="text">
                        <label for="password">Senha</label>
                        <input type="password" name="senha" placeholder="Insira sua senha">
                    </div>
                    <div class="text">
                        <label for="user">Nome completo</label>
                        <input type="text" name="nome" placeholder="Insira seu nome completo">
                    </div>
                    <div class="text">
                        <label for="user">Data de Nascimento</label>
                        <input type="date" name="datanascimento" placeholder="Data de Nascimento">
                    </div>
                    <button class="button-login">Registrar</button>
                    <div class="text">
                        <a href="./login.html" class="account">Já tenho uma conta!</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>