<!DOCTYPE html>
<html lang="br">
<head>
    <title>Calculadora de Soma</title>
</head>
<body>

<h2>Informe dois números para somar:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Número 1: <input type="text" name="num1"><br><br>
    Número 2: <input type="text" name="num2"><br><br>
    <input type="submit" name="submit" value="Somar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Verifica se os números foram fornecidos
    if (!empty($num1) && !empty($num2)) {
        // Converte os números para float para garantir que sejam tratados como números decimais
        $num1 = (float)$num1;
        $num2 = (float)$num2;

        // Calcula a soma
        $soma = $num1 + $num2;

        echo "<h2>A soma de $num1 e $num2 é igual a $soma.</h2>";
    } else {
        echo "<h2>Por favor, informe dois números para somar.</h2>";
    }
}
?>

</body>
</html>
