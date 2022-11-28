<?php
        $conn = mysqli_connect("localhost", "root","", "atpMidnight");
        if($conn == false){
            die("Erro ao conectar com o DB ");
        } 
        $email = $_POST["emailCurriculo"];
        $nome = $_POST["nomeCurriculo"];

        $sql = "INSERT INTO cadastroCurriculo(nome, email) VALUES('$nome','$email')";
        mysqli_query($conn, $sql);
        header("Location: index.php");
?>