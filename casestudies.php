<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollToPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/18.6.4/Tween.min.js"></script>
  <title>Case Study: <?php echo $project['name']; ?></title>
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
<?php
require_once('includes/connect.php');
$query = 'SELECT * FROM projects WHERE id = ' . $_GET['id'];
$projectResults = mysqli_query($connect, $query);
$project = mysqli_fetch_array($projectResults);
$imageQuery = 'SELECT * FROM casestudyimages WHERE caseid = ' . $project['caseid'];
$imageResults = mysqli_query($connect, $imageQuery);
$images = mysqli_fetch_all($imageResults, MYSQLI_ASSOC);
?>

    <div class="casestudies-container mx-auto p-4">
        <div class="m-5 p-1 h-auto flex justify-center flex-col">
            <h1>{ Case Study }</h1>
            <h1 class="text-white"><?php echo $project['name']; ?> - Case Study</h1>
            <hr class="full-width-hr-main">
            <img class="case-study-img" src="images/<?php echo $project['image']; ?>" alt="Case Study Image">
            <p class="first-info text-white"><?php echo ($project['longdetail']); ?></p>

            <div class="details-section text-white">
                <span class="problem">Problem</span>
                <p><?php echo ($project['caseproblem']); ?></p>

                <span class="solution">Solution</span>
                <p><?php echo ($project['casesolution']); ?></p>
            </div>

            <p id="design-development" class="text-white">Design Development</p>

            <div class="image-section">
              <img class="case-study-img" src="images/<?php echo $images[0]['image']; ?>" alt="Case Image">
            </div>
            <div class="image-section hidden">
              <img class="case-study-img" src="images/<?php echo $images[1]['image']; ?>" alt="Case Image">
            </div>
            <div class="image-section hidden">
              <img class="case-study-img" src="images/<?php echo $images[2]['image']; ?>" alt="Case Image">
            </div>

            <?php foreach ($images as $row) {
    echo '
    <div class="image-section">
        <img class="case-study-img" src="images/'.$row['image'].'" alt="Case Image">
    </div>';
}
?>

            <div class="design-development-row">
              <div class="arrow-buttons">
                <span class="arrow-left">&#8592;</span>
                <span class="arrow-right">&#8594;</span>
              </div>
            </div>

<div class="goal-section text-white hidden">
  <h1 class="title">1. Goal</h1>
  <p class="goal-description">
    <?php echo ($project['casegoal']); ?>
  </p>
</div>

<div class="tool-section text-white hidden">
  <h1 class="title">2. Tool</h1>
  <p class="tool-description">
    <?php echo ($project['casetool']); ?>
  </p>
</div>

<div class="conclusion-section text-white hidden">
  <h1 class="title">3. Conclusion</h1>
  <p class="conclusion-description">
    <?php echo ($project['caseconclusion']); ?>
  </p>
</div>

            <hr class="full-width-hr">
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

    <script src="js/tester2.js"></script> 
    
</body>

</html>
