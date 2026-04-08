<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniels 0517 Tom Escuro Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <footer class="rodapé">
        <div class="logo">
            <img src="assets/img/tom_escuro.jpg" alt="Tom Escuro">
        </div>
        <nav class="colunas-links">
            <ul>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="#agendar">Agendar</a></li>
            </ul>
        </nav>
        <div class="redes-sociais-whatsapp">
            <img src="assets/img/whatsapp.png" alt="WhatsApp">
            <p>+(xx) xxxxx-xxxx</p>
        </div>
    </footer>
    <script>
        const whatsappButton = document.querySelector('.redes-sociais-whatsapp');
        const whatsappLink = `https://wa.me/?phone=+${'xx'} xxxxx-xxxx`;

        whatsappButton.addEventListener('click', () => {
            window.open(whatsappLink, '_blank');
        });

        new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('flutuante');
                }
            });
        }, {
            root: null,
            threshold: 1.0
        }).observe(whatsappButton);

        const scrollReveal = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('scroll-reveal');
                }
            });
        }, {
            root: null,
            threshold: 1.0
        }).observe(document.querySelector('.rodapé'));

        const contador = document.querySelector('.contador');

        setInterval(() => {
            contador.textContent = `Sessões agendadas: ${Math.floor(Math.random() * 100)}`;
        }, 1000);

        const FAQAccordion = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('faq-accordion');
                }
            });
        }, {
            root: null,
            threshold: 1.0
        }).observe(document.querySelector('.faq-accordion'));

        const smoothScroll = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('smooth-scroll');
                }
            });
        }, {
            root: null,
            threshold: 1.0
        }).observe(document.querySelector('.smooth-scroll'));

        document.body.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;
            if (scrollPosition > 100) {
                document.querySelector('.logo').style.transform = 'translateX(-50px)';
            } else {
                document.querySelector('.logo').style.transform = '';
            }
        });

        new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('scroll-reveal');
                }
            });
        }, {
            root: null,
            threshold: 1.0
        }).observe(document.querySelector('.smooth-scroll'));
    </script>
</body>
</html>

<?php
echo date('Y') . ' - Todos os direitos reservados por Daniels 0517';
?>

<script src="assets/js/script.js"></script>