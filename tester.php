<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
  <title>Case Study - Project <?php echo $project['id']; ?></title>
</head>

<body class="bg-black text-white">

  <!-- Navbar Section (Similar to your portfolio page) -->
  <nav class="bg-black shadow">
      <!-- Add Navbar content here similar to your portfolio page -->
  </nav>

  <!-- Case Study Section -->
  <div class="container mx-auto p-4">
    <div class="mt-5 ml-5 mr-5 mb-0 p-1 h-auto flex justify-center flex-col">
      <h1 class="text-3xl">Case Study for Project: <?php echo $project['id']; ?></h1>

      <hr class="full-width-hr-main">

      <!-- Project Image -->
      <div class="project-image">
        <img src="images/<?php echo $project['image']; ?>" alt="Project Image" class="w-full h-auto rounded-lg">
      </div>

      <!-- Project Description -->
      <div class="project-description mt-4">
        <h2 class="text-2xl">Project Description</h2>
        <p><?php echo $project['shortdetail']; ?></p>
      </div>

      <!-- Long Detail -->
      <div class="project-details-info mt-4">
        <h3 class="text-xl">Detailed Information</h3>
        <p><?php echo $project['longdetail']; ?></p>
      </div>

      <!-- Case Study Sections -->
      <div class="case-study-sections mt-4">
        <!-- Case Problem -->
        <div class="case-problem">
          <h3 class="text-xl">Case Problem</h3>
          <p><?php echo $project['caseproblem']; ?></p>
        </div>

        <!-- Case Solution -->
        <div class="case-solution mt-4">
          <h3 class="text-xl">Case Solution</h3>
          <p><?php echo $project['casesolution']; ?></p>
        </div>

        <!-- Case Goals -->
        <div class="case-goals mt-4">
          <h3 class="text-xl">Case Goals</h3>
          <p><?php echo $project['casegoals']; ?></p>
        </div>

        <!-- Case Tools -->
        <div class="case-tools mt-4">
          <h3 class="text-xl">Case Tools</h3>
          <p><?php echo $project['casetool']; ?></p>
        </div>

        <!-- Case Conclusion -->
        <div class="case-conclusion mt-4">
          <h3 class="text-xl">Case Conclusion</h3>
          <p><?php echo $project['caseconclusion']; ?></p>
        </div>
      </div>

      <!-- Project Links -->
      <div class="project-links mt-4">
        <a href="<?php echo $project['github']; ?>" class="github-btn bg-black text-[#00FFDC] p-2 mt-2 rounded-lg border-2 border-solid border-[#00FFDC]" target="_blank">
          View on GitHub
        </a>
        <a href="<?php echo $project['livelink']; ?>" class="live-project-btn bg-black text-[#00FFDC] p-2 mt-2 rounded-lg border-2 border-solid border-[#00FFDC]" target="_blank">
          View Live Project
        </a>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <footer>
    <!-- Add Footer content here similar to your portfolio page -->
  </footer>

</body>
</html>
