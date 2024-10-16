<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
</head>
<body>

    <h1>Formulário com PHP</h1>
    
    <!-- Formulário enviado para o próprio arquivo PHP -->
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php
    // Processa os dados do formulário no lado do servidor
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // Verifica se os campos estão preenchidos
        if (empty($nome) || empty($email)) {
            echo "<p style='color: red;'>Por favor, preencha todos os campos.</p>";
        } else {
            // Exibe os dados enviados
            echo "<h2>Dados enviados:</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Email:</strong> $email</p>";
        }
    }
    ?>

</body>
</html>
