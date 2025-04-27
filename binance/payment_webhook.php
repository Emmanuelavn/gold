<?php
require_once 'includes/config.php';
require_once 'includes/binance_pay.php';

// Lire les données POST envoyées par Binance
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Vérifier et traiter la notification
if (isset($data['transactionId'])) {
    $transaction = checkBinanceTransaction($data['transactionId']);
    if ($transaction['status'] === 'COMPLETED') {
        // Mettre à jour la base de données pour indiquer que la transaction est terminée
        echo "Paiement complété.";
    } else {
        echo "Paiement non complété.";
    }
} else {
    echo "Données de transaction manquantes.";
}
?>
