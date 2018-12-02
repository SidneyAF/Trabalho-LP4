<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Erro de Permissão</title>

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
</head>
<body>

	<div class="top-content">
	
    <div class="inner-bg">
        <div class="container">
        <img src="assets\img\error.png" alt="ERROR">
        <h1>Erro de permissão!<br></h1>
        <p>Você não possui permissão para acessar o sistema</p>
    <?php
    include 'menu.php';
    include 'header.php';
    ?>
    <br>
    
    
                          
    </div>
</div>

<?php include'footer.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
		<script>
        const h1 = document.querySelectorAll('h1');

				TweenMax.staggerFromTo(h1, 1, {
				scale: .3,
				rotation: 180
				}, {
		scale: 1.1,
		rotation: 0
		}, .3);
    </script>
    
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body> 

</html>