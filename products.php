<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=2, initial-scale=1.0">
    <title>Nossos produtos</title>
    <link rel="shortcut icon" href="./all/images/midnight.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/products.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/media.css">
</head>
<body>
<?php
    include_once('header.php');
?>

    <main>

        <?php
        include "productsHandler.php";
        for ($i = 1; $i <= $qtdRegistros; $i++) {
            $row = mysqli_fetch_assoc($res);
            $qtd = $row["qtd"];
            $local = $row["local"];
            echo  
            '<div class="product">
                <div class="mangaIcon">
                    <img src='.$local.' alt="oh-oh">
                </div>
                <div class="mangaTxt">
                    <h2 class="dispon">Disponivel</h2>
                    <a href="#" class="emprest">Emprestar</a>
                </div>
            </div>';
        }
        ?>
       
        
      
    </main>

   
</body>
</html>