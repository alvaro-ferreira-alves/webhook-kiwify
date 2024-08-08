<?php
// Define o cabeçalho para aceitar JSON
header("Content-Type: application/json");

// Recebe o corpo da requisição (JSON) e converte para um array associativo
$data = json_decode(file_get_contents('php://input'), true);

print_r($data);
