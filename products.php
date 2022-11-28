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
            $id = $row["id"];
            echo  
            '<div class="product">
                <div class="mangaIcon">
                    <img src='.$local.' alt="oh-oh">
                    <h2 class="dispon">Quantidade '.$qtd.'</h2>

                </div>
                <div class="mangaTxt">
                    <h2 class="dispon">
                        <form method="post" action="emprestaProduto.php" >
                            <input type="submit" name='.$id.'
                                  value="Emprestar"  class="emprest"  />
                        </form>
                        <form method="post" action="devolveProduto.php" >   
                            <input type="submit" name='.$id.'
                                    class="emprest" value="Devolver" />
                        </form> 
                    </h2>                    
                </div>
            </div>';
        }
        ?>
       
        
      
    </main>


   
</body>
</html>