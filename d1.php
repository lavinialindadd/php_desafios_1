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
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta e sanitiza os dados de entrada
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $idade = htmlspecialchars(trim($_POST["idade"]));

    // Verifica se os campos não estão vazios
    if (!empty($nome) && !empty($idade)) {
        // Exibe a mensagem de saudação personalizada
        echo "<h3>Olá, $nome! Você tem $idade anos.</h3>";
    } else {
        echo "<h3>Por favor, preencha todos os campos.</h3>";
    }
}
?>

</body>
</html>
