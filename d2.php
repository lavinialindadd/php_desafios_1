<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Par ou Ímpar</title>
</head>
<body>

<h2>Informe um número:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Número: <input type="number" name="numero"><br><br>
    <input type="submit" name="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    // Verifica se o número foi fornecido
    if (!empty($numero)) {
        if ($numero % 2 == 0) {
            echo "<h2>O número $numero é par.</h2>";
        } else {
            echo "<h2>O número $numero é ímpar.</h2>";
        }
    } else {
        echo "<h2>Por favor, informe um número.</h2>";
    }
}
?>

</body>
</html>
