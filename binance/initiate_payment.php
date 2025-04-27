<?php

require_once 'binance/binance_pay.php';

// Exemple d'appel à la fonction de paiement
$response = createBinanceOrder(100, 'USDT');
if ($response['status'] === 'SUCCESS') {
    echo "Paiement initié avec succès. Veuillez finaliser le paiement via Binance Pay.";
} else {
    echo "Erreur : " . $response['msg'];
}
?>
