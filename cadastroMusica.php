<HTML>
<HEAD>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar Música</title>

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
    <h1>Cadastrar música<br></h1>
    <p>Digite as informações da música que desejar cadastrar</p>
    <?php
        include 'menu.php';
        include 'header.php';
    ?>
    <br>
    <div class="form-group">
    <form id="cadastroMusica" action="CrudMusica/cadastrarMusica.php" method="POST">
        <label>Música</label><br>
        <input type="text" name="nome" placeholder="Digite aqui o Nome"required><br><br>
        <label>Artista</label><br>
        <input type="text" name="artista" placeholder="Digite aqui o Artista"><br><br>
        <label>Álbum</label><br>
        <input type="text" name="album" placeholder="Digite aqui o Albúm" ><br><br>
        <label for="date">Lançamento</label><br>
        <input type="date" name="lancamento"><br><br>
        <label for="sel1">Gênero</label>
        <select class="form-control" id="sel1"  name="genero">
                    <option value="Rock">Rock</option>
                    <option value="Sertanejo">Sertanejo</option>
                    <option value="Pop">Pop</option>
                    <option value="MPB">MPB</option>
                    <option value="Samba">Samba</option>
                    <option value="Pagode">Pagode</option>
                    <option value="Eletrônica">Eletrônica</option>
                </select><br>
                <label for="tipoMusica">Tipo</label><br>
                <input type="radio" name="tipoMusica" value="Instrumental">Instrumental  
                <input type="radio" name="tipoMusica" value="Vocal">Vocal<br><br>
              <label>Comentário</label><br>
              <textarea id="msg" name="txtComentario" form="cadastroMusica" rows="20" cols="50" placeholder="Digite aqui seu comentario"></textarea><br><br>
              <button type="submit" class="btn btn-default" value="Cadastrar">Cadastrar</button> 
              </div>
    </form>
   
    </div>
                      
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
    
</BODY>

</HTML>