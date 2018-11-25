<?php
session_start();
header("location:/Trabalho-LP4/index.php");
if(isset ($_SESSION['usuario'])){
    $id = $_GET['idMusica'];
    include $_SERVER["DOCUMENT_ROOT"]."/Trabalho-LP4/connection.php";
    if($res=mysqli_query($con,"DELETE FROM musicas WHERE id_musica=$id")){

    }else{
        die("Ocorreu um erro.");
    }
}
?>