<?php
	header("location:/Trabalho-LP4/index.php");
	$con = @ mysqli_connect("localhost","root","","bd_musicas");
  if ($con == null ) {
    die("Falha ao conectar");	
  } else {
    $ps = mysqli_prepare($con,"INSERT usuario VALUES (?,?)");
    mysqli_stmt_bind_param($ps,"ss",$_POST['email'],$_POST['senha']);
    if(mysqli_stmt_execute($ps)){
    };
    
  }
?>