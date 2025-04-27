<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MegaRig Investment Options</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Amélioration des cartes d'investissement */
        .investment-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .investment-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .invest-btn {
            transition: all 0.2s ease-in-out;
        }
        .invest-btn:hover {
            background-color: #f97316; /* Orange vif au survol */
            transform: scale(1.05);
        }
        .btn-back {
            background-color: #4b5563; /* Gris foncé */
            color: white;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        .btn-back:hover {
            background-color: #374151;
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-300 flex flex-col items-center min-h-screen">
    <!-- Bouton de retour -->
    <div class="w-full max-w-6xl mt-4 px-8">
        <button class="btn-back" onclick="goBack()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Retour
        </button>
    </div>

    <!-- Contenu principal -->
    <div class="bg-white p-8 rounded-2xl shadow-2xl max-w-6xl w-full mt-4">
        <h1 class="text-4xl font-extrabold text-center text-orange-600 mb-8 uppercase">
            Nos options d'investissements
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- MegaRig 1 -->
            <div class="investment-card bg-yellow-50 p-6 rounded-xl shadow-md text-center">
                <h2 class="text-xl font-bold text-orange-500 mb-4">MegaRig 1</h2>
                <p class="text-gray-700">Price: <span class="font-bold text-green-600">3,500 FCFA</span></p>
                <p class="text-gray-700">Duration: <span class="font-bold text-blue-600">21 days</span></p>
                <p class="text-gray-700">Return: <span class="font-bold text-purple-600">5,880 FCFA</span></p>
                <button class="invest-btn mt-6 bg-orange-500 text-white py-2 px-6 rounded-lg hover:scale-105"
                        onclick="redirectToPayment('MegaRig 1', 3500, '21 days', 5880)">
                    Invest
                </button>
            </div>
            <!-- MegaRig 2 -->
            <div class="investment-card bg-yellow-50 p-6 rounded-xl shadow-md text-center">
                <h2 class="text-xl font-bold text-orange-500 mb-4">MegaRig 2</h2>
                <p class="text-gray-700">Price: <span class="font-bold text-green-600">3,000 FCFA</span></p>
                <p class="text-gray-700">Duration: <span class="font-bold text-blue-600">21 days</span></p>
                <p class="text-gray-700">Return: <span class="font-bold text-purple-600">5,040 FCFA</span></p>
                <button class="invest-btn mt-6 bg-orange-500 text-white py-2 px-6 rounded-lg hover:scale-105"
                        onclick="redirectToPayment('MegaRig 2', 3000, '21 days', 5040)">
                    Invest
                </button>
            </div>
            <!-- MegaRig 3 -->
            <div class="investment-card bg-yellow-50 p-6 rounded-xl shadow-md text-center">
                <h2 class="text-xl font-bold text-orange-500 mb-4">MegaRig 3</h2>
                <p class="text-gray-700">Price: <span class="font-bold text-green-600">300,000 FCFA</span></p>
                <p class="text-gray-700">Duration: <span class="font-bold text-blue-600">21 days</span></p>
                <p class="text-gray-700">Return: <span class="font-bold text-purple-600">756,000 FCFA</span></p>
                <button class="invest-btn mt-6 bg-orange-500 text-white py-2 px-6 rounded-lg hover:scale-105"
                        onclick="redirectToPayment('MegaRig 3', 300000, '21 days', 756000)">
                    Invest
                </button>
            </div>
              <!-- MegaRig 4 -->
              <div class="investment-card bg-yellow-50 p-6 rounded-xl shadow-md text-center">
                <h2 class="text-xl font-bold text-orange-500 mb-4">MegaRig 4</h2>
                <p class="text-gray-700">Price: <span class="font-bold text-green-600">400,000 FCFA</span></p>
                <p class="text-gray-700">Duration: <span class="font-bold text-blue-600">21 days</span></p>
                <p class="text-gray-700">Return: <span class="font-bold text-purple-600">1,008,000 FCFA</span></p>
                <button class="invest-btn mt-6 bg-orange-500 text-white py-2 px-6 rounded-lg hover:scale-105"
                        onclick="redirectToPayment('MegaRig 4', 400000, '21 days', 1008000)">
                    Invest
                </button>
            </div>
                 <!-- MegaRig 5 -->
                 <div class="investment-card bg-yellow-50 p-6 rounded-xl shadow-md text-center">
                <h2 class="text-xl font-bold text-orange-500 mb-4">MegaRig 5</h2>
                <p class="text-gray-700">Price: <span class="font-bold text-green-600">500,000 FCFA</span></p>
                <p class="text-gray-700">Duration: <span class="font-bold text-blue-600">21 days</span></p>
                <p class="text-gray-700">Return: <span class="font-bold text-purple-600">1,260,000 FCFA</span></p>
                <button class="invest-btn mt-6 bg-orange-500 text-white py-2 px-6 rounded-lg hover:scale-105"
                        onclick="redirectToPayment('MegaRig 5', 500000, '21 days', 1260000)">
                    Invest
                </button>
            </div>
                <!-- MegaRig 6 -->
                <div class="investment-card bg-yellow-50 p-6 rounded-xl shadow-md text-center">
                <h2 class="text-xl font-bold text-orange-500 mb-4">MegaRig 6</h2>
                <p class="text-gray-700">Price: <span class="font-bold text-green-600">600,000 FCFA</span></p>
                <p class="text-gray-700">Duration: <span class="font-bold text-blue-600">21 days</span></p>
                <p class="text-gray-700">Return: <span class="font-bold text-purple-600">1,512,000 FCFA</span></p>
                <button class="invest-btn mt-6 bg-orange-500 text-white py-2 px-6 rounded-lg hover:scale-105"
                        onclick="redirectToPayment('MegaRig 6', 600000, '21 days', 1512000)">
                    Invest
                </button>
            </div>
              <!-- MegaRig 7 -->
              <div class="investment-card bg-yellow-50 p-6 rounded-xl shadow-md text-center">
                <h2 class="text-xl font-bold text-orange-500 mb-4">MegaRig 7</h2>
                <p class="text-gray-700">Price: <span class="font-bold text-green-600">700,000 FCFA</span></p>
                <p class="text-gray-700">Duration: <span class="font-bold text-blue-600">21 days</span></p>
                <p class="text-gray-700">Return: <span class="font-bold text-purple-600">1,764,000 FCFA</span></p>
                <button class="invest-btn mt-6 bg-orange-500 text-white py-2 px-6 rounded-lg hover:scale-105"
                        onclick="redirectToPayment('MegaRig 7', 700000, '21 days', 1764000)">
                    Invest
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Fonction pour redirection dynamique
        function redirectToPayment(title, price, duration, returnAmount) {
            const paymentUrl = `payment.html?title=${encodeURIComponent(title)}&price=${encodeURIComponent(price)}&duration=${encodeURIComponent(duration)}&return=${encodeURIComponent(returnAmount)}`;
            window.location.href = paymentUrl;
        }

        // Fonction pour revenir à la page précédente
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
