<?php
session_start();
header("location:/Trabalho LP/index.php");
if(isset ($_SESSION['usuario'])){
    $id = $_GET['idMusica'];
    $con = @ mysqli_connect("localhost","root","usbw","bd_musicas");
    if($res=mysqli_query($con,"DELETE FROM musicas WHERE id_musica=$id")){

    }else{
        die("Ocorreu um erro.");
    }
}
?>