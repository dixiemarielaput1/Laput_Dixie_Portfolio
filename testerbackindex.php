<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script src="https://cdn.tailwindcss.com" defer></script>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollToPlugin.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/18.6.4/Tween.min.js" defer></script>
  
  <script src="js/Physics2DPlugin.min.js"></script> 
  <script src="js/MotionPathPlugin.min.js" defer></script> 
  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

  <link rel="stylesheet" href="css/main.css">


  <title>Portfolio</title>
</head>
<div class="bg-black  bg-noise">

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

  <div class="container mx-auto px-2 py-2 flex justify-center items-center">
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

    <div class="col mr-20 ml-20 middle flex-1 sm:flex-1.5 md:flex-2 lg:flex-1 con-intro">
    <h1 class="greet floaters text-5xl sm:text-6xl md:text-7xl lg:text-7xl mb-5 flex items-center justify-center sm:text-center">

<img src="images/geo.svg" alt="Image" id="rotating-image" class="w-16 h-16 sm:w-20 sm:h-20 md:w-10 md:h-24 lg:w-24 lg:h-24 mr-3 sm:mr-4" />

HELLO,  

<img src="images/oct.svg" alt="Image" id="rotated-border" class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 lg:w-10 lg:h-10 ml-3 sm:ml-4" />
</h1>
      <p class="name-hero text-6xl sm:text-7xl md:text-8xl lg:text-8xl">It's <span class="text-[#00FFDC]"> Dixie Laput</span></p>
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
      <p class="robot-text" id="email">dixiemarielaput1@gmail.com</p>
      <hr class="border-t border-[#00FFDC] liner">
      <p class="robot-text" id="phone">Phone: (+1) 519-639-7794</p>
      <hr class="border-t border-[#00FFDC] liner">
      <div class="scroll-indicator">
        <div class="scroll-icon">↓</div>
        <p>Scroll Down</p>
      </div>
    </div>
    <div class="col w-full md:w-1/2 lg:w-1/2 mr-2">
  <img src="images/223.png" alt="" class="w-full max-w-lg h-auto object-cover border-0 shadow-none">
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




<div class="container mx-auto p-4" id="projects">
  <div class="flex flex-col md:flex-row m-5 pt-5 pl-6 pr-0 pb-0">

    <div class="flex flex-1 items-center justify-center md:justify-start projects-main-title mb-4 md:mb-0">
    <h1 class="text-center sm:text-7xl md:text-7xl text-[#00FFDC] projects-main-title flex items-center">
    <img src="images/asterisk.png" alt="Project Icon" class="w-12 h-12 mr-2" />
    { Projects }
</h1>
    </div>
    
  
    <div class="flex flex-1 justify-center items-center md:items-start projects-main-info flex-col">
      <p class="text-center md:text-left web-dev-intro text-sm md:text-4xl">
        As a Web Developer using modern designs to build visual identification for the current market. Check out my latest projects below! Each project reflects my commitment to quality and innovation.
      </p>
      <button class="text-black py-2 px-4 border-10 border-[#00FFDC] bg-[#00FFDC] rounded hover:bg-transparent hover:text-[#00FFDC] transition-colors mt-4">
        Let's Discuss
      </button>
    </div>
  </div>
</div>





<?php
require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT id, name, image FROM projects ORDER BY id ASC;');
$stmt->execute();
?>

<section class="project-con">
    <div id="gallery-container">
        <?php
        $index = 0; // Initialize index for slides
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
            // Echo each project as a slide, hide all except the first one
            echo '<div class="gallery-slide ' . ($index === 0 ? '' : 'hidden') . '">
                    <h3>' . $row['name'] . '</h3>
                    <a href="project_detail.php?id=' . $row['id'] . '">
                        <img class="thumbnail" src="images/' . $row['image'] . '" alt="Project Thumbnail">
                    </a>
              
                  </div>';
            $index++;
        }
        ?>
    </div>

    <br>

    <!-- Next and Previous buttons to navigate through the gallery -->
    <button id="prev-btn">Previous</button>
    <button id="next-btn">Next</button>
</section>

<?php $stmt = null; ?>



  <div class="flex mt-2 ml-0 mr-0 mb-0 p-0 justify-center">
    <div class="w-full max-w-6xl"> 
      <img id="project-img" src="" alt="Project Image" class="w-full h-auto rounded-lg shadow-lg">
    </div>
  </div>


  <div class="flex flex-col items-center w-full mt-4 project-gallery-right">
    <!-- You can add a date here if needed -->
  </div>
</div>


<div class="container mx-auto pr-4 pl-4 pt-0 pb-0 text-white" id="case-studies-section">
  <div class="flex mt-0 mb-0 pt-0 pb-0 w-full max-w-6xl mx-auto justify-between items-center">
 
    <div class="flex-1 text-left">
      <h2 class="text-white text-2xl md:text-2xl font-regular sm:w-auto">2024</h2> 
    </div>

    <!-- View Case Studies Button -->
    <div class="flex items-center justify-end space-x-4 sm:space-x-2 ">
      <img src="images/right-circled.svg" alt="icon" class="w-5 h-5 mr-3 sm:mr-1">
      <button class="viewallproject text-white sm:mr-2 w-full sm:w-auto">View Case Studies</button> 
    </div>

  </div>
</div>




  <!-- renew services -->
<div class="container mx-auto px-4 py-8">
  <div class="mt-10 mb-10 grid grid-cols-1 sm:grid-cols-2 gap-8 text-white">
      <div class="flex  items-start space-x-4">
      <img id="service-icon"  src="images/icons8-geometry.svg" alt="Image Description" class="w-16 h-auto"/>
      <h2 class="text-6xl font-semibold services-title">Services</h2>
    

    </div>
        
    <div class="text-left">
    <p class="lg:text-xl service-text sm:ml-16 sm:justify-content ">
        Professional web development services are offered, designed to meet the unique needs of your business. Every project is approached with the goal of creating responsive, user-friendly websites that offer excellent functionality. 
      </p>
    </div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-16 ml-10 mr-10 text-white">
    <!-- First Item -->
    <div class="text-center sm:text-left">
      <h3 class="text-xl font-semibold mt-8">(01)</h3> 
      <hr class="my-4 border-t-2 border-gray-300 w-full mx-0 ml-0"> 
      <p class="service-offer mt-6 text-5xl font-semibold leading-relaxed text-[#00FFDC]">UX/UI Design</p> 
      <p class="mt-4 text-lg leading-relaxed services-details">
        Creating intuitive user interfaces that enhance user interactions.
      </p>
      <p class="text-lg leading-relaxed services-details">
        Focusing on user needs to empower business and standout in market.
      </p>
    </div>
  
    <!-- Second Item -->
    <div class="text-center sm:text-left">
      <h3 class="text-xl font-semibold mt-8">(02)</h3> 
      <hr class="my-4 border-t-2 border-gray-300 w-full mx-0 ml-0"> 
      <p class="service-offer mt-6 text-5xl font-semibold leading-relaxed text-[#00FFDC]">Database</p> 
      <p class="mt-4 text-lg leading-relaxed services-details">
        Focusing on personalized deliverables for web experience.
      </p>
      <p class="text-lg leading-relaxed services-details">
        Focusing on user needs to empower business and standout in market.
      </p>
    </div>
  
    <!-- Third Item -->
    <div class="text-center sm:text-left">
      <h3 class="text-xl font-semibold mt-8">(03)</h3> 
      <hr class="my-4 border-t-2 border-gray-300 w-full mx-0 ml-0"> 
      <p class="service-offer mt-6 text-5xl font-semibold leading-relaxed text-[#00FFDC]">Development</p> 
      <p class="mt-4 text-lg leading-relaxed services-details">
        Ensuring optimal functionality and user-centered design.
      </p>
      <p class="text-lg leading-relaxed services-details">
        Focusing on user needs to empower business and standout in market.
      </p>
    </div>
  </div>

  <div class="mt-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 h-auto">
  
  <!-- First Column -->
  <div class="flex justify-center items-start">
    <img src="images/vert1.jpg" alt="Website Design Image" class="w-full h-auto object-cover rounded-lg mt-16" />
  </div>

  <!-- Second Column -->
  <div class="flex justify-center items-center">
    <img src="images/mod.png" alt="Website Design Image" class="w-full h-auto object-cover rounded-lg mt-16" />
  </div>

</div>












  <div class="container mx-auto px-4 py-8 mt-0">
    <div class="text-center mb-8 ml-10">
    <h2 class="how-text  sm:text-5xl md:text-6xl font-semibold text-[#00FFDC] text-left flex items-center">
  How Can I Help You? 
  <img src="images/arrowdes.svg" alt="Arrow" class="text-lg w-16 ml-10 sm:" />
</h2>
    </div>
    
    <div class="flex flex-col md:flex-row gap-8 ml-10 mr-10">
        <div class="md:w-1/2 text-lg text-white  center-al">
            <p class="assist-test "> I can assist in improving user experience, optimizing backend performance, securing your website, and ensuring it scales with your goals. Whether it's designing an intuitive interface or fine-tuning performance for faster load times, I focus on every detail that can help your website succeed.</p>
        </div>
        
        <div class="md:w-1/2">
            <div class="space-y-4">
                <!-- Web Design -->
                <div class="service-item text-[#00FFDC]">
                    <div class="flex items-center justify-between ">
                        <p class="list-help w-full text-left text-[#00FFDC] py-2 uppercase hover:text-gray-300 cursor-pointer text-2xl ">Web Design</p> 
                        <button class="text-white text-sm px-4 py-2 hover:bg-gray-700 cursor-pointer whitespace-nowrap flex items-center space-x-2">
                            <span>Read More</span>
                            <img src="images/icons8-arrow.svg" alt="White Arrow" class="rotate-[220deg]" width="16" height="16" />

                        </button>
                    </div>
                    <hr class="my-2 border-t border-gray-300">
                </div>

                <!-- Scripting -->
                <div class="service-item">
                    <div class="flex items-center justify-between">
                        <p class="list-help w-full text-left text-[#00FFDC] py-2 uppercase hover:text-gray-300 cursor-pointer text-2xl">Scripting</p> 
                        <button class="text-white text-sm px-4 py-2 hover:bg-gray-700 cursor-pointer whitespace-nowrap flex items-center space-x-2">
                            <span>Read More</span>
                            <img src="images/icons8-arrow.svg" alt="White Arrow" class="rotate-[220deg]" width="16" height="16" />

                        </button>
                    </div>
                    <hr class="my-2 border-t border-gray-300">
                </div>

                <!-- Database -->
                <div class="service-item">
                    <div class="flex items-center justify-between">
                        <p class=" list-help w-full text-left text-[#00FFDC] py-2 uppercase hover:text-gray-300 cursor-pointer text-2xl">Database</p> 
                        <button class="text-white text-sm px-4 py-2 hover:bg-gray-700 cursor-pointer whitespace-nowrap flex items-center space-x-2">
                            <span>Read More</span>
                            <img src="images/icons8-arrow.svg" alt="White Arrow" class="rotate-[220deg]" width="16" height="16" />

                        </button>
                    </div>
                    <hr class="my-2 border-t border-gray-300">
                </div>

                <!-- User Interface -->
                <div class="service-item">
                    <div class="flex items-center justify-between">
                        <p class=" list-help w-full text-left text-[#00FFDC] py-2 uppercase hover:text-gray-300 cursor-pointer text-2xl">User Interface</p> 
                        <button class="text-white text-sm px-4 py-2 hover:bg-gray-700 cursor-pointer whitespace-nowrap flex items-center space-x-2">
                            <span>Read More</span>
                            <img src="images/icons8-arrow.svg" alt="White Arrow" class="rotate-[220deg]" width="16" height="16" />

                        </button>
                    </div>
                    <hr class="my-2 border-t border-gray-300">
                </div>

                <!-- Motion Graphics -->
                <div class="service-item">
                    <div class="flex items-center justify-between">
                        <p class=" list-help w-full text-left text-[#00FFDC] py-2 uppercase hover:text-gray-300 cursor-pointer text-2xl">Motion Graphics</p> 
                        <button class="text-white text-sm px-4 py-2 hover:bg-gray-700 cursor-pointer whitespace-nowrap flex items-center space-x-2">
                            <span>Read More</span>
                            <img src="images/icons8-arrow.svg" alt="White Arrow" class="rotate-[220deg]" width="16" height="16" />

                        </button>
                    </div>
                    <hr class="my-2 border-t border-gray-300">
                </div>
            </div>
            
        </div>
    </div>

    
</div>





<div class="container mx-auto p-4" id="tools">
<div class="flex m-5 pt-0 pl-6 pr-0 pb-0">
  <div class="flex flex-1 items-center tools-main-title">
    <h1 class=" set-tools-text md:text-7xl sm:text-2xl text-[#00FFDC] flex items-center">
      <img src="images/saw.svg" alt="Tools Icon" class="sm:w-12 sm:h-12 w-24 h-24 lg:w-24 lg:h-24 md:w-24 md:h-24 mr-2 tool" />
      { Tools Used }
    </h1>
  </div>
</div>
  </div>


<div class="flex flex-wrap justify-center ml-40">
  <img src="images/tool2.svg" alt="Tool 1" class="lg:ml-32 lg:mr-32 lg:w-24 lg:h-24 object-contain tools-border sm:ml-12 sm:mr-12 sm:w-12 sm:h-12 md:m-0 md:h-16 md:w-16" />
  <img src="images/tool3.svg" alt="Tool 2" class="lg:ml-32 lg:mr-32 lg:w-24 lg:h-24 object-contain tools-border sm:ml-12 sm:mr-12 sm:w-12 sm:h-12 md:m-0 md:h-16 md:w-16" />
  <img src="images/tool4.svg" alt="Tool 3" class="lg:ml-32 lg:mr-32 lg:w-24 lg:h-24 object-contain tools-border sm:ml-12 sm:mr-12 sm:w-12 sm:h-12 md:m-0 md:h-16 md:w-16" />
</div>

<div class="flex flex-wrap justify-center ml-40 mt-10">
  <img src="images/tool5.svg" alt="Tool 1" class="lg:ml-32 lg:mr-32 lg:w-24 lg:h-24 object-contain tools-border sm:ml-12 sm:mr-12 sm:w-12 sm:h-12 md:m-0 md:h-16 md:w-16" />
  <img src="images/tool6.svg" alt="Tool 2" class="lg:ml-32 lg:mr-32 lg:w-24 lg:h-24 object-contain tools-border sm:ml-12 sm:mr-12 sm:w-12 sm:h-12 md:m-0 md:h-16 md:w-16" />
  <img src="images/tool9.svg" alt="Tool 3" class="lg:ml-32 lg:mr-32 lg:w-24 lg:h-24 object-contain tools-border sm:ml-12 sm:mr-12 sm:w-12 sm:h-12 md:m-0 md:h-16 md:w-16" />
</div>


<!-- About Section -->
<div class="container mx-auto p-4" id="about">
  <div class="flex flex-col md:flex-row m-5 p-6 h-auto">
 
    <div class="text-white md:w-1/2 flex items-start justify-center flex-col">
      <div class="flex items-center justify-start space-x-4">

        <img src="images/rubics.svg" alt="Icon" class="h-16 w-16 items-center " id="cubeIcon" />
        <h1 class="text-center sm:text-2xl md:text-lg lg:text-9xl text-[#00FFDC]">About</h1>

      </div>
      <p class="center-al text-lg leading-relaxed text-white">
  Hi, I'm Dixie Laput, and I live in London, Ontario, Cana4da. I'm passionate about coding and enjoy solving problems through technology. I specialize in web development, app development, and databases, and I always try to stay up to date with new tools and technologies. When I'm not coding, you can usually find me hiking in nature or wall climbing, both of which help me unwind and stay active. I also enjoy watching movies and reading while I have free time. Always keen to learn something new and see where technology and life can take me.
</p>
    </div>

    <div class="md:w-1/2 flex items-center justify-center mt-16">
      <img src="images/ava.png" alt="Your Image" class="responsive-image  rounded-lg" />
    </div>
  </div>
</div>


  <!-- Demo Reel Section -->
  <div class="container mx-auto flex flex-col items-center  pt-10 pb-8 pl-8 pr-8" id="demo-reel">
    <!-- Title Effect -->
      <div class="text-6xl text-white  pt-0 pb-2 pl-8 pr-8 flex flex-row">
        <p class="text-[#00FFDC]">DEMO REEL </p>
        <img src="images/glasses.svg" alt="Icon" class="w-24 h-24 items-center ml-10 pb-10" id="glasses-icon" />
      </div>


    <div class="flex flex-col items-center w-full max-w-screen-2xl mt-2 mb-2 p-10 rounded-lg overflow-hidden --plyr-audio-control-background-hover">
      <div id="player-container" class="relative w-full max-w-7xl">
        <video controls preload="metadata" poster="images/expo2.png" class="w-full">
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
  <div class="container mx-auto pl-4 pr-4 pb-4" id="contact">
    <div class="flex flex-col md:flex-row  mt-0 mr-5 ml-5 mb-5 pt-0 pr-6 pl-6 pb-0 h-auto">
      <div class="md:w-1/2 flex items-start justify-start flex-col text-left text-white ">
        <h1 class="text-center md:text-left text-[#00FFDC]">Contact</h1>
        <p class="text-lg lg:text-2xl ">
  Let's Connect! 
  I’m always excited to meet new people and explore opportunities for collaboration, growth, and innovation.
</p>
<div class="contact-details">
<h2 class="text-[#00FFDC] text-lg md:text-xl lg:text-2xl xl:text-3xl mt-5">Address</h2>
  <p class="text-base md:text-lg lg:text-xl xl:text-2xl">London, Ontario, Canada.</p>
  
  <h2 class="text-[#00FFDC] text-lg md:text-xl lg:text-2xl xl:text-3xl mt-5">Phone</h2>
  <p class="text-base md:text-lg lg:text-xl xl:text-2xl">(+1) 519-639-7794</p>
  
  <h2 class="text-[#00FFDC] text-lg md:text-xl lg:text-2xl xl:text-3xl mt-5">Email</h2>
  <p class="text-base md:text-lg lg:text-xl xl:text-2xl">dixiemarielaput1@gmail.com</p>
</div>
      </div>
      
      <div class="md:w-1/2 flex items-center justify-center">
  <form action="contact.php" method="POST" class="contact-form bg-contact-form mt-12">
    <h2 class="mb-5">Contact Form</h2>

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