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
<?php
    include_once('header.php');
?>

    <div class="main-login-midnight">
        <div class="side1">
            <h1>Cadastre-se na plataforma<br><span>e desfrute de nosso imenso catálogo!</span></h1>
            <img src="./all/images/dragon-animate.svg" class="animate-logo" alt="">
        </div>
        <div class="side2">
            <form action="novoUsuario.php" method="post" class="login">
                <div class="login">
                    <h1>Entrar</h1>
                    <div class="text">
                        <label for="user">Usuario</label>
                        <input type="text" name="user" placeholder="Insira seu email">
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
                        <input type="date" name="dataNascimento" placeholder="Data de Nascimento">
                    </div>
                    <button type="submit" name="submit" class="button-login">Registrar</button>
                    <div class="text">
                        <a href="./login.php" class="account">Já tenho uma conta!</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>