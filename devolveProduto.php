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
$_qtd = $row["qtd"]+1;

$sql = "DELETE FROM emprestimo WHERE user='$user' AND produto='$id'" ;    
$res = mysqli_query($conn, $sql);


if($res){
    $sql = "UPDATE produtos SET qtd='$_qtd' WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    header("Location: products.php?success=1");

}else{
        header("Location: products.php?error=2");
}


            ?>