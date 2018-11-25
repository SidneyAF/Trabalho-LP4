
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Alterar música</h1>
<?php
    session_start();
    include 'menu.php';
    echo "<br>";
    if(isset ($_SESSION['usuario'])){   
    $id = $_GET['idMusica'];
    include $_SERVER["DOCUMENT_ROOT"]."/Trabalho-LP4/connection.php";
    if($res=mysqli_query($con,"select nm_musica, nm_artista, nm_album, nm_genero, dt_lancamento, tipo_musica from musicas WHERE id_musica=$id")){
        if ($linha=mysqli_fetch_assoc($res)) {
        }else{
            die("Ocorreu um erro.");
        }
    }
}else{
    header("location:index.php");

}
   ?>
<form action="CrudMusica/editMusica.php" method="post">
    <label>ID<input type="number" name="idMusica" min="1" value="<?= $_GET['idMusica'] ?>" readonly/></label><br/>
     <label>Música <input type="text" name="musica" value="<?= $linha['nm_musica'] ?>"/></label><br/>
     <label>Artista <input type="text" name="artista" value="<?= $linha['nm_artista'] ?>"/></label><br/>
     <label>Album <input type="text" name="album" value="<?= $linha['nm_album'] ?>"/></label><br/>
     Gênero <select name="genero">
                    <option><?= $linha['nm_genero'] ?></option>
                    <option value="Rock">Rock</option>
                    <option value="Sertanejo">Sertanejo</option>
                    <option value="Pop">Pop</option>
                    <option value="MPB">MPB</option>
                </select><br>
     <label>Lançamento <input type="date" name="lancamento" value="<?= $linha['dt_lançamento'] ?>"/></label><br/>
     Tipo: <br><input type="radio" name="tipoMusica" value="Instrumental">Instrumental<br>
              <input type="radio" name="tipoMusica" value="Vocal">Vocal<br>
     <input type="submit" value="Alterar"/>
   </form>
</body>
</html>