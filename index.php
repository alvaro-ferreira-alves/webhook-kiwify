<?php
// Define o cabeçalho para aceitar JSON
header("Content-Type: application/json");

// Recebe o corpo da requisição (JSON) e converte para um array associativo
$content = $_POST;

print_r($content);
