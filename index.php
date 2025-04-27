<?php
session_start(); // Démarrer la session

// Ajouter vérification de l'utilisateur avant le rendu de la page
if (!isset($_SESSION['user_id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: login.php");
    exit();
}

require_once 'includes/configDb.php';

// Définir isConnected pour vérifier la connexion de l'utilisateur
$isConnected = isset($_SESSION['user_id']);
$username = null; // Initialisation du nom de l'utilisateur
$email = null; // Initialisation de l'email utilisateur

if ($isConnected) {
    $conn = getConnection(); // Connexion à la base de données

    // Récupérer le username et l'email à partir de l'ID utilisateur
    $stmt = $conn->prepare("SELECT username, email FROM users WHERE id = ?");
    $stmt->bind_param("i", $_SESSION['user_id']); // Utilise l'ID dans la session
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $username = $user['username']; // Récupérer le nom d'utilisateur
        $email = $user['email']; // Récupérer l'email utilisateur
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Petrolm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: url('assets/img/image1.jpeg') no-repeat center center fixed; /* Arrière-plan avec l'image */
            background-size: cover; /* Image s'ajuste à l'écran */
            color: #333; /* Couleur pour une bonne lisibilité */
        }
        .nav-link:hover {
            text-decoration: underline;
            color: #FF8C00; /* Orange vif pour hover */
        }
        h1, h2 {
            color: #FF8C00; /* Titres en orange vif */
        }
        strong {
            color: #1b5e20; /* Texte important en vert foncé */
        }
        .highlight {
            color: chocolate; /* Brun orangé pour souligner les montants */
        }
        footer {
            background-color: #fef3c7; /* Couleur douce pour le footer */
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 20rem;
            height: 100vh;
            background: #fff;
            box-shadow: -2px 0 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            overflow-y: auto;
            z-index: 100;
        }
        .modal.active {
            display: block;
        }
        .button {
            background: linear-gradient(to right, #FF8C00, #FFD700); /* Dégradé orange-or */
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }
        .button:hover {
            transform: scale(1.05); /* Légère animation au survol */
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-orange-500">Gold</h1>
            <nav class="flex space-x-8">
                <a href="invest.php" class="nav-link text-lg font-medium text-green-800">Investir</a>
                <a href="about.php" class="nav-link text-lg font-medium text-green-800">À propos</a>
                <a href="#" onclick="toggleProfile()" class="flex items-center space-x-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.761 0 5.304.84 7.384 2.267M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-lg font-medium text-green-800">Profil</span>
                </a>
                <?php if ($isConnected): ?>
                    <a href="logout.php" class="nav-link text-lg font-medium text-red-600">Déconnexion</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>

    <main class="flex flex-1 items-center justify-center">
    <div class="text-center p-8 rounded-lg shadow-xl" style="background: rgba(255, 255, 255, 0.6);"> <!-- Transparence accentuée -->
        <h2 class="text-5xl font-bold text-orange-500 mb-6">
            <?php if ($username): ?>
                Bienvenue, <?php echo htmlspecialchars($username); ?> sur Gold !
            <?php else: ?>
                Bienvenue sur Gold !
            <?php endif; ?>
        </h2>
        <p class="text-lg text-gray-700 mb-8">
            You're all set. Explore our platform and start <br> earning rewards from the world of <strong>Gold</strong>.<br>
            <div>
                <strong>Welcome Bonus</strong>: <span class="highlight">500 FCFA</span> as a welcome gift.<br>
            </div> <br>
            <div>
                <strong class="highlight">Referral promo</strong>: Earn <span class="highlight">1,000 FCFA</span> after 5 referrals.
            </div>
        </p>
        <div class="flex justify-center space-x-6">
            <a href="invest.php" class="button">Investir</a>
            <a href="about.php" class="button">À propos</a>
        </div>
    </div> 
</main>


    <!-- Modal Profil -->
    <div id="profile-modal" class="modal">
        <div class="text-center">
            <img src="default-profile.png" alt="Photo de profil" class="w-24 h-24 rounded-full mx-auto mb-4">
            <h3 class="text-2xl font-bold text-green-800"><?php echo htmlspecialchars($username ?? "Nom inconnu"); ?></h3>
            <p class="text-gray-600"><?php echo htmlspecialchars($email ?? "Email inconnu"); ?></p>
            <button onclick="toggleProfile()" class="button mt-4">Fermer</button>
        </div>
    </div>

    <footer class="bg-yellow-100 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 text-center text-gray-600 text-sm">
            © 2025 Gold. Tous droits réservés.
        </div>
    </footer>

    <script>
        function toggleProfile() {
            const modal = document.getElementById('profile-modal');
            modal.classList.toggle('active');
        }
    </script>
</body>
</html>
