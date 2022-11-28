<?php
echo "validaLogin";
function display(){
    echo var_dump($_POST);
}

if(isset($_POST['submit'])){
    display();
} 
?>