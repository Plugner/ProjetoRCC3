<?php
require_once 'vendor/autoload.php';

use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

// Configurações do Mercado Pago
MercadoPagoConfig::setAccessToken("MERCADO_PAGO_ACCESS_TOKEN");
$client = new PaymentClient();
// Dados para o
$amount = 100; // Valor do pagamento (ler do produto na db no futuro)
$description = "Pagamento de teste"; // Descrição do pagamento

// DB (separar depois)
$db = new PDO("mysql:host=localhost;dbname=projrcc", "root", "");
$sql = "SELECT email FROM users WHERE id = 1";
$stmt = $db->query($sql);
$payer["email"] = $stmt->fetchColumn();

$createRequest = [
    "transaction_amount" => $amount,
    "description" => $description,
    "payment_method_id" => "pix",
    "payer" => $payer,
];

// Tenta criar o pagamento
try {
    $payment = $client->create($createRequest);
} catch (MPApiException $e) {
    // Tratamento de erros
    echo $e->getMessage();
    exit;
}

// Redireciona o usuário para a página de pagamento
header("Location: " . $payment->getRedirectUrl());

echo '<link rel="stylesheet" href="style.css">';
echo '<div class="container">
  <h1 class="title">Pagamento via Mercado Pago</h1>
  <p class="subtitle">
    O valor do pagamento é de R$ ' . $amount . '.
  </p>
  <p class="subtitle">
    O pagamento será realizado com o método ' . $createRequest["payment_method_id"] . '.
  </p>
  <a href="' . $payment->getRedirectUrl() . '" class="button">
    Pagar
  </a>
</div>';
?>
