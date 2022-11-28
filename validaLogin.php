<?php
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    include "conectaDB.php";
    $sql = "SELECT * FROM usuarios WHERE user= '$login' AND senha = '$senha'";
    $res = mysqli_query($conn, $sql);

    $qtdRegistros = mysqli_num_rows($res);
    if($qtdRegistros > 0 ){
        session_start();

        $row = mysqli_fetch_assoc($res);

        $_SESSION["login"] = $row["user"];
        header("Location: products.php");
    }
    else{
        header("Location: login.php?erro=1");
    }

?>