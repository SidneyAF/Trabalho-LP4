<HTML>
<HEAD>
    <meta charset="utf-8">
    <title>Cadastro</title>
</HEAD>

<BODY> 
    <h1>Cadastrar</h1>
    <?php
    include 'menu.php';
    ?>
    <br>
    <form action="Funcoes/cadastrar.php" method="POST">
        Email <input type="email" name="email" required>
        Senha <input type="text" name="senha" required>
        <input type="submit" value="Cadastrar">
    </form>
</BODY>

</HTML>