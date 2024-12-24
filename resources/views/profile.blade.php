<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
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

    <main class="flex-grow container mx-auto px-6 lg:px-20 py-10">
        <h2 class="text-3xl font-bold text-left text-gray-800 mb-6">Profile</h2>
        <div class="flex items-left justify-left">
            <img src="https://avatars.githubusercontent.com/u/155451766?v=4" alt="Profile Picture" class="w-24 h-24 rounded-full shadow-lg">
            <div class="ml-4">
                <h3 class="text-xl font-bold text-purple-900">Andrew Jonson</h3>
                <p class="text-gray-600">Email: andrew.jonson@example.com</p>
                <!-- Social Media Icons -->
                <div class="flex space-x-4 mt-2">
                    <a href="#" class="text-gray-400">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400">
                        <i class="fab fa-twitter"></i> 
                    </a>
                    <a href="#" class="text-gray-400">
                        <i class="fab fa-instagram"></i> 
                    </a>
                    <a href="#" class="text-gray-400">
                        <i class="fab fa-linkedin-in"></i> 
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-6">
            <h4 class="text-lg font-bold">About Me</h4>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quibusdam et distinctio voluptas, eius natus aperiam cupiditate, quae quas ipsam consequuntur quis id vero nobis mollitia deserunt alias beatae doloremque?</p><br>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quibusdam et distinctio voluptas, eius natus aperiam cupiditate, quae quas ipsam consequuntur quis id vero nobis mollitia deserunt alias beatae doloremque?</p><br>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quibusdam et distinctio voluptas, eius natus aperiam cupiditate, quae quas ipsam consequuntur quis id vero nobis mollitia deserunt alias beatae doloremque?</p><br>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quibusdam et distinctio voluptas, eius natus aperiam cupiditate, quae quas ipsam consequuntur quis id vero nobis mollitia deserunt alias beatae doloremque?</p>
        </div>
        <div class="mt-6 text-center">
            <a href="edit-profile.blade.php" class="bg-yellow-500 text-black px-6 py-3 rounded font-semibold hover:bg-yellow-600">Edit Profile</a>
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-10">
    <div class="container mx-auto px-6 lg:px-20">
      <div class="flex flex-col lg:flex-row justify-between items-center">
        <h1 class="text-2xl font-bold mb-6 lg:mb-0">{Finsweet</h1>
        <nav class="flex space-x-6">
          <a href="#" class="hover:text-gray-400">Home</a>
          <a href="#" class="hover:text-gray-400">Blog</a>
          <a href="#" class="hover:text-gray-400">About us</a>
          <a href="#" class="hover:text-gray-400">Contact us</a>
          <a href="#" class="hover:text-gray-400">Privacy Policy</a>
        </nav>
      </div>
      <div class="mt-10 text-center lg:text-left">
        <div class="bg-gray-800 p-24 flex items-center">
          <p class="text-white text-2xl font-bold mr-4">Subscribe to our newsletter to get the latest updates and news</p>
          <input type="email" placeholder="Enter Your Email" class="p-3 w-full lg:w-auto border-2 border-black bg-gray-800 text-black placeholder-black mr-4">
          <button class="bg-yellow-500 text-black px-6 py-3 font-semibold">Subscribe</button>
        </div>
        <div class="flex justify-between items-center mt-6">
          <p class="text-gray-400">Finstreet 118 2561 Fintown<br>hello@finsweet.com 020 7993 2905</p>
          
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-400">
              <i class="fab fa-twitter"></i> 
            </a>
            <a href="#" class="text-gray-400">
              <i class="fab fa-instagram"></i> 
            </a>
            <a href="#" class="text-gray-400">
              <i class="fab fa-linkedin-in"></i> 
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>