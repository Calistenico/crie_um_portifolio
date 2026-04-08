<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebê da Noite</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php
        session_start();

        // Configurações centrais
        $whatsapp = "+55 11 98765-4321";
        $email = "daniels0517@gmail.com";
        $preco = "R$ 100,00";

        include 'includes/header.php';
    ?>

    <div class="hero">
        <h1 class="text-5xl font-bold">Bebê da Noite</h1>
        <p class="text-3xl text-gray-700">O melhor barbeiro de São Paulo</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="location.href='agendar.php'">Agendar Agora</button>
        <img src="assets/img/tom_escuro.jpg" alt="Tom Escuro">
    </div>

    <div class="beneficios">
        <h2 class="text-3xl font-bold mb-4">Benefícios da nossa barbearia</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="card glassmorphism">
                <h3 class="text-2xl font-bold">Corte de Barba Personalizado</h3>
                <p class="text-gray-700">Nossa equipe de barbeiros experientes trabalha para criar um corte de barba único e perfeito para você.</p>
            </div>
            <div class="card glassmorphism">
                <h3 class="text-2xl font-bold">Massagem Facial</h3>
                <p class="text-gray-700">Nossa massagem facial é feita com produtos naturais e é perfeita para relaxar e rejuvenescer.</p>
            </div>
            <div class="card glassmorphism">
                <h3 class="text-2xl font-bold">Cremes e Pomadas</h3>
                <p class="text-gray-700">Nossa seleção de cremes e pomadas é feita com os melhores ingredientes naturais para manter sua pele saudável e hidratada.</p>
            </div>
        </div>
    </div>

    <div class="como-funciona">
        <h2 class="text-3xl font-bold mb-4">Como funciona nossa barbearia?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="card glassmorphism">
                <i class="fas fa-clock"></i>
                <p class="text-gray-700">Aguardar</p>
            </div>
            <div class="card glassmorphism">
                <i class="fas fa-truck"></i>
                <p class="text-gray-700">Tratamento personalizado</p>
            </div>
            <div class="card glassmorphism">
                <i class="fas fa-check-circle"></i>
                <p class="text-gray-700">Satisfação garantida</p>
            </div>
        </div>
    </div>

    <div class="depontos">
        <h2 class="text-3xl font-bold mb-4">O que nossos clientes dizem sobre nós?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="card glassmorphism">
                <i class="fas fa-star"></i>
                <p class="text-gray-700">"O melhor barbeiro que eu já conheci!"</p>
                <img src="assets/img/cliente1.jpg" alt="Cliente 1">
            </div>
            <div class="card glassmorphism">
                <i class="fas fa-star"></i>
                <p class="text-gray-700">"A barbearia DANIELS 0517 é incrível!"</p>
                <img src="assets/img/cliente2.jpg" alt="Cliente 2">
            </div>
            <div class="card glassmorphism">
                <i class="fas fa-star"></i>
                <p class="text-gray-700">"Eu nunca fui tão feliz com um corte de barba!"</p>
                <img src="assets/img/cliente3.jpg" alt="Cliente 3">
            </div>
        </div>
    </div>

    <div class="preco">
        <h2 class="text-3xl font-bold mb-4">Preço</h2>
        <p class="text-gray-700">R$ 100,00</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="location.href='agendar.php'">MAIS POPULAR</button>
    </div>

    <div class="faq">
        <h2 class="text-3xl font-bold mb-4">Perguntas frequentes</h2>
        <div class="accordion">
            <div class="accordion-item">
                <h3 class="accordion-header" id="faq1">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pergunta 1</button>
                </h3>
                <div id="faq1-content" class="accordion-collapse collapse show">
                    <p class="text-gray-700">Resposta 1</p>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="faq2">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pergunta 2</button>
                </h3>
                <div id="faq2-content" class="accordion-collapse collapse show">
                    <p class="text-gray-700">Resposta 2</p>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-final">
        <h2 class="text-5xl font-bold mb-4">Agora é sua vez!</h2>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="location.href='agendar.php'">Agendar Agora</button>
    </div>

    <?php
        include 'includes/footer.php';
    ?>

    <script src="assets/js/main.js"></script>
</body>
</html>