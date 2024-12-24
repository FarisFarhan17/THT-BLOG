<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto flex items-center py-4 px-6">
            <h1 class="text-2xl font-bold">{Finsweet</h1>
            <div class="ml-auto flex items-center">
                <nav class="ml-4">
                    <ul class="flex space-x-6">
                        <li><a href="#" class="hover:text-gray-300">Home</a></li>
                        <li><a href="#" class="hover:text-gray-300">Blog</a></li>
                        <li><a href="#" class="hover:text-gray-300">About Us</a></li>
                        <li><a href="#" class="hover:text-gray-300">Contact us</a></li>
                    </ul>
                </nav>
                <a href="#" class="bg-white text-gray-800 px-4 py-2 hover:bg-gray-200 font-semibold ml-4">Subscribe</a>
            </div>
        </div>
    </header>

    <div class="flex items-center justify-center h-screen">
        <div class="bg-white shadow-lg rounded-lg p-8 w-96">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Welcome! <br>Please Sign In</h2>
            <form>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <button type="submit" class="w-full bg-yellow-500 text-black py-2 rounded hover:bg-yellow-600">Sign In</button>
            </form>
            <p class="text-center mt-4">Don't have an account? <a href="signup.blade.php" class="text-yellow-500">Sign Up</a></p>
        </div>
    </div>

    <footer class="bg-gray-900 text-white py-10">
        <div class="container mx-auto px-6 lg:px-20 text-center">
            <p>© 2024 Finsweet. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
