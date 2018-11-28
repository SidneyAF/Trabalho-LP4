<HTML>
<HEAD>
    
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Entrar</title>

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
			<h1>Seja bem-vindo!</h1>
			<h2>Plataforma de cadastro de músicas</h2>
			<br>
			<?php
		session_start();
		include 'menu.php';
		include 'header.php';
		echo "<br><br>";
		include $_SERVER["DOCUMENT_ROOT"]."/Trabalho-LP4/connection.php";
  		if ($con == null ) {
          die("Falha ao conectar");	
  		} else {
  		// mysqli_query envia para o Mysql o texto de um comando SQL. No caso de Select, retorna a tabela resultante.
  		$tab = mysqli_query($con,"select nm_musica, nm_artista, nm_album, year(dt_lancamento), nm_genero, tipo_musica from musicas");
  		// Cada iteração do loop abaixo obtém uma linha da tabela resultante do Select e envia seus dados ao navegador. $lin é uma vetor com índices correspondendo ao nome das colunas (id, nome, endereco) e contéudo com seus respectivos dados.
		  echo  "<div class='table-responsive'>          
		  <table class='table'>
			<thead>
			  <tr>
				<th>Música</th>
				<th>Artista</th>
				<th>Albúm</th>
				<th>Ano</th>
				<th>Gênero</th>
				<th>Tipo</th>
			  </tr>
			</thead>
			
		  
		</div>";
		  while ($lin = mysqli_fetch_assoc($tab)) {
			echo "<div><tbody><tr><td>".$lin['nm_musica']."</td><td>".$lin['nm_artista']."</td><td>".$lin['nm_album']."</td><td>".$lin['year(dt_lancamento)']."</td><td>".$lin['nm_genero']."</td><td>".$lin['tipo_musica']."</td></tr></tbody></div>";}  
		}
		echo "</table>";
		if(isset ($_SESSION['usuario'])){
		echo "<br><br>";	
		echo "<h2>Músicas de ".$_SESSION['usuario']."</h2>";
		echo "<br>";	
		$tab = mysqli_query($con,"select nm_musica, nm_artista, nm_album, year(dt_lancamento), nm_genero, tipo_musica, id_musica from musicas m,usuario u where u.email_usuario ='".$_SESSION['usuario']."'and u.email_usuario = m.fk_email_usuario");
  		// Cada iteração do loop abaixo obtém uma linha da tabela resultante do Select e envia seus dados ao navegador. $lin é uma vetor com índices correspondendo ao nome das colunas (id, nome, endereco) e contéudo com seus respectivos dados.
		  echo  "<div class='table-responsive'>          
		  <table class='table'>
			<thead>
			  <tr>
				<th>Música</th>
				<th>Artista</th>
				<th>Albúm</th>
				<th>Ano</th>
				<th>Gênero</th>
				<th>Tipo</th>
			  </tr>
			</thead>
			
		  
		</div>";
		  while ($lin = mysqli_fetch_assoc($tab)) {
			echo "<div><tbody><tr><td>".$lin['nm_musica']."</td><td>".$lin['nm_artista']."</td><td>".$lin['nm_album']."</td><td>".$lin['year(dt_lancamento)']."</td><td>".$lin['nm_genero']."</td><td>".$lin['tipo_musica']."</td><td>"."<a href='alterarMusica.php?idMusica=".$lin['id_musica']."'><button>Alterar</button></a><a href='CrudMusica/deletarMusica.php?idMusica=".$lin['id_musica']."'><button>Deletar</button></a>"."</td></tr></tbody></div>";}  
		echo "</table>";
			
		}
	?>                           
        </div>
    </div>
</div>
	<h1>Localize a gravadora mais próxima você!</h1><hr>
	<?php
	include 'map.php';
	?>
</BODY>

</HTML>