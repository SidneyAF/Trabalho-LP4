<?php
session_start();
header("location:/Trabalho LP/index.php");
if(isset ($_SESSION['usuario'])){
    $con = @ mysqli_connect("localhost","root","usbw","bd_musicas");
    
    $res=mysqli_prepare($con, " UPDATE musicas SET 
    nm_musica = ?,
    nm_artista = ?,
    nm_album = ?,
    dt_lancamento= ?,
    nm_genero = ?,
    tipo_musica = ? WHERE id_musica = ?");
    mysqli_stmt_bind_param($res,"ssssssi",$_POST['musica'],$_POST['artista'],$_POST['album'],$_POST['lancamento'],$_POST['genero'],$_POST['tipoMusica'],$_POST['idMusica']);
    mysqli_stmt_execute($res);
    }else{
        die("Ocorreu um erro.");

    }

?>