<?php

// Número do telefone com código de país e DDD
$telefone = "5519997452533";

// Mensagem que será enviada junto com o link
$mensagem = "Olá! Gostaria de Mais informações sobre os serviços prestados.";

// URL do link do WhatsApp com o número e mensagem
$url = "https://wa.me/$telefone?text=" . urlencode($mensagem);

// Redireciona o usuário para a URL do WhatsApp
header("Location: $url");
exit;
