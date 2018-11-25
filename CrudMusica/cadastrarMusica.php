<?php
session_start();
header("location:/Trabalho-LP4/index.php");
if(isset ($_SESSION['usuario'])){
	include $_SERVER["DOCUMENT_ROOT"]."/Trabalho-LP4/connection.php";
  if ($con == null ) {
    die("Falha ao conectar");	
  } else {
    $ps = mysqli_prepare($con,"INSERT musicas VALUES (?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($ps,"isssssss",$_POST['id'],$_POST['nome'],$_POST['artista'],$_POST['album'],$_POST['lancamento'],$_POST['genero'],$_SESSION['usuario'],$_POST['tipoMusica']);
    mysqli_stmt_execute($ps);
  }
}
?>