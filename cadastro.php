<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Participante</title>
    <link rel="stylesheet" href="other.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Participante</h2>
        <button onclick="window.history.back()">Voltar</button>
        <style>
button {
    padding: 8px 16px;
    background-color: #ccc;
    border: 1px solid #888;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #bbb;
}
</style>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome'] ?? '');
            $sobrenome = htmlspecialchars($_POST['sobrenome'] ?? '');
            $data_nascimento = htmlspecialchars($_POST['data_nascimento'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');

            if ($nome && $sobrenome && $data_nascimento && $email) {
                echo "<p class='mensagem'>O participante <strong>$nome</strong> foi cadastrado!É...Pelo menos é o que mostra.</p>";
            } else {
                echo "<p class='mensagem' style='color: red;'>Todos os campos são obrigatórios!</p>";
            }
        }
        ?>

        <form method="post" action="">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
