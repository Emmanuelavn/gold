<?php
require __DIR__ . '/../vendor/autoload.php';


try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}


// Récupération des clés depuis le fichier .env
$api_key = getenv('BINANCE_API_KEY');
$api_secret = getenv('BINANCE_SECRET');

// URL de l'API Binance
$url = "https://api.binance.com/api/v3/account";

// Générer un timestamp
$timestamp = round(microtime(true) * 1000);

// Créer une signature avec la clé privée
$query_string = "timestamp=$timestamp";
$signature = hash_hmac('sha256', $query_string, $api_secret);

// Ajouter les en-têtes pour l'authentification
$headers = [
    "X-MBX-APIKEY: $api_key"
];

// Initialiser cURL pour faire une requête API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$url?$query_string&signature=$signature");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Exécuter la requête et récupérer la réponse
$response = curl_exec($ch);
curl_close($ch);

// Afficher la réponse
echo $response;
?>
