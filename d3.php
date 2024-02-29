<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>

<h2>Informe seu peso e altura:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Peso (em kg): <input type="text" name="peso"><br><br>
    Altura (em metros): <input type="text" name="altura" placeholder="0.00"><br><br>
    <input type="submit" name="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    // Verifica se o peso e a altura foram fornecidos
    if (!empty($peso) && !empty($altura)) {
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
        echo "<h2>Por favor, informe seu peso e altura.</h2>";
    }
}
?>

</body>
</html>
