<!DOCTYPE html>
<html lang="en">

<?php
require_once('../includes/connect.php');
$stmt = $connection->prepare('SELECT id, name FROM projects ORDER BY name ASC');
$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Main Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>
<body>

<?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

  echo  '<p class="project-list">'.
  $row['name'].
  '<a href="edit_project_form.php?id='.$row['id'].'">edit</a>'.
  '<a href="delete_project.php?id='.$row['id'].'">delete</a></p>';
}

$stmt = null;

?>
<br><br><br>
<h3>Add a New Project</h3>
<form action="add_project.php" method="post" enctype="multipart/form-data">
    <label for="categoryid">Category ID: </label>
    <input name="categoryid" type="number" required><br><br>

    <label for="name">Project Name: </label>
    <input name="name" type="text" required><br><br>

    <label for="shortdetail">Short Detail: </label>
    <textarea name="shortdetail" required></textarea><br><br>

    <!--Main Project Image -->
    <label for="main_image">Main Project Image: </label>
    <input name="main_image" type="file" required><br><br>

    <!-- 3 Design Images -->
    <label for="design_images">Design Images (Upload up to 3): </label>
    <input name="design_images[]" type="file" multiple><br><br>

    <label for="longdetail">Long Detail: </label>
    <textarea name="longdetail" required></textarea><br><br>

    <label for="github">GitHub Link: </label>
    <input name="github" type="url"><br><br>

    <label for="livelink">Live Project Link: </label>
    <input name="livelink" type="url"><br><br>

    <label for="caseid">Case ID: </label>
    <input name="caseid" type="number"><br><br>

    <label for="casename">Case Name: </label>
    <input name="casename" type="text"><br><br>

    <label for="caselongdetail">Case Long Detail: </label>
    <textarea name="caselongdetail"></textarea><br><br>

    <label for="caseproblem">Case Problem: </label>
    <textarea name="caseproblem"></textarea><br><br>

    <label for="casesolution">Case Solution: </label>
    <textarea name="casesolution"></textarea><br><br>

    <label for="casegoal">Case Goal: </label>
    <textarea name="casegoal"></textarea><br><br>

    <label for="casetool">Case Tool: </label>
    <textarea name="casetool"></textarea><br><br>

    <label for="caseconclusion">Case Conclusion: </label>
    <textarea name="caseconclusion"></textarea><br><br>

    <input name="submit" type="submit" value="Add Project">
</form>

<br><br><br>
<a href="logout.php">Log Out</a>
</body>
</html>
