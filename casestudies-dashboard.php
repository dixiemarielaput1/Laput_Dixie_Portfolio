<?php
// casestudy.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/18.6.4/Tween.min.js"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link rel="stylesheet" href="css/main.css">

    <title>Case Study Dashboard</title>
</head>

<body class="bg-black">


<!--navbar section-->
<nav class="bg-black shadow">
  <div class="block md:hidden flex items-center justify-between w-full pt-4 pl-2">
      <button id="menu-icon" class="focus:outline-none w-10 h-10 text-white">
          <i class="fas fa-bars text-white"></i>
      </button>

      <div class="flex-1 flex justify-center">
          <img src="images/dl.svg" alt="logo portfolio" class="w-16 h-16 md:w-12 md:h-12 mr-14"> 
      </div>
  </div>

  <div class="container mx-auto  flex justify-center items-center">
    <ul id="menu" class="hidden md:flex md:space-x-20 md:justify-center md:p-4 md:bg-black items-center">
          <li><a href="index.php" class="text-white hover:text-[#00FFDC]">Home</a></li>
          <li><a href="#about" class="text-white hover:text-[#00FFDC]">About</a></li>
          <li><a href="portfolio.php" class="text-white hover:text-[#00FFDC]">Portfolio</a></li>
          <img src="images/dl.svg" alt="logo portfolio" class="w-16 h-16">
          <li><a href="casestudies-dashboard.php" class="text-white hover:text-[#00FFDC]">Case Studies</a></li>
          <li><a href="#demo-reel" class="text-white hover:text-[#00FFDC]">Showreel</a></li>
          <li><a href="#contact" class="text-white hover:text-[#00FFDC]">Contact</a></li>
      </ul>
  </div>
</nav>
<div id="navbar-mobile" class="hidden md:hidden">
  <ul class="flex flex-col space-y-2 p-4 bg-black shadow-md items-center">
      <li><a href="#" class="block text-white hover:text-[#00FFDC]">Home</a></li>
      <li><a href="#" class="block text-white hover:text-[#00FFDC]">About</a></li>
      <li><a href="#" class="block text-white hover:text-[#00FFDC]">Portfolio</a></li>
      <li><a href="#" class="block text-white hover:text-[#00FFDC]">Case Studies</a></li>
      <li><a href="#" class="block text-white hover:text-[#00FFDC]">Showreel</a></li>
      <li><a href="#" class="block text-white hover:text-[#00FFDC]">Contact</a></li>
  </ul>
</div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-white p-4">
        <div class="p-4 mr-20flex items-start">
        <h2 class="text-6xl font-semibold mr-2">Case Studies</h2>
        <img src="images/sparkle.png" alt="Sparkle Icon" class="w-8 h-8">
        </div>
        <div class="p-4 mr-20">
        <h2 class="text-2xl font-semibold">Introduction of Available Case Studies</h2>
        <p class="mt-4 text-white">
            Collection of case studies covers various industries and provides in-depth insights into different
            challenges and solutions. Each case study presents detailed research, findings, and actionable takeaways to
            help understand and grasp challenges.
        </p>
        </div>
    </div>

    
    <div class="case-study-gallery grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4 mt-10 mx-4 sm:mx-8 md:mx-28">
    <div class="flex flex-col items-start con-case-dash mb-6">
        <img src="images/project1.png" alt="Image 1" class="w-full h-auto mb-4">
        <h1 class="text-[#00FFDC] text-lg font-normal mb-2 text-left">01</h1>
        <hr class="w-full border-t-2 border-gray-300 mb-6">
        <h2 class="text-[#00FFDC] text-3xl font-normal mb-2 text-left">Case Study 1 - Earbuds Promo Page </h2>
        <p class="text-white text-base text-left">This project involved creating a responsive promo page for JBL Earbuds, showcasing their features and benefits. Using HTML, CSS, and JavaScript, I developed a mobile-first design with media queries for responsiveness. </p>
        <a href="http://localhost/Laput_Dixie_Portfolio/casestudies.php?id=1" class="border-2 border-white text-white bg-black hover:bg-transparent hover:text-gray-500 hover:border-gray-500 px-6 py-2 mt-4 block text-lg text-center transition-all duration-300 rounded-lg">Read More</a>
    </div>

    <div class="flex flex-col items-start con-case-dash mb-6">
        <img src="images/project2.png" alt="Image 2" class="w-full h-auto mb-4">
        <h1 class="text-[#00FFDC] text-lg font-normal mb-2 text-left">02</h1>
        <hr class="w-full border-t-2 border-gray-300 mb-6">
        <h2 class="text-[#00FFDC] text-3xl font-normal mb-2 text-left">Case Study 2 - Billy Beer Rebranding Website</h2>
        <p class="text-white text-base text-left">The redesign of the Billy Beer Website aimed to modernize the brand’s online presence while retaining its iconic legacy.</p>
        <a href="http://localhost/Laput_Dixie_Portfolio/casestudies.php?id=2" class="border-2 border-white text-white bg-black hover:bg-transparent hover:text-gray-500 hover:border-gray-500 px-6 py-2 mt-4 block text-lg text-center transition-all duration-300 rounded-lg">Read More</a>
    </div>

    <div class="flex flex-col items-start con-case-dash mb-6">
        <img src="images/project3.png" alt="Image 3" class="w-full h-auto mb-4">
        <h1 class="text-[#00FFDC] text-lg font-normal mb-2 text-left">03</h1>
        <hr class="w-full border-t-2 border-gray-300 mb-6">
        <h2 class="text-[#00FFDC] text-3xl font-normal mb-2 text-left">Case Study 3 - Music Mixer</h2>
        <p class="text-white text-base text-left">Music Mixer is a web application that shows JS Functionality of using music instruments to play into the mixer.</p>
        <a href="http://localhost/Laput_Dixie_Portfolio/casestudies.php?id=3" class="border-2 border-white text-white bg-black hover:bg-transparent hover:text-gray-500 hover:border-gray-500 px-6 py-2 mt-4 block text-lg text-center transition-all duration-300 rounded-lg">Read More</a>
    </div>
</div>



<footer>
  <div class="container mx-auto p-4">
    <div class="ml-5 mr-5 mt-0 p-6 flex flex-col md:flex-row">
      
     
      <div class="md:w-1/3 flex flex-col mt-0 mb-5 text-center md:text-left">
        <h2 class="title-footer text-[#00FFDC]">Sitemap</h2>
        <ul>
          <li><a href="index.php" class=" hover:text-[#00FFDC]">Home</a></li>
          <li><a href="#about" class=" hover:text-[#00FFDC]">About</a></li>
          <li><a href="#demo-reel" class=" hover:text-[#00FFDC]">Showreel</a></li>
          <li><a href="portfolio.php" class=" hover:text-[#00FFDC]">Portfolio</a></li>
          <li><a href="#contact" class=" hover:text-[#00FFDC]">Contact</a></li>
        </ul>
      </div>

      <div class="md:w-1/3 flex flex-col mt-0 mb-5 text-center md:text-left">
        <h2 class="title-footer text-[#00FFDC]">Socials</h2>
        <ul>
          <li><a href="https://github.com/dixiemarielaput1" class=" hover:text-[#00FFDC]" target="_blank">GitHub</a></li>
          <li><a href="https://www.linkedin.com/in/dixie-m/" class=" hover:text-[#00FFDC]" target="_blank">LinkedIn</a></li>
          <li><a href="https://www.instagram.com/dixiemarielaput/" class=" hover:text-[#00FFDC]" target="_blank">Instagram</a></li>
        </ul>
      </div>


      <div class="md:w-1/3 flex flex-col text-center md:text-left">
        <h2 class="text-4xl text-white mt-0 mb-5">WANT TO WORK WITH ME?</h2>  
        <h3 class="text-2xl text-[#00FFDC]">dixiemarielaput1@gmail.com</h3>  
      </div>

    </div>

    <hr class="my-4 border-white text-white" />
    
    <p class="footer-copyright text-center text-white text-sm ">© Dixie Laput. 2024</p>
  </div>
</footer>

    <script src="js/main.js"></script>
</body>

</html>
