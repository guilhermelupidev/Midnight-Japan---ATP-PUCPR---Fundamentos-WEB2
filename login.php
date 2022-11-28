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
                <form method="post" action="validaLogin.php" class="login">
                    <div class="login">
                        <h1>Entrar</h1>
                        <div class="text">
                            <label for="user">Usuario</label>
                            <input type="text" name="login" placeholder="Insira seu email">
                        </div>
                        <div class="text">
                            <label for="password">Senha</label>
                            <input type="password" name="senha" placeholder="Insira sua senha">
                            <?php
                            if(isset($_GET["erro"])){
                                echo '<p style="text-align:center;color:red">Usuario e/ou senha incorreto.</p>';
                            }

                        ?>
                        </div>
                        <button type="submit" name="submit" class="button-login">Logar</button>
                    </div>
                </form>
            </div>
        </div>
        
    </body>
</html>