<HTML>
<HEAD>
    <meta charset="utf-8">
    <title>Cadastrar Musica</title>
</HEAD>

<BODY>
    <h1>Cadastrar Musica</h1>
    <br>
    <?php
        include 'menu.php';
    ?>
    <br>
    <form action="CrudMusica/cadastrarMusica.php" method="POST">
        ID <input type="text" name="id" required><br>
        Nome <input type="text" name="nome" required><br>
        Artista <input type="text" name="artista" ><br>
        Álbum <input type="text" name="album" ><br>
        Lançamento <input type="date" name="lancamento"><br>
        Genero <select name="genero">
                    <option value="Rock">Rock</option>
                    <option value="Sertanejo">Sertanejo</option>
                    <option value="Pop">Pop</option>
                    <option value="MPB">MPB</option>
                </select><br>
        Tipo: <br><input type="radio" name="tipoMusica" value="Instrumental">Instrumental<br>
              <input type="radio" name="tipoMusica" value="Vocal">Vocal<br><br>
        <input type="submit" value="Cadastrar">
    </form>
</BODY>

</HTML>