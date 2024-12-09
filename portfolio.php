<!DOCTYPE html>
<html lang="en">

<?php
require_once('includes/connect.php');

$categoryQuery = "SELECT categoryid, categoryname FROM categories";
$categoryResults = mysqli_query($connect, $categoryQuery);

$codeCountQuery = "SELECT COUNT(*) FROM projects WHERE categoryid = 1";
$designCountQuery = "SELECT COUNT(*) FROM projects WHERE categoryid = 2";
$allCountQuery = "SELECT COUNT(*) FROM projects";

$codeCountResult = mysqli_query($connect, $codeCountQuery);
$designCountResult = mysqli_query($connect, $designCountQuery);
$allCountResult = mysqli_query($connect, $allCountQuery);

$codeCount = mysqli_fetch_array($codeCountResult)[0];
$designCount = mysqli_fetch_array($designCountResult)[0];
$allCount = mysqli_fetch_array($allCountResult)[0];

$categoryFilter = isset($_GET['category']) ? $_GET['category'] : 'all';

if ($categoryFilter == 'all') {
    $query = "SELECT id, image, shortdetail, github, livelink, categoryid FROM projects";
} else {
    $query = "SELECT id, image, shortdetail, github, livelink, categoryid FROM projects WHERE categoryid = $categoryFilter";
}

$projectResults = mysqli_query($connect, $query);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

<div class="portfolio-container mx-auto p-4">
  <div class="mt-5 ml-5 mr-5 mb-0 p-1 h-auto flex justify-center flex-col">
    <h1>Project Portfolio Section</h1>

    <hr class="full-width-hr-main">

    <div class="container-categories flex space-x-4">
      <a href="?category=1" class="bg-[#00FFDC] text-black p-2 px-6 hover:bg-[#01c6b0] transition rounded-full">CODE (<?php echo $codeCount; ?>)</a>
      <a href="?category=2" class="bg-[#00FFDC] text-black p-2 px-6 hover:bg-[#01c6b0] transition rounded-full">DESIGN (<?php echo $designCount; ?>)</a>
      <a href="?category=all" class="bg-[#00FFDC] text-black p-2 px-6 hover:bg-[#01c6b0] transition rounded-full">ALL (<?php echo $allCount; ?>)</a>
    </div>
  </div>
</div>

<?php
while($row = mysqli_fetch_array($projectResults)) {
    $projectId = $row['id'];

    echo 
    '
    <div class="row">
        <div class="portfolio-content mx-auto pt-4 pb-0 pl-4 pr-4">
            <div class="project-header mt-0 ml-5 mb-0 mr-5 h-auto flex justify-center flex-col">
                <div class="flex items-center justify-between mt-0 project1">
                    <span class="mt-0">Project ' . $projectId . '</span>
                    <span class="exp-icon cursor-pointer" id="exp-icon-' . $projectId . '" onclick="toggleDetails(' . $projectId . ')">+</span>
                </div>
                
                <div class="extra-detail-project" id="extra-detail-' . $projectId . '" style="display: none;">
                    <span class="text-white">Create and build dynamic pages.</span>
                </div>

                <img class="project-image mt-7 mb-0 w-full h-auto rounded-lg hidden" src="images/' . $row['image'] . '" alt="Project Image">
                
                <p class="text-short-detail hidden" id="short-detail-' . $projectId . '" style="display: none;">
                    ' . $row['shortdetail'] . '
                </p>

                <div class="buttons flex space-x-4 flex-wrap">
                    <a href="' . $row['github'] . '" class="github-btn bg-black text-[#00FFDC] p-2 mt-2 rounded-lg border-2 border-solid border-[#00FFDC] hidden flex items-center" target="_blank">
                        Github
                        <img src="images/githubhead.png" alt="GitHub" class="w-5 h-5 ml-2">
                    </a>
                    
                    <a href="' . $row['livelink'] . '" class="live-project-btn bg-black text-[#00FFDC] p-2 mt-2 rounded-lg border-2 border-solid border-[#00FFDC] hidden flex items-center" target="_blank">
                        Live Project
                        <img src="images/arrowlinks.svg" alt="Live Project" class="w-5 h-5 ml-2 -rotate-45">
                    </a>

       <a href="casestudies.php?id=' . $projectId . '" class="more-info-btn bg-black text-[#00FFDC] p-2 mt-2 mr-2 rounded-lg border-2 border-solid border-[#00FFDC] flex items-center hidden" id="more-info-btn-' . $projectId . '">
    More Information
    <img src="images/arrowlinks.svg" alt="More Info" class="w-5 h-5 ml-2 -rotate-45">
</a>

                </div>
                <hr class="full-width-hr-main">
            </div>
        </div>
    </div>';
}
?>

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

<script src="js/tester.js"></script>

</body>
</html>
