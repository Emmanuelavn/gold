<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos de Gold</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to bottom right, #fffbea, #fef3c7); /* Dégradé doux */
        }
        .highlight {
            color: #d97706; /* Orange-brun pour les mots-clés financiers */
            font-weight: bold;
        }
        h1, h2, h3 {
            color: #f59e0b; /* Ton orange vif pour les titres */
        }
        footer {
            background-color: #fef3c7; /* Jaune doux pour le footer */
        }
        .btn-primary {
            background: linear-gradient(to right, #f59e0b, #fbbf24); /* Dégradé bouton */
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-orange-500">À propos de Gold</h1>
            <nav class="flex space-x-6">
                <a href="index.php" class="text-lg font-medium text-green-800 hover:underline">Accueil</a>
                <a href="invest.php" class="text-lg font-medium text-green-800 hover:underline">Investir</a>
                <a href="contact.php" class="text-lg font-medium text-green-800 hover:underline">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex flex-1 items-center justify-center px-6 py-10">
        <div class="max-w-4xl bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold text-orange-500 mb-6 text-center">Bienvenue chez Gold</h2>
            <p class="text-lg text-gray-700 leading-7">
                Chez <strong>Gold</strong>, nous sommes dédiés à offrir des <span class="highlight">opportunités d'investissement innovantes</span>.
                Grâce à une approche centrée sur la transparence et la sécurité, nous garantissons à nos investisseurs des <span class="highlight">retours financiers exceptionnels</span>.
            </p>
            <p class="text-lg text-gray-700 leading-7 mt-4">
                <span class="highlight">Pourquoi la cryptomonnaie ?</span> Parce qu'elle garantit des transactions instantanées, sûres et accessibles mondialement.
                Chaque investissement avec <strong>Gold</strong> est une opportunité de bâtir un avenir financier solide.
            </p>

            <!-- Vision -->
            <h3 class="text-2xl font-semibold text-green-600 mt-8">Notre Vision</h3>
            <p class="text-lg text-gray-700 leading-7 mt-4">
                Nous imaginons un monde où chacun peut accéder à des opportunités financières <span class="highlight">fiables et flexibles</span>.
                Notre objectif : transformer chaque projet d'investissement en une réussite.
            </p>

            <!-- Pourquoi nous choisir -->
            <h3 class="text-2xl font-semibold text-yellow-600 mt-8">Pourquoi investir avec nous ?</h3>
            <ul class="list-disc mt-6 text-lg text-gray-700 pl-6">
                <li>Retours garantis dans les <span class="highlight">3 mois</span>.</li>
                <li>Système entièrement <span class="highlight">transparent</span> et sécurisé.</li>
                <li>Des experts dédiés pour guider vos décisions financières.</li>
                <li>Des options adaptées à vos objectifs uniques.</li>
            </ul>
        </div>
    </main>

    <!-- Call-to-Action Section -->
    <section class="bg-yellow-100 py-8 shadow-md">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-3xl font-bold text-orange-500 mb-4">Prêt à faire évoluer vos finances ?</h3>
            <p class="text-lg text-gray-700 mb-6 leading-7">
                Rejoignez des centaines d'investisseurs qui ont choisi <strong>Gold</strong> pour réaliser leurs rêves financiers.
                Cliquez ci-dessous pour commencer votre aventure !
            </p>
            <a href="invest.php" class="btn-primary">Investir Maintenant</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-yellow-100 shadow-lg mt-10">
        <div class="max-w-7xl mx-auto px-6 py-4 text-center text-gray-600 text-sm">
            © 2025 Gold. Tous droits réservés.
        </div>
    </footer>
</body>
</html>
