<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" href="other.css">
</head>
<body>
    <h2>Formulário de Contato</h2>
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
        $email = htmlspecialchars($_POST['email'] ?? '');
        $assunto = htmlspecialchars($_POST['assunto'] ?? '');

        if ($nome && $email && $assunto) {
            echo "<p>O e-mail de <strong>$nome</strong> foi enviado com sucesso.</p>";
        } else {
            echo "<p>Erro: Todos os campos devem ser preenchidos.</p>";
        }
    }
    ?>

    <form method="post" action="">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="assunto">Assunto:</label><br>
        <textarea style = "width:900px" id="assunto" name="assunto" rows="4" cols="40" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
