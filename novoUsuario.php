<?php
    function display(){
        echo "hello ".$_POST["nomeCurriculo"];
        echo var_dump($_POST);
        echo "hello ".$_POST["emailCurriculo"];
    }

    if(isset($_POST['submit'])){
        display();
    } 
?>