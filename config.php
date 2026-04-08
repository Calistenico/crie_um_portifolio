<?php
define('SITE_NAME', 'Daniels 0517 Tom Escuro');
define('SITE_URL', 'https://daniels0517.com/tom_escuro_portfolio');
define('SITE_DESC', 'Portfolio de barbearia Daniels 0517 - TOM ESCURO');

define('WHATSAPP', '+55 5549 9999 9999');
define('EMAIL_CONTATO', 'contato@daniels0517.com');

define('PRECO_PESQUISA', 'R$ 50,00');
define('PRECO_CUT', 'R$ 70,00');
define('PRECO_ESPETO', 'R$ 100,00');

if (!defined('SITE_NAME')) die();

date_default_timezone_set('America/Sao_Paulo');

function whatsapp_link($msg) {
    return 'https://wa.me/' . WHATSAPP . '?text=' . urlencode($msg);
}

function format_price($valor) {
    return number_format($valor, 2, ',', '.');
}

function is_business_hours() {
    $hora = date('H');
    return ($hora >= 9 && $hora < 18);
}