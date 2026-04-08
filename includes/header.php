<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <meta property="og:title" content="<?php echo SITE_NAME; ?>">
    <meta property="og:description" content="Portfolio de barbearia <?php echo SITE_NAME; ?>">
    <meta property="og:image" content="<?php echo IMG_URL . 'tom_escuro.jpg'; ?>">
    <link rel="stylesheet" href="<?php echo CSS_URL . 'style.css'; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Clash+Display&family=Cabinet+Grotesk&family=Syne:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/js/all.js"></script>
</head>

<body class="bg-gray-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a href="<?php echo BASE_URL; ?>" class="navbar-brand">
                <img src="<?php echo IMG_URL . 'tom_escuro.jpg'; ?>" alt="Logo <?php echo SITE_NAME; ?>">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL . 'sobre.php'; ?>">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL . 'contato.php'; ?>">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="<?php echo JS_URL . 'main.js'; ?>"></script>
</body>
</html>