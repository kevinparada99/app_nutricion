<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'Nutricion-master/index.html';
    }else{
        header ('location: login.php');
    }
        
?>