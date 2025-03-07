<!DOCTYPE html>
<?php
require_once('includes/connect.php');

// Fetch main project details and image
$query = 'SELECT image, name, longdetail, github, livelink, caseid, casename, caselongdetail, caseproblem, casesolution, casegoal, casetool, caseconclusion FROM projects WHERE id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// Get the 3 images from media table
$media_query = 'SELECT GROUP_CONCAT(image_filename) AS images FROM media WHERE projectid = :projectId';
$media_stmt = $connection->prepare($media_query);
$media_stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$media_stmt->execute();
$media_row = $media_stmt->fetch(PDO::FETCH_ASSOC);

$stmt = null;
$media_stmt = null;

// Explode the comma-separated list into an array
$images = explode(",", $media_row['images']);
?>
<html lang="en">
<head>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php echo $row['name']; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/18.6.4/Tween.min.js" defer></script>

</head>

<body>
 
<nav class="bg-black shadow">
  <div class="block md:hidden flex items-center justify-between w-full pt-4 pl-2">
      <button id="menu-icon3" class="focus:outline-none w-10 h-10 text-white">
          <i class="fas fa-bars text-white"></i>
      </button>

      <div class="flex-1 flex justify-center">
          <img src="images/dl.svg" alt="logo portfolio" class="w-16 h-16 md:w-12 md:h-12 mr-14"> 
      </div>
  </div>

  <div class="container mx-auto px-2 py-2 flex justify-center items-center">
    <ul id="menu" class="hidden md:flex md:space-x-20 md:justify-center md:p-4 md:bg-black items-center">
          <li><a href="index.php" class="text-white hover:text-[#00FFDC]">Home</a></li>
          <li><a href="index.php#about" class="text-white hover:text-[#00FFDC]">About</a></li>
          <li><a href="portfolio.php" class="text-white hover:text-[#00FFDC]">Portfolio</a></li>
          <img src="images/dl.svg" alt="logo portfolio" class="w-16 h-16">
      
          <li><a href="index.php#demo-reel" class="text-white hover:text-[#00FFDC]">Showreel</a></li>
          <li><a href="index.php#contact" class="text-white hover:text-[#00FFDC]">Contact</a></li>
      </ul>
  </div>
</nav>
<div id="navbar-mobile3" class="hidden md:hidden">
  <ul class="flex flex-col space-y-2 p-4 bg-black shadow-md items-center">
      <li><a href="index.php" class="block text-white hover:text-[#00FFDC]">Home</a></li>
      <li><a href="index.php#about" class="block text-white hover:text-[#00FFDC]">About</a></li>
      <li><a href="portfolio.php" class="block text-white hover:text-[#00FFDC]">Portfolio</a></li>
      <li><a href="index.php#demo-reel" class="block text-white hover:text-[#00FFDC]">Showreel</a></li>
      <li><a href="index.php#contact" class="block text-white hover:text-[#00FFDC]">Contact</a></li>
  </ul>
</div>




  

  <section class="project-details bg-black text-white py-6 ">
  <div class="m-5 p-1 h-auto flex justify-center flex-col w-3/4 mx-auto">
    <h1 class="text-6xl text-[#00FFDC] mb-7">{ Case Study }</h1>
    <h1 class="text-4xl font-bold mb-6"><?php echo $row['name']; ?> - Case Study</h1>
    <hr class="full-width-hr-main">

<section class="project-gallery mb-10">
  <!-- Main image from the projects table -->
  <img class="portfolio-image w-full h-auto rounded-lg shadow-lg mb-8" src="images/<?php echo $row['image']; ?>" alt="Main Project Image">
  <p class="text-lg mb-8"><?php echo $row['longdetail']; ?></p>


  <div class="flex justify-between gap-4">
    <?php 
    foreach ($images as $image) {
        echo '<img class="portfolio-image w-1/3 h-auto rounded-lg shadow-lg" src="images/'.$image.'" alt="Project Image">';
    }
    ?>
  </div>
</section>

    <!-- Case Study Details -->
    <section class="case-study-details">
      <h2 class="text-4xl font-bold mb-4">Case Study Details</h2>
      <p class="mt-0 pb-5"><strong class="text-white text-2xl ">Problem:</strong> <span class="text-teal-400"><?php echo $row['caseproblem']; ?></span></p>
  <p class="mt-0 pb-5"><strong class="text-white text-2xl">Solution:</strong> <span class="text-teal-400"><?php echo $row['casesolution']; ?></span></p>
  <p class="mt-0 pb-5"><strong class="text-white text-2xl">Goal:</strong> <span class="text-teal-400"><?php echo $row['casegoal']; ?></span></p>
  <p class="mt-0 pb-5"><strong class="text-white text-2xl">Tool Used:</strong> <span class="text-teal-400"><?php echo $row['casetool']; ?></span></p>
  <p class="mt-0 pb-5"><strong class="text-white text-2xl">Conclusion:</strong> <span class="text-teal-400"><?php echo $row['caseconclusion']; ?></span></p>
    </section>
  </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-black text-white py-6">
    <div class="container mx-auto p-4">
      <div class="ml-5 mr-5 mt-0 p-6 flex flex-col md:flex-row">
        <div class="md:w-1/3 flex flex-col mt-0 mb-5 text-center md:text-left">
          <h2 class="title-footer text-[#00FFDC]">Sitemap</h2>
          <ul>
            <li><a href="index.php" class="hover:text-[#00FFDC]">Home</a></li>
            <li><a href="#about" class="hover:text-[#00FFDC]">About</a></li>
            <li><a href="#demo-reel" class="hover:text-[#00FFDC]">Showreel</a></li>
            <li><a href="portfolio.php" class="hover:text-[#00FFDC]">Portfolio</a></li>
            <li><a href="#contact" class="hover:text-[#00FFDC]">Contact</a></li>
          </ul>
        </div>
        <div class="md:w-1/3 flex flex-col mt-0 mb-5 text-center md:text-left">
          <h2 class="title-footer text-[#00FFDC]">Socials</h2>
          <ul>
            <li><a href="https://github.com/dixiemarielaput1" class="hover:text-[#00FFDC]" target="_blank">GitHub</a></li>
            <li><a href="https://www.linkedin.com/in/dixie-m/" class="hover:text-[#00FFDC]" target="_blank">LinkedIn</a></li>
            <li><a href="https://www.instagram.com/dixiemarielaput/" class="hover:text-[#00FFDC]" target="_blank">Instagram</a></li>
          </ul>
        </div>
        <div class="md:w-1/3 flex flex-col text-center md:text-left">
          <h2 class="text-4xl text-white mt-0 mb-5">WANT TO WORK WITH ME?</h2>  
          <h3 class="text-2xl text-[#00FFDC]">Let's create website together!</h3>   
        </div>
      </div>

      <hr class="my-4 border-white text-white" />
      <p class="footer-copyright text-center text-white text-sm">© Dixie Laput. 2024</p>
    </div>
  </footer>

  <script type="module" src="./js/main_projectDetails.js"></script>
</body>
</html>
