<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preuves de Paiements</title>
    <!-- Importation de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <!-- En-tête -->
    <header class="bg-yellow-500 py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold text-white">Preuves de Paiements</h1>
            <p class="text-white text-sm mt-2">Retours sur Investissements avec Binance API</p>
        </div>
    </header>

    <!-- Section principale -->
    <main class="container mx-auto mt-10 px-4">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Détails des Paiements</h2>
            <!-- Tableau des transactions -->
            <table class="table-auto w-full text-left border-collapse">
                <thead>
                    <tr class="bg-yellow-100 text-gray-800">
                        <th class="py-3 px-6 border-b">Date</th>
                        <th class="py-3 px-6 border-b">Montant Investi</th>
                        <th class="py-3 px-6 border-b">Retour sur Investissement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-yellow-50">
                        <td class="py-3 px-6 border-b">27 Avril 2025</td>
                        <td class="py-3 px-6 border-b">500,000 FCFA</td>
                        <td class="py-3 px-6 border-b">750,000 FCFA</td>
                    </tr>
                    <tr class="hover:bg-yellow-50">
                        <td class="py-3 px-6 border-b">20 Avril 2025</td>
                        <td class="py-3 px-6 border-b">300,000 FCFA</td>
                        <td class="py-3 px-6 border-b">450,000 FCFA</td>
                    </tr>
                    <tr class="hover:bg-yellow-50">
                        <td class="py-3 px-6 border-b">15 Avril 2025</td>
                        <td class="py-3 px-6 border-b">200,000 FCFA</td>
                        <td class="py-3 px-6 border-b">300,000 FCFA</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-12 bg-gray-800 py-6">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2025 Gold Investments. Tous droits réservés.</p>
            <p>Propulsé par Binance API.</p>
        </div>
    </footer>
</body>
</html>
