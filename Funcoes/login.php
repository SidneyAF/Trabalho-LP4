<?php
    
  	$con = @ mysqli_connect("localhost","root","usbw","bd_musicas");
  	if ($con == null ) {
        die("Falha ao conectar");	
    }else{
        $email_usuario = $_POST["email"];
        $senha= $_POST["senha"];
        if($res=mysqli_query($con,"SELECT * FROM usuario WHERE email_usuario='$email_usuario'and senha_usuario='$senha'")){
            session_start();
            $linha = mysqli_fetch_assoc($res);
            $_SESSION["usuario"] = $_POST["email"];
            mysqli_close($con);
            header("location:/Trabalho LP/index.php");
        }
        
    }
?>