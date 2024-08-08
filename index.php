<?php
// Define o cabeçalho para aceitar JSON
header("Content-Type: application/json");

// Recebe o corpo da requisição (JSON) e converte para um array associativo
$data = json_decode(file_get_contents('php://input'), true);

// Extrai os dados relevantes do JSON
$order_id = $data['order_id'];
$order_ref = $data['order_ref'];
$order_status = $data['order_status'];
$created_at = $data['created_at'];
$product_id = $data['Product']['product_id'];
$product_name = $data['Product']['product_name'];
$full_name = $data['Customer']['full_name'];
$email = $data['Customer']['email'];
$mobile = $data['Customer']['mobile'];
$cpf = $data['Customer']['CPF'];

// Aqui você pode manipular os dados conforme necessário, como armazená-los em um banco de dados

// Exemplo de resposta
$response = [
    'status' => 'success',
    'message' => 'Dados recebidos com sucesso',
    'data' => [
        'order_id' => $order_id,
        'order_ref' => $order_ref,
        'order_status' => $order_status,
        'created_at' => $created_at,
        'product_id' => $product_id,
        'product_name' => $product_name,
        'full_name' => $full_name,
        'email' => $email,
        'mobile' => $mobile,
        'cpf' => $cpf
    ]
];

// Retorna a resposta como JSON
echo json_encode($response);
