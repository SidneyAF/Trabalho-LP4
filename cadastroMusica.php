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
<body>

<div class="top-content">

<div class="inner-bg">
    <div class="container">
    <h1>Entrar<br></h1>
    <p>Digite seu e-mail e senha cadastrados</p>
    <?php
        include 'menu.php';
    ?>
    <br>
    <div class="form-group">
    <form action="CrudMusica/cadastrarMusica.php" method="POST">
        <input type="text" name="id" placeholder="Digite aqui o ID" required>
        <input type="text" name="nome" placeholder="Digite aqui o Nome"required><br><br>
        <input type="text" name="artista" placeholder="Digite aqui o Artista">
        <input type="text" name="album" placeholder="Digite aqui o Albúm" ><br><br>
        <label for="date">Lançamento</label><input type="date" name="lancamento"><br><br>
        <label for="sel1">Gênero:</label>
        <select class="form-control" id="sel1"  name="genero">
                    <option value="Rock">Rock</option>
                    <option value="Sertanejo">Sertanejo</option>
                    <option value="Pop">Pop</option>
                    <option value="MPB">MPB</option>
                </select><br><br>
                <label for="tipoMusica">Tipo:</label>
                <input type="radio" name="tipoMusica" value="Instrumental">Instrumental
                <input type="radio" name="tipoMusica" value="Vocal">Vocal <br><br>
              <button type="submit" class="btn btn-default" value="Cadastrar">Cadastrar</button> 
              </div>
    </form>
    </div>
                      
</div>
</div>


<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body> 
    
</BODY>

</HTML>