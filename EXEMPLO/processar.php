<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $idade = (int)$_POST['idade'];

    if ($idade < 18) {
        echo "Olá, $nome! Você ainda é jovem com apenas $idade anos.";
    } else {
        echo "Olá, $nome! Você já é adulto com $idade anos!";
    }
} else {
    echo "Por favor, preencha o formulário corretamente.";
}
?>
