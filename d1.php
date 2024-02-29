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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // Verifica se o nome e a idade foram fornecidos
    if (!empty($nome) && !empty($idade)) {
        echo "<h2>Olá, $nome! Você tem $idade anos.</h2>";
    } else {
        echo "<h2>Por favor, informe seu nome e idade.</h2>";
    }
}
?>

</body>
</html>
