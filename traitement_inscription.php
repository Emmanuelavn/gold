<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'includes/configDB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = getConnection();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $invitationCode = !empty($_POST['invitation_code']) ? $_POST['invitation_code'] : null;

    // Vérifier que le mot de passe est fort
    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W]).{8,}$/';
    if (!preg_match($passwordPattern, $password)) {
        echo "Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.";
        exit();
    }

    // Vérifier que l'email est unique
    $emailCheckStmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $emailCheckStmt->bind_param("s", $email);
    $emailCheckStmt->execute();
    $emailCheckResult = $emailCheckStmt->get_result();

    if ($emailCheckResult->num_rows > 0) {
        echo "Cet email est déjà utilisé pour un compte.";
        exit();
    }

    // Hacher le mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insérer les données dans la base
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, invitation_code) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $hashedPassword, $invitationCode);
    if ($stmt->execute()) {
        // Afficher la page d'inscription réussie
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Inscription Réussie</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-gray-100 min-h-screen flex items-center justify-center">
            <!-- Container -->
            <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6">
                <!-- Success Icon -->
                <div class="flex flex-col items-center">
                    <div class="bg-green-100 text-green-600 rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4 -4m-7 7a9 9 0 110-18a9 9 0 010 18z" />
                        </svg>
                    </div>
                    <h1 class="text-2xl font-semibold text-gray-800 mt-4">Inscription réussie !</h1>
                    <p class="text-gray-600 mt-2 text-center">
                        Félicitations, votre inscription a été enregistrée avec succès. Vous pouvez maintenant vous connecter!.
                    </p>
                </div>
                <!-- Button -->
                <div class="mt-6 flex justify-center">
                    <a href="login.php"
                       class="bg-gradient-to-r from-green-400 to-green-600 hover:from-green-500 hover:to-green-700 text-white px-5 py-2.5 rounded-lg text-sm font-medium shadow-md transform hover:scale-105 transition-transform">
                        Accéder à Mega Rig
                    </a>
                </div>
            </div>
        </body>
        </html>
        <?php
        exit();
    } else {
        die("Erreur : " . $conn->error);
    }
}
?>
