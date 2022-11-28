<?php
include "conectaDB.php";
session_start();
$user = $_SESSION["login"];

foreach($_POST as $key=>$value) {
    if($value!='') {
        $id =  $key ;

    }
}
$sql = "SELECT * FROM produtos WHERE id ='$id' ";
$res = mysqli_query($conn, $sql);

$qtdRegistros = mysqli_num_rows($res);        
$row = mysqli_fetch_assoc($res);
$_qtd = $row["qtd"]-1;
if($_qtd>=0){
    $sql = "UPDATE produtos SET qtd='$_qtd' WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
   
    $sql = "INSERT INTO emprestimo (user, produto)
    VALUES ('$user', '$id')";    
    $res = mysqli_query($conn, $sql);
    header("Location: products.php?success=1");


}else{
        header("Location: products.php?error=1");
}


            ?>