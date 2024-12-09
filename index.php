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
  <script src="js/Physics2DPlugin.min.js"></script> 
  <script src="js/MotionPathPlugin.min.js"></script> 
  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

  <link rel="stylesheet" href="css/main.css">


  <title>Portfolio</title>
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

  <div class="container mx-auto px-12 py-12 flex justify-center items-center">
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

<!-- Hero Section -->
<section class="hero">
  <div class="container mx-auto flex flex-col md:flex-row">
    <div class="col smallest flex-1">
      <h2 class="vertical-text">
        <span class="job-title">Web Developer</span>
        <div class="line"></div>  
        <span class="year">2024</span>
      </h2>
    </div>

    <div class="col mr-20 ml-20 middle flex-1 sm:flex-1.5 md:flex-2 lg:flex-1">
      <h1 class="greet">HELLO, <span class="rotated-border">R</span></h1>
      <p>It's Dixie Laput</p>
      <div class="socials greet">
        <a class="github greet" href="https://github.com" target="_blank">
          <img src="images/github-icon.svg" alt="GitHub" />
        </a>
        <a class="linkedin greet" href="https://linkedin.com" target="_blank">
          <img src="images/linked-icon.svg" alt="LinkedIn" />
        </a>
        <a class="twitter greet" href="https://twitter.com/yourusername" target="_blank">
          <img src="images/tw1.svg" alt="Twitter" />
        </a>
      </div>
      <p>dixiel@gmail.com</p>
      <hr />
      <p>Phone: 000-000-000</p>
      <hr />
      <div class="scroll-indicator">
        <div class="scroll-icon">↓</div>
        <p>Scroll Down</p>
      </div>
    </div>
    <div class="col w-full md:w-1/3 lg:w-1/4 mr-10">
  <img src="images/letsgooooo.png" alt="" class="w-320 h-320 object-cover border-0 shadow-none">
</div>
  </div>
</section>









<!-- Welcome Section -->
<div class="bg-[#01FFB4] mt-20 p-6 h-36 flex items-center justify-center w-full welcome scrollContainer">
  <div class="welcome_inner overflow-hidden relative w-full">
    <div class="welcome_part" id="scrollingText">
      <h1 id="welcomeNote" class="text-center">
        { Welcome To My Den }
      </h1>
    </div>
  </div>
</div>









<!-- Projects Section title section--> 
<div class="container mx-auto p-4" id="projects">
  <div class="flex m-5 pt-10 pl-6 pr-0 pb-0">
    <div class="flex flex-1  items-center projects-main-title">
      <h1 class="text-center md:text-7xl sm:text-2xl projects-main-title flex items-center">
        <img src="images/asterisk.png" alt="Project Icon" class="w-12 h-12 mr-2" />
        { Projects }
      </h1>
    </div>
    <div class="flex flex-1 justify-center items-start projects-main-info flex-col">
      <p class="text-center">As a Web Developer using modern designs to build visual identification for the current market. Check out my latest projects below! Each project reflects my commitment to quality and innovation.</p>
      <button class="text-black py-2 px-4 border-10 border-[#00FFDC] bg-[#00FFDC] rounded hover:bg-transparent hover:text-[#00FFDC] transition-colors mt-4">
        Let's Discuss
      </button>
    </div>
  </div>
</div>



<?php
require_once('includes/connect.php');
$query = 'SELECT id, name, image FROM projects ORDER BY name ASC LIMIT 1;';
$results = mysqli_query($connect,$query);
?>

<!-- Projects Section gallery section-->
<div class="container mx-auto p-4 text-white justify-between" id="project-gallery">
  <div class="flex mt-5 mb-0 ml-0 mr-0 pt-0 pb-0 w-4/5 md:w-3/4">
    <div class="flex-1 text-left">
      <h2 class="text-3xl md:text-3sxl font-bold ml-20" id="project-title"></h2>
    </div>

    <div class="flex-1 flex items-center justify-end">
      <button class="viewallproject mr-0">View All Projects</button>
    </div>
  </div>

  <!-- blank src connected to fetch -->
  <div class="flex mt-2 ml-5 mr-5 mb-0 p-6">
    <div class="flex flex-1 justify-center items-center project-gallery-left w-4/5 md:w-3/4 ml-10">
      <img id="project-img" src="" alt="Project Image" class="w-full h-auto rounded-lg shadow-lg project-img">
    </div>

    <!-- Arrows Navigation -->
    <div class="flex flex-col items-center w-1/5 md:w-1/5 mt-4 md:mt-0 project-gallery-right">
      <p class="text-gray-600 mb-2 date-published text-white mr-10">Date: January 2024</p>
      <div class="flex flex-col items-center mt-96">
        <button id="prev-arrow" class="mb-2 p-2 hover:bg-gray-300 mr-10">
          <img class="project-arrow-1 transform -rotate-90 w-7 h-7" src="images/arrowslim.svg" alt="previous arrow">
        </button>
        <button id="next-arrow" class="mb-0 p-2 hover:bg-gray-300 mr-10">
          <img class="project-arrow-1 transform rotate-90 w-7 h-7" src="images/arrowslim.svg" alt="next arrow">
        </button>
      </div>
    </div>
  </div>
</div>





  <div class="flex mt-0 mb-0 ml-0 mr-0 pt-0 pb-0  w-4/5 md:w-4/4">
    
    <!-- Project Title -->
    <div class="flex-1 text-left">
      <h2 class=" text-white text-2xl md:text-2xl font-regular ml-20">2024</h2>
    </div>

    <div class=" flex-1 flex items-center justify-end">
      <img src="images/right-circled.svg" alt="icon" class="w-4 h-4 mr-3 ">
      <button class="  text-white viewallproject mr-8">View Case Studies</button>
    </div>
  </div>
</div>


  <!-- renew services -->
<div class="container mx-auto px-4 py-8">
  <div class="m-10 grid grid-cols-1 sm:grid-cols-2 gap-8 text-white">
    <div>
      <h2 class="text-6xl font-semibold ">Our Service Expertise</h2> 
    </div>
    
    <div class="text-left">
      <p class="text-sm">
        Professional web development services are offered, designed to meet the unique needs of your business. Every project is approached with the goal of creating responsive, user-friendly websites that offer excellent functionality, performance, and visual appeal. With a focus on delivering the best solutions to drive your business forward, a range of services from custom design to ongoing support are provided.
      </p>
    </div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-16 ml-10 mr-10 text-white">
    <div class="text-center sm:text-left">
      <h3 class="text-xl font-semibold mt-4">(01)</h3>
      <hr class="my-2 border-t-2 border-gray-300 w-full mx-0 ml-0">
      <p class="mt-4 text-4xl font-semibold">UX/UI Designer</p>
      <p class="mt-4 text-sm">
        Creating intuitive user interfaces that enhance user interactions.
      </p>
      <p class="text-sm">
        Focusing on user needs to empower business and standout in market.
      </p>
    </div>
    

    <div class="text-center sm:text-left">
      <h3 class="text-xl font-semibold mt-4">(02)</h3> 
      <hr class="my-2 border-t-2 border-gray-300 w-full mx-0 ml-0">
      <p class="mt-4 text-4xl font-semibold">UX/UI Designer</p> 
      <p class="mt-4 text-sm">
        Focusing on personalized deliverables for web experience.
      </p>
      <p class="text-sm">
        Focusing on user needs to empower business and standout in market.
      </p>
    </div>
    
    <div class="text-center sm:text-left">
      <h3 class="text-xl font-semibold mt-4">(03)</h3> 
      <hr class="my-2 border-t-2 border-gray-300 w-full mx-0 ml-0">
      <p class="mt-4 text-4xl font-semibold">UX/UI Designer</p> 
      <p class="mt-4 text-sm">
        Ensuring optimal functionality and user-centered design.
      </p>
      <p class="text-sm">
        Focusing on user needs to empower business and standout in market.
      </p>
    </div>
  </div>
</div>





<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8 ml-10 ">
        <h2 class="  text-2xl md:text-6xl font-semibold text-[#00FFDC] text-left">How Can I Help You?<span class="text-lg">→</span></h2>
    </div>
    
    <div class="flex flex-col md:flex-row gap-8 ml-10 mr-10">
        <div class="md:w-1/2 text-lg text-white">
            <p>I can assist in improving user experience, optimizing backend performance, securing your website, and ensuring it scales with your goals.</p>
        </div>
        
        <div class="md:w-1/2">
            <div class="space-y-4">
                <div class="service-item">
                    <div class="flex items-center justify-between">
                        <p class="w-full text-left text-white py-2 uppercase hover:text-gray-300 cursor-pointer">Web Design</p>
                        <button class="text-white text-sm px-4 py-2 hover:bg-gray-700 cursor-pointer whitespace-nowrap flex items-center space-x-2">
                            <span>Read More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-up" viewBox="0 0 16 16">
                                <path d="M11.854 4.146a.5.5 0 0 1 0 .708L5.707 10H11a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.354-.854l6.646-6.646a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </button>
                    </div>
                    <hr class="my-2 border-t border-gray-300">
                </div>
                <div class="service-item">
                    <div class="flex items-center justify-between">
                        <p class="w-full text-left text-white py-2 uppercase hover:text-gray-300 cursor-pointer">Scripting</p>
                        <button class="text-white text-sm px-4 py-2 hover:bg-gray-700 cursor-pointer whitespace-nowrap flex items-center space-x-2">
                            <span>Read More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-up" viewBox="0 0 16 16">
                                <path d="M11.854 4.146a.5.5 0 0 1 0 .708L5.707 10H11a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.354-.854l6.646-6.646a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </button>
                    </div>
                    <hr class="my-2 border-t border-gray-300">
                </div>
                <div class="service-item">
                    <div class="flex items-center justify-between">
                        <p class="w-full text-left text-white py-2 uppercase hover:text-gray-300 cursor-pointer">Database</p>
                        <button class="text-white text-sm px-4 py-2 hover:bg-gray-700 cursor-pointer whitespace-nowrap flex items-center space-x-2">
                            <span>Read More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-up" viewBox="0 0 16 16">
                                <path d="M11.854 4.146a.5.5 0 0 1 0 .708L5.707 10H11a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.354-.854l6.646-6.646a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </button>
                    </div>
                    <hr class="my-2 border-t border-gray-300">
                </div>
                <div class="service-item">
                    <div class="flex items-center justify-between">
                        <p class="w-full text-left text-white py-2 uppercase hover:text-gray-300 cursor-pointer">User Interface</p>
                        <button class="text-white text-sm px-4 py-2 hover:bg-gray-700 cursor-pointer whitespace-nowrap flex items-center space-x-2">
                            <span>Read More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-up" viewBox="0 0 16 16">
                                <path d="M11.854 4.146a.5.5 0 0 1 0 .708L5.707 10H11a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.354-.854l6.646-6.646a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </button>
                    </div>
                    <hr class="my-2 border-t border-gray-300">
                </div>
                <div class="service-item">
                    <div class="flex items-center justify-between">
                        <p class="w-full text-left text-white py-2 uppercase hover:text-gray-300 cursor-pointer">Motion Graphics</p>
                        <button class="text-white text-sm px-4 py-2 hover:bg-gray-700 cursor-pointer whitespace-nowrap flex items-center space-x-2">
                            <span>Read More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-up" viewBox="0 0 16 16">
                                <path d="M11.854 4.146a.5.5 0 0 1 0 .708L5.707 10H11a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.354-.854l6.646-6.646a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </button>
                    </div>
                    <hr class="my-2 border-t border-gray-300">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <img src="your-image.jpg" alt="Website Design Image" class="w-full h-auto">
    </div>
</div>




<div class="container mx-auto p-4" id="tools">
  <div class="flex m-5 pt-0 pl-6 pr-0 pb-0">
    <div class="flex flex-1 items-center tools-main-title">
      <h1 class="text-center md:text-7xl sm:text-2xl text-[#00FFDC] flex items-center">
        <img src="images/asterisk.png" alt="Tools Icon" class="w-12 h-12 mr-2" />
        { Tools Used }
      </h1>
    </div>
  </div>

  <!-- Row of 7 Images -->
  <div class="flex justify-between space-x-4 mt-20 ml-10 mr-10 mb-3">
    <img src="images/tool2.svg" alt="Tool 1" class="w-24 h-24 object-contain ml-10 tools-border" />
    <img src="images/tool3.svg" alt="Tool 2" class="w-24 h-24 object-contain mt-20 tools-border" />
    <img src="images/tool4.svg" alt="Tool 3" class="w-24 h-24 object-contain tools-border" />
    <img src="images/tool5.svg" alt="Tool 4" class="w-24 h-24 object-contain mt-20 tools-border" />
    <img src="images/tool6.svg" alt="Tool 5" class="w-24 h-24 object-contain tools-border" />
    <img src="images/tool7.svg" alt="Tool 6" class="w-24 h-24 object-contain mt-20 tools-border" />
    <img src="images/tool2.svg" alt="Tool 7" class="w-24 h-24 object-contain tools-border" />
  </div>
</div>

<!-- About Section -->
<div class="container mx-auto p-4" id="about">
  <div class="flex flex-col md:flex-row  m-5 p-6 h-auto">
    <div class="text-white md:w-1/2 flex items-center justify-center flex-col">
      <h1 class="text-center">About</h1>
      <p>
        Bear claw jujubes dessert apple pie cookie jujubes sugar plum jelly beans apple pie. Powder caramels croissant marshmallow danish. Soufflé pie muffin oat cake chupa chups sugar plum toffee jujubes sesame snaps. Cake carrot cake dessert gummies shortbread danish chocolate bar jujubes. Sweet roll halvah soufflé toffee jelly beans jelly beans shortbread oat cake apple pie. Brownie macaroon carrot cake sugar plum donut muffin fruitcake.
      </p>
    </div>
    <div class="md:w-1/2 flex items-center justify-center">
      <img src="images/woman-8853114_1920.jpg" alt="Your Image" class="responsive-image" />
    </div>
  </div>
</div>

<!-- Demo Reel Section -->
<div class="container mx-auto flex flex-col items-center  p-8" id="demo-reel">
  <!-- Title Effect -->
  <div id="titleEffect1" class="text-6xl text-white p-8 flex flex-row">
    <p>D</p><p>E</p><p>M</p><p>O</p><p>R</p><p>E</p><p>E</p><p>L</p>
  </div>


  <div class="bg-[#00A977] flex flex-col items-center w-full max-w-screen-2xl mt-2 mb-2 p-20 rounded-lg overflow-hidden --plyr-audio-control-background-hover">
    <div id="player-container" class="relative w-full max-w-7xl">
      <video controls preload="metadata" poster="images/placeholder.jpg" class="w-full">
        <source src="video/Laput_dixie_demoreel.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <p>Oops, something went wrong. You may be using an outdated browser or have JavaScript disabled.</p>
      </video>

      <!-- Video controls -->
      <div class="video-controls hidden absolute bottom-0 w-full bg-gradient-to-t from-black via-transparent to-transparent p-4 flex justify-between items-center">
        <button id="play-button" class="text-white"><i class="fa fa-play-circle-o text-3xl"></i></button>
        <button id="pause-button" class="text-white"><i class="fa fa-pause-circle-o text-3xl"></i></button>
        <button id="stop-button" class="text-white"><i class="fa fa-stop-circle-o text-3xl"></i></button>
        <i class="fa fa-volume-up text-white text-3xl"></i>
        <input type="range" id="change-vol" step="0.05" min="0" max="1" value="1" class="w-1/3 mx-2">
        <button id="full-screen" class="text-white text-3xl"><i class="fa fa-arrows-alt"></i></button>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="container mx-auto p-4" id="contact">
  <div class="flex flex-col md:flex-row  m-5 p-6 h-auto">
    <div class="md:w-1/2 flex items-start justify-start flex-col text-left text-white">
      <h1 class="text-center md:text-left">Contact</h1>
      <p>
        Pie soufflé pudding sesame snaps cupcake lemon drops chocolate cake soufflé. Cheesecake apple pie candy canes fruitcake cake.
      </p>
      <div class="contact-details">
        <h2>Address</h2>
        <p>London, Ontario, Canada.</p>
        <h2>Phone</h2>
        <p>000-000-000</p>
        <h2>Email</h2>
        <p>dixiemarielaput1@gmail.com</p>
      </div>
    </div>
    
    <div class="md:w-1/2 flex items-center justify-center">
  <form action="contact.php" method="POST" class="contact-form bg-contact-form">
    <h2>Contact Form</h2>


    <label for="first-name">First Name</label>
    <input type="text" id="first-name" name="first_name" required class="form-input" placeholder="Your First Name" />

    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone" required class="form-input" placeholder="Your Phone Number" />
    

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required class="form-input" placeholder="Your Email" />

    <label for="message">Message</label>
    <textarea id="message" name="comments" required class="form-input" placeholder="Your Message"></textarea>
    
    <button type="submit" class="submit-button">Send Message</button>
  </form>
</div>

</div>




<!-- Footer Section -->
<footer>
  <div class="container mx-auto p-4">
    <div class="m-5 p-6 flex flex-col md:flex-row">
      <div class="md:w-1/3 flex flex-col">
        <h2 class="title-footer">Sitemap</h2>
        <ul>
          <li>Home</li>
          <li>About</li>
          <li>Showreel</li>
          <li>Portfolio</li>
          <li>Contact</li>
        </ul>
      </div>
      <div class="md:w-1/3 flex flex-col">
        <h2 class="title-footer">Socials</h2>
        <ul>
          <li>GitHub</li>
          <li>LinkedIn</li>
          <li>Twitter</li>
        </ul>
      </div>
      <div class="md:w-1/3 flex flex-col items-end relative footer-right-info">
        <h2 class="text-3xl"><span class="text-details">WANT TO</span><br> <span class="text-details">WORK WITH</span><br><span id="email-footer">dixiemarielaput1@gmail.com</span> <span class="text-details">ME?</span></h2>  
      </div>
    </div>
    <hr class="my-4 border-white text-white" />
    <p class="footer-copyright text-center text-white text-sm ">© Dixie Laput. 2024</p>
  </div>
</footer>

<script src="js/main.js"></script>



</body>
</html>