<HTML>
<HEAD>
    <meta charset="utf-8">
    <title>Home</title>
</HEAD>

<BODY> 
    <h1>Home</h1>
    <br>
	<br><br>
	<?php
		session_start();
		include 'menu.php';
		$con = @ mysqli_connect("localhost","root","","bd_musicas");
  		if ($con == null ) {
          die("Falha ao conectar");	
  		} else {
  		// mysqli_query envia para o Mysql o texto de um comando SQL. No caso de Select, retorna a tabela resultante.
  		$tab = mysqli_query($con,"select nm_musica, nm_artista, nm_album, year(dt_lancamento), nm_genero, tipo_musica from musicas");
  		// Cada iteração do loop abaixo obtém uma linha da tabela resultante do Select e envia seus dados ao navegador. $lin é uma vetor com índices correspondendo ao nome das colunas (id, nome, endereco) e contéudo com seus respectivos dados.
		  echo "<table border=1>";
		  echo "<th>Música</th>".
		  "<th>Artista</th>".
		  "<th>Álbum</th>".
		  "<th>Ano</th>".
		  "<th>Gênero</th>".
		  "<th>Tipo</th>";
		  while ($lin = mysqli_fetch_assoc($tab)) {
			echo "<tr><td>".$lin['nm_musica']."</td><td>".$lin['nm_artista']."</td><td>".$lin['nm_album']."</td><td>".$lin['year(dt_lancamento)']."</td><td>".$lin['nm_genero']."</td><td>".$lin['tipo_musica']."</td><tr>";}  
		}
		echo "</table>";
		if(isset ($_SESSION['usuario'])){
		echo "<br><br>";		
		$tab = mysqli_query($con,"select nm_musica, nm_artista, nm_album, year(dt_lancamento), nm_genero, tipo_musica, id_musica from musicas m,usuario u where u.email_usuario ='".$_SESSION['usuario']."'and u.email_usuario = m.fk_email_usuario");
  		// Cada iteração do loop abaixo obtém uma linha da tabela resultante do Select e envia seus dados ao navegador. $lin é uma vetor com índices correspondendo ao nome das colunas (id, nome, endereco) e contéudo com seus respectivos dados.
		  echo "<table border=1>";
		  echo "<th>Música</th>".
		  "<th>Artista</th>".
		  "<th>Álbum</th>".
		  "<th>Ano</th>".
		  "<th>Gênero</th>".
		  "<th>Tipo</th>";
		  while ($lin = mysqli_fetch_assoc($tab)) {
			echo "<tr><td>".$lin['nm_musica']."</td><td>".$lin['nm_artista']."</td><td>".$lin['nm_album']."</td><td>".$lin['year(dt_lancamento)']."</td><td>".$lin['nm_genero']."</td><td>".$lin['tipo_musica']."</td><td>"."<a href='alterarMusica.php?idMusica=".$lin['id_musica']."'><button>Alterar</button></a><a href='CrudMusica/deletarMusica.php?idMusica=".$lin['id_musica']."'><button>Deletar</button></a>"."</td><tr>";}  
			
		}
	?>
</BODY>

</HTML>