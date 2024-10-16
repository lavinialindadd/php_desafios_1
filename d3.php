<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>

<h2>Informe seu peso e altura:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Peso (em kg): <input type="number" name="peso" step="0.01" required><br><br>
    Altura (em metros): <input type="number" name="altura" placeholder="0.00" step="0.01" required><br><br>
    <input type="submit" name="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT);
    $altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT);

    // Verifica se o peso e a altura foram fornecidos e são válidos
    if ($peso !== false && $altura !== false && $peso > 0 && $altura > 0) {
        // Calcula o IMC
        $imc = $peso / ($altura * $altura);

        // Determina a faixa de peso com base no IMC
        if ($imc < 18.5) {
            $faixa_peso = "abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            $faixa_peso = "com peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            $faixa_peso = "com sobrepeso";
        } else {
            $faixa_peso = "com obesidade";
        }

        echo "<h2>Seu IMC é " . number_format($imc, 2) . ". Você está dentro da faixa de peso $faixa_peso.</h2>";
    } else {
        echo "<h2>Por favor, informe valores válidos para peso e altura (números positivos).</h2>";
    }
}
?>

</body>
</html>
