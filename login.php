<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Gold</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
        <!-- Logo Section -->
        <div class="text-center mb-6">
            <img src="logo-placeholder.png" alt="Gold Logo" class="mx-auto mb-2">
            <p class="text-gray-500">Gold Logo</p>
        </div>
        <!-- Heading -->
        <h1 class="text-orange-500 text-2xl font-bold text-center mb-2">Login Up to Gold</h1>
        <p class="text-gray-600 text-center mb-8">Join our exclusive oil & gas rewards platform.</p>
        <!-- Login Form -->
        <form action="traitement_login.php" method="POST">
            <div class="mb-6">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com"
                        class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password"
                        class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>
        
                <button type="submit" class="bg-orange-500 text-white py-2 px-4 rounded-lg w-full">
                    Login 
                </button>
            </div>    
        </form>
        <!-- Registration Prompt -->
        <div class="mt-6 text-center">
            <p class="text-gray-600">Vous n'avez pas de compte ?</p>
            <a href="inscription.php" class="text-orange-500 font-medium hover:underline">Inscrivez-vous</a>
        </div>
    </div>
</body>
</html>
