<?php
    function display(){
        echo "hello ".$_POST["nomeCurriculo"];
        echo "hello ".$_POST["emailCurriculo"];
    }

    if(isset($_POST['submit'])){
        display();
    } 
?>