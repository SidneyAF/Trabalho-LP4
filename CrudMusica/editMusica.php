<?php
session_start();
header("location:/Trabalho-LP4/index.php");
if(isset ($_SESSION['usuario'])){
    include $_SERVER["DOCUMENT_ROOT"]."/Trabalho-LP4/connection.php";
    
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