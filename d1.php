<!DOCTYPE html>
<html>
<head>
    <title>Desafio PHP</title>
</head>
<body>

<h2>Informe seu nome e idade:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nome: <input type="text" name="nome"><br><br>
    Idade: <input type="text" name="idade"><br><br>
    <input type="submit" name="submit" value="Enviar">
</form>

//código php aqui

</body>
</html>
