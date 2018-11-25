<?php
session_start();
header("location:/Trabalho LP/index.php");
if(isset ($_SESSION['usuario'])){
	$con = @ mysqli_connect("localhost","root","usbw","bd_musicas");
  if ($con == null ) {
    die("Falha ao conectar");	
  } else {
    $ps = mysqli_prepare($con,"INSERT musicas VALUES (?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($ps,"isssssss",$_POST['id'],$_POST['nome'],$_POST['artista'],$_POST['album'],$_POST['lancamento'],$_POST['genero'],$_SESSION['usuario'],$_POST['tipoMusica']);
    mysqli_stmt_execute($ps);
  }
}
?>