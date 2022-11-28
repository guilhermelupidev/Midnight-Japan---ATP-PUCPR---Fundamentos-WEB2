<?php
    include "conectaDB.php";
    $sql = "SELECT * FROM produtos ";
    $res = mysqli_query($conn, $sql);

    $qtdRegistros = mysqli_num_rows($res);
?>