<?php
session_start();
    if(isset($_SESSION['usuario'])) {
        // se você possui algum cookie relacionado com o login deve ser removido
        session_destroy();
        unset($_COOKIE["usuario"]);
        header("location:/Trabalho-LP4/index.php");
    }else{
        header("location:/Trabalho-LP4/index.php");
    }
?>