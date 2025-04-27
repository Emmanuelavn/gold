<?php
function createBinanceOrder($amount, $currency) {
    // Code pour créer une commande Binance Pay
    $url = "https://bpay.binanceapi.com/binancepay/openapi/order";
    $payload = json_encode([
        "merchantTradeNo" => "order_" . time(),
        "orderAmount" => $amount,
        "currency" => $currency,
        "goods" => [
            "goodsType" => "01",
            "goodsCategory" => "1000",
            "referenceGoodsId" => "123",
            "goodsName" => "Investissement",
            "goodsDetail" => "Investissement Petrol"
        ]
    ]);

    // Générer la signature
    $timestamp = time();
    $apiKey = "YOUR_API_KEY";
    $secretKey = "YOUR_SECRET_KEY";
    $signature = hash_hmac('sha256', $timestamp . $apiKey . $payload, $secretKey);

    $headers = [
        "Content-Type: application/json",
        "BinancePay-Timestamp: $timestamp",
        "BinancePay-Api-Key: $apiKey",
        "BinancePay-Signature: $signature"
    ];

    // Envoyer la requête
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Exemple d'appel
$order = createBinanceOrder(100, "USDT");
print_r($order);


function checkBinanceTransaction($transactionId) {
    // Code pour vérifier une transaction Binance Pay
    $url = "https://bpay.binanceapi.com/binancepay/openapi/query";

    $payload = json_encode([
        "transactionId" => $transactionId
    ]);

    $timestamp = time();
    $apiKey = "YOUR_API_KEY";
    $secretKey = "YOUR_SECRET_KEY";
    $signature = hash_hmac('sha256', $timestamp . $apiKey . $payload, $secretKey);

    $headers = [
        "Content-Type: application/json",
        "BinancePay-Timestamp: $timestamp",
        "BinancePay-Api-Key: $apiKey",
        "BinancePay-Signature: $signature"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Exemple d'appel
$transaction = checkBinanceTransaction("transaction_id_unique");
print_r($transaction);

?>
