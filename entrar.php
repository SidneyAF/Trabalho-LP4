<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Entrar</title>
</head>
<body>
<h1>Entrar</h1>
<?php
    include 'menu.php';
    ?>
    <br>
    <form action="Funcoes/login.php" method="POST">
        E-mail<input type="text" name="email" required>
        Senha<input type="password" name="senha" required>
        <input type="submit" value="Entrar">
    </form>
    
</body>
</html>