<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alterar Música</title>

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
<h1>Alterar música</h1>
<?php
    session_start();
    include 'header.php';
    include 'menu.php';
    
    echo "<br>";
    if(isset ($_SESSION['usuario'])){   
    $id = $_GET['idMusica'];
    include $_SERVER["DOCUMENT_ROOT"]."/Trabalho-LP4/connection.php";
    if($res=mysqli_query($con,"select id_musica, nm_musica, nm_artista, nm_album, nm_genero, dt_lancamento, tipo_musica, txt_comentario from musicas WHERE id_musica=$id")){
        if ($linha=mysqli_fetch_assoc($res)) {
        }else{
            die("Ocorreu um erro.");
        }
    }
}else{
    header("location:index.php");

}
   ?>
    <br>
    <div class="form-group">
    <form id="alterarMusica" action="CrudMusica/editMusica.php" method="POST">
        <input type="hidden" name="idMusica" value="<?= $_GET['idMusica'] ?>"/>
        <label>Nome da música</label><br>
        <input type="text" name="nome" value="<?= $linha['nm_musica']?>"/>
        <br><br><label>Nome da artista</label><br>
        <input type="text" name="artista" value="<?= $linha['nm_artista'] ?>"/>
        <br><br><label>Nome da álbum</label><br>
        <input type="text" name="album" value="<?= $linha['nm_album'] ?>"/>
        <br><br>
        <label for="date">Lançamento</label><br>
        <input type="date" name="lancamento" value="<?= $linha['dt_lançamento'] ?>"><br><br>
        <label for="sel1">Gênero</label>
        <select class="form-control" id="sel1"  name="genero">
                    <option><?= $linha['nm_genero'] ?></option>
                    <option value="Rock">Rock</option>
                    <option value="Sertanejo">Sertanejo</option>
                    <option value="Pop">Pop</option>
                    <option value="MPB">MPB</option>
                    <option value="Samba">Samba</option>
                    <option value="Pagode">Pagode</option>
                    <option value="Eletrônica">Eletrônica</option>
                </select><br>
                <label for="tipoMusica">Tipo</label><br>
                <?php
                if($linha['tipo_musica'] == "Instrumental"){
                   echo "<input type='radio' name='tipoMusica' value='Instrumental' checked>Instrumental  ";
                   echo "<input type='radio' name='tipoMusica' value='Vocal'>Vocal<br><br>";
                }else{
                   echo "<input type='radio' name='tipoMusica' value='Instrumental'>Instrumental  ";
                   echo "<input type='radio' name='tipoMusica' value='Vocal' checked>Vocal<br><br>";
                }
                ?>
                <label>Comentário</label><br>
                <textarea id="msg" name="txtComentario" form="cadastroMusica" rows="20" cols="50"><?= $linha['txt_comentario'] ?></textarea>
                <br><br>
              <button type="submit" class="btn btn-default" value="Alterar">Alterar</button> 
              
    </form>
   </div>
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
</body>
</html>