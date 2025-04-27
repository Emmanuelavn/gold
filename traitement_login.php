<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'includes/configDb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = getConnection();
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si l'email existe dans la base
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Récupérer les données utilisateur
        $user = $result->fetch_assoc();
        $hashedPassword = $user['password'];

        // Vérifier le mot de passe
        if (password_verify($password, $hashedPassword)) {
            // Démarrer la session
            session_start();
            $_SESSION['user_id'] = $user['id'];
          

            // Afficher la page de confirmation HTML
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Connexion Réussie</title>
                <script src="https://cdn.tailwindcss.com"></script>
                <style>
                    body {
                        background: linear-gradient(to bottom, #e8f5e9, #a5d6a7);
                    }
                    .success-icon {
                        background: linear-gradient(to top, #66bb6a, #81c784);
                    }
                    .cta-button {
                        background: linear-gradient(to right, #1b5e20, #4caf50);
                    }
                </style>
            </head>
            <body class="bg-gray-100 min-h-screen flex items-center justify-center">
                <!-- Container -->
                <div class="bg-white rounded-2xl shadow-lg max-w-md w-full p-8">
                    <!-- Success Icon -->
                    <div class="flex flex-col items-center">
                        <div class="success-icon text-white rounded-full p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4 -4m-7 7a9 9 0 110-18a9 9 0 010 18z" />
                            </svg>
                        </div>
                        <h1 class="text-3xl font-bold text-green-800 mt-6">Connexion réussie !</h1>
                        <p class="text-green-700 mt-4 text-center">
                            Félicitations, votre connexion a été effectuée avec succès. Cliquez ci-dessous pour accéder à votre espace personnel.
                        </p>
                    </div>
                    <!-- Button -->
                    <div class="mt-6 flex justify-center">
                        <a href="index.php"
                           class="cta-button text-white px-6 py-3 rounded-xl text-lg font-medium shadow-lg hover:scale-105 transition-transform">
                            Accéder à l'accueil
                        </a>
                    </div>
                </div>
            </body>
            </html>
            <?php
            exit();
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Aucun compte trouvé avec cet email.";
    }
}
?>
