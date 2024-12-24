<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BlogPost</title>
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

  <main class="bg-white py-10">
    <article class="p-6 mx-auto">
      <div class="flex items-center mb-4 justify-center">
        <img src="https://avatars.githubusercontent.com/u/155451766?v=4" alt="Profile Picture" class="w-12 h-12 rounded-full mr-4">
        <div class="text-left">
          <h2 class="text-xl font-bold text-purple-900">Andrew Jonson</h2>
          <p class="text-gray-600">Posted on 27th January 2022</p>
        </div>
      </div>
      <h2 class="text-3xl font-bold text-center mt-2">Step-by-step guide to choosing great font pairs</h2>
      <p class="mt-2 text-center"><span class="font-bold">🚀 Startup</span></p>
      <img src="https://th.bing.com/th/id/R.ae0e24b3dab05258b7b7c351db57f814?rik=RhGhLiU2EQB3eA&pid=ImgRaw&r=0" alt="Image description" class="w-full mt-8">

      <div class="max-w-2xl mx-auto">
      <h2 class="text-3xl font-bold mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <p class="mt-6 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec scelerisque. Sed viverra mauris in aliquam sem. At risus viverra adipiscing at in tellus. Sociis natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo. Neque egestas congue quisque egestas diam. Risus in hendrerit gravida rutrum quisque non.</p>

        <p class="mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec scelerisque. Sed viverra mauris in aliquam sem. At risus viverra adipiscing at in tellus. Sociis natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo. Neque egestas congue quisque egestas diam. Risus in hendrerit gravida rutrum quisque non.</p>
        <h2 class="text-3xl font-bold mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <ul class="list-disc pl-5 mt-4">
          <li>Lorem ipsum dolor sit amet</li>
          <li>Non blandit massa enim nec scelerisque</li>
          <li>Neque egestas congue quisque egestas</li>
        </ul>

        <p class="mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec scelerisque. Sed viverra mauris in aliquam sem. At risus viverra adipiscing at in tellus. Sociis natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo. Neque egestas congue quisque egestas diam. Risus in hendrerit gravida rutrum quisque non.</p>
      </div>
      <div class="mt-6"></div>

      <section class="mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">What to read next</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-white shadow-lg overflow-hidden">
            <img src="https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/video/H5BOVymHiplawzr0/videoblocks-funny-portrait-of-a-disheveled-business-woman-tired-from-work_bfbldj5ld_thumbnail-1080_01.png" alt="Post Image" class="w-full h-48 object-cover">
            <div class="p-4">
              <p class="text-sm mb-2">By<span class="text-purple-900 font-bold"> John Doe</span> | Aug 23, 2021</p>
              <h3 class="text-lg font-bold text-gray-800 mb-2">A UX Case Study Creating a Studious Environment for Students</h3>
              <p class="text-gray-600">Socios natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo.</p>
            </div>
          </div>

          <div class="bg-white shadow-lg overflow-hidden">
            <img src="https://th.bing.com/th/id/OIP.fpNfjb-mP2Xi3qbH1sY4PAHaEh?w=900&h=550&rs=1&pid=ImgDetMain" alt="Post Image" class="w-full h-48 object-cover">
            <div class="p-4">
                <p class="text-sm mb-2">By<span class="text-purple-900 font-bold"> John Doe</span> | Aug 23, 2021</p>
              <h3 class="text-lg font-bold text-gray-800 mb-2">A UX Case Study Creating a Studious Environment for Students</h3>
              <p class="text-gray-600">Socios natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo.</p>
            </div>
          </div>

          <div class="bg-white shadow-lg overflow-hidden">
            <img src="https://activebeat.com/wp-content/uploads/2016/06/shutterstock_1679841196.jpg" alt="Post Image" class="w-full h-48 object-cover">
            <div class="p-4">
                <p class="text-sm mb-2">By<span class="text-purple-900 font-bold"> John Doe</span> | Aug 23, 2021</p>
              <h3 class="text-lg font-bold text-gray-800 mb-2">A UX Case Study Creating a Studious Environment for Students</h3>
              <p class="text-gray-600">Socios natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo.</p>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>

  <section class="bg-white py-10 text-center">
    <div class="container mx-auto px-6 lg:px-20">
      <h2 class="text-3xl font-bold text-gray-800">Join our team to be a part of our story</h2>
      <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
      <a href="#" class="mt-6 inline-block bg-yellow-500 text-black px-6 py-3 rounded font-semibold hover:bg-yellow-600">Join Now</a>
    </div>
  </section>

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