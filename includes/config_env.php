<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$apiKey = $_ENV['BINANCE_API_KEY'];
$secretKey = $_ENV['BINANCE_SECRET'];
$merchantId = $_ENV['BINANCE_MERCHANT_ID'];
?>