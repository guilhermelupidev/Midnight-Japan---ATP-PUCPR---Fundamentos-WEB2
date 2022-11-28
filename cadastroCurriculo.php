<?php
    include "conectaDB.php";

        $email = $_POST["emailCurriculo"];
        $nome = $_POST["nomeCurriculo"];

        $sql = "INSERT INTO cadastroCurriculo(nome, email) VALUES('$nome','$email')";
        $res = mysqli_query($conn, $sql);
        if($res){
            header("Location: index.php");
        }else{
            die("Erro ao conectar com o DB ");
        }
?>