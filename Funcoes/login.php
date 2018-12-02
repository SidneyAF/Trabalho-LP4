<?php
    
    include $_SERVER["DOCUMENT_ROOT"]."/Trabalho-LP4/connection.php";
  	if ($con == null ) {
        die("Falha ao conectar");	
    }else{
        $email_usuario = $_POST["email"];
        $senha = $_POST["senha"];
        $res=mysqli_query($con,"SELECT * FROM usuario WHERE email_usuario='$email_usuario'and senha_usuario='$senha'");
        if(mysqli_fetch_object($res)!=null){
            session_start();
            $linha = mysqli_fetch_assoc($res);
            $_SESSION["usuario"] = $_POST["email"];
            setcookie("usuario",$_POST["email"],time()+300,'/');
            mysqli_close($con);
            header("location:/Trabalho-LP4/index.php");
            
           
        }else{
            echo '<script language="javascript">';   
            echo 'location.href="/Trabalho-LP4/acesso.php";';    
            echo '</script>';
        };
    }
        
    
?>