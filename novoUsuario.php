<?php
 $user = $_POST["user"];
 $senha = $_POST["senha"];
 $nome = $_POST["nome"];
 $dataNascimento = $_POST["dataNascimento"];



 include "conectaDB.php";
 $sql = "INSERT INTO usuarios(senha, dataNascimento, nome, user) VALUES('$senha','$dataNascimento','$nome','$user')";
 $res = mysqli_query($conn, $sql);
 if($res){
     header("Location: index.php");
 }else{
     die("Erro ao conectar com o DB ");
 }

?>