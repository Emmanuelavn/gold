<?php
function getConnection() {
    $host = 'localhost'; // Adresse du serveur MySQL
    $user = 'root'; // Nom d'utilisateur MySQL
    $password = ''; // Mot de passe MySQL (vide si aucun)
    $dbname = 'petrolm_db'; // Nom de la base de données

    // Création de la connexion
    $conn = new mysqli($host, $user, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Erreur de connexion : " . $conn->connect_error);
    }

    return $conn; // Retourne l'objet connexion
}
?>
