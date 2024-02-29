<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP com HTML e CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $variavel = 10; // Inicialmente, $variavel é um número inteiro

            echo "<p>Valor inicial da variável: " . $variavel . "</p>";

            // Agora, atribuímos uma string à mesma variável
            $variavel = "Olá Mundo!"; // Agora, $variavel é uma string

            echo "<p>Novo valor da variável: " . $variavel . "</p>";

            // Agora, realizamos uma operação de concatenação com a variável
            $variavel = $variavel . " PHP é incrível!";

            echo "<p>Valor atualizado da variável: " . $variavel . "</p>";

            // Agora, atribuímos um valor booleano à mesma variável
            $variavel = true; // Agora, $variavel é um booleano

            // Podemos fazer uma verificação de tipo sem problemas
            echo "<p class='result'>Resultado da verificação de tipo: ";
            if ($variavel) {
                echo "Variável é verdadeira";
            } else {
                echo "Variável é falsa";
            }
            echo "</p>";
        ?>
    </div>
</body>
</html>
