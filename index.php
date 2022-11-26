<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=2, initial-scale=1.0">
    <title>Midnight Japan</title>
    <link rel="shortcut icon" href="./all/images/midnight.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/media.css">
</head>
<body>
<?php
    include_once('header.php');
?>
    <main>
        <aside>
            <h2><span>Junte-se agora</span></h2>
            <h2>à nossa tripulação!</h2>
            <p>
                Estamos com vagas abertas para o time da Midnight, caso tenha interesse, preencha os campos abaixo e aguarde o nosso retorno!
            </p>
            <form method="post" action="cadastroCurriculo.php">
                <input type="text" name="nomeCurriculo" placeholder="Nome">
                <input type="email" name="emailCurriculo" placeholder="Email">
                <input type="submit" value="Enviar! :D" name="submit">
            </form>
        </aside>
        <article>
            <img class="midoriya" src="./all/images/midoriya.png" alt="oh-oh">
        </article>
    </main>
</body>
</html>