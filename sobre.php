<?php
// config.php
$nomeAutor = 'Daniel';
$idadeAutor = 27;
$emailAutor = filter_var('daniel.daniels@gmail.com', FILTER_VALIDATE_EMAIL);
$telefoneAutor = '(11) 12345-6789';

function getNomeAutor() {
    global $nomeAutor;
    return $nomeAutor;
}

function getIdadeAutor() {
    global $idadeAutor;
    return $idadeAutor;
}

function getEmailAutor() {
    global $emailAutor;
    return $emailAutor;
}

function getTelefoneAutor() {
    global $telefoneAutor;
    return $telefoneAutor;
}
?>

<?php
// includes/header.php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniels 0517 - Tom Escuro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
// includes/footer.php
?>
<div class="container">
    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <main>
        <section class="sobre">
            <h1>Daniels 0517 - Tom Escuro</h1>
            <p>Barbearia especializada em corte, penteados e cuidados pessoais.</p>
            <img src="assets/img/tom_escuro.jpg" alt="Imagem do tom escuro">
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
</div>

<?php
// sobre.php
session_start();
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
} else {
    $token = hash('sha256', uniqid());
    $_SESSION['token'] = $token;
}
?>

<form action="" method="post">
    <input type="hidden" name="token" value="<?php echo $token; ?>">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome"><br><br>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="Email aqui">
    <br><br>
    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" placeholder="Telefone aqui">
    <br><br>
    <button type="submit">Enviar</button>
</form>

<?php
// contato.php
?>

<script>
    function enviarFormulario() {
        var nome = document.getElementById('nome').value;
        var email = document.getElementById('email').value;
        var telefone = document.getElementById('telefone').value;

        if (nome == "" || email == "" || telefone == "") {
            alert("Preencha todos os campos!");
            return false;
        }

        // Verificar se o e-mail é válido
        var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!regex.test(email)) {
            alert("E-mail inválido!");
            return false;
        }

        // Verificar se o telefone é válido
        var regex = /^\d{11}$/;
        if (!regex.test(telefone)) {
            alert("Telefone inválido!");
            return false;
        }

        // Enviar dados para o servidor
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'enviar.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(`nome=${nome}&email=${email}&telefone=${telefone}`);

        if (xhr.status == 200) {
            alert("Mensagem enviada com sucesso!");
        } else {
            alert("Erro ao enviar mensagem!");
        }
    }

    document.getElementById('enviar').addEventListener('click', enviarFormulario);
</script>

<?php
// enviar.php
session_start();
if (isset($_POST['token']) && $_POST['token'] == $_SESSION['token']) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Enviar dados para o banco de dados
    // ...

    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar mensagem!";
}
?>

</body>
</html>