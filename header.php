<!DOCTYPE html>
<html lang="pt-BR">
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
                <a href="./index.php"><li>Início</li></a>
                <a href="./sobre.php"><li>Sobre nós</li></a>
                <a href="https://linktr.ee/midnightjapan"><li>Contato</li></a>
                <?php
                    session_start();
                    if(isset($_SESSION["login"]) ){
                        echo ' <a href="./products.php"><li>Produtos</li></a>
                                <a href="./abortSession.php" id="signup"><li>Sair</li></a>';
                    }else{
                        echo ' <a href="./login.php" id="signup"><li>Login</li></a>
                        <a href="./cadastro.php" id="signup"><li>Cadastre-se!</li></a>';
                    }
                ?>
            </ul>
        </header>
    </body>
</html>