<HTML>
<HEAD>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</HEAD>

<BODY> 

<div class="top-content">
	
    <div class="inner-bg">
        <div class="container">
        <h1>Cadastrar<br></h1>
        <p>Digite um e-mail e senha válidos para efetuar o cadastro</p>
        <?php
    include 'menu.php';
    ?>
    <br>
    <form action="Funcoes/cadastrar.php" method="POST">
        
        E-mail<input type="text" name="email" required>
        Senha <input type="password" name="senha" required>
        <button type="submit" class="btn btn-default" value="Cadastrar">Cadastrar</button> 
    </form>
    
                          
    </div>
</div>


<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>

</BODY>

</HTML>