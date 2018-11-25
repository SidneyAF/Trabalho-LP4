<?php
session_start();
    if(isset($_SESSION['usuario'])) {
        // se você possui algum cookie relacionado com o login deve ser removido
        session_destroy();
        header("location:/Trabalho LP/index.php");
    }else{
        header("location:/Trabalho LP/index.php");
    }
?>