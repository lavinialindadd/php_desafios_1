<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>

<h2>Informe dois números:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Número 1: <input type="number" name="numero1" required><br><br>
    Número 2: <input type="number" name="numero2" required><br><br>
    <input type="submit" name="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e valida os números fornecidos pelo usuário
    $numero1 = filter_input(INPUT_POST, 'numero1', FILTER_VALIDATE_FLOAT);
    $numero2 = filter_input(INPUT_POST, 'numero2', FILTER_VALIDATE_FLOAT);

    // Verifica se os números são válidos
    if ($numero1 !== false && $numero2 !== false) {
        // Calcula a soma
        $soma = $numero1 + $numero2;

        // Exibe o resultado
        echo "<h2>A soma de $numero1 e $numero2 é igual a $soma.</h2>";
    } else {
        echo "<h2>Por favor, informe números válidos.</h2>";
    }
}
?>

</body>
</html>