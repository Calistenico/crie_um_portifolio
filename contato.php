<?php
session_start();
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

function filterInput($input) {
    $input = trim($input);
    $input = htmlspecialchars($input, ENT_QUOTES);
    return $input;
}

function validateEmail($email) {
    $pattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function generateToken() {
    $token = bin2hex(random_bytes(32));
    $_SESSION['token'] = $token;
    return $token;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['nome'])) {
        $_POST['nome'] = '';
    }

    if (!isset($_POST['email'])) {
        $_POST['email'] = '';
    }

    if (!isset($_POST['telefone'])) {
        $_POST['telefone'] = '';
    }

    $nome = filterInput($_POST['nome']);
    $email = filterInput($_POST['email']);
    $telefone = filterInput($_POST['telefone']);

    if ($nome && $email && $telefone) {
        // Enviar e-mail
        $to = 'daniels0517@gmail.com';
        $subject = 'Agendamento de barbearia';
        $body = "Nome: $nome\nE-mail: $email\nTelefone: $telefone";
        mail($to, $subject, $body);
    }

    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/header.php'; ?>
</head>
<body>
    <div class="container">
        <h1>Contato</h1>
        <form method="POST" action="">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"><br><br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone"><br><br>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>