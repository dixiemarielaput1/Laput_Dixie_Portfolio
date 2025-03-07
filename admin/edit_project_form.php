<!DOCTYPE html>
<html lang="en">
<?php
require_once('../includes/connect.php');
$query = 'SELECT * FROM projects WHERE projects.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">

</head>
<body>

<form action="edit_project.php" method="POST">
    <input name="pk" type="hidden" value="<?php echo $row['id']; ?>">

    <label for="categoryid">Category ID: </label>
    <input name="categoryid" type="number" value="<?php echo $row['categoryid']; ?>" required><br><br>

    <label for="title">Project Title: </label>
    <input name="name" type="text" value="<?php echo $row['name']; ?>" required><br><br>

    <label for="shortdetail">Project Description: </label>
    <textarea name="shortdetail" required><?php echo $row['shortdetail']; ?></textarea><br><br>

    <label for="thumb">Project Thumbnail (Image URL): </label>
    <input name="thumb" type="text" value="<?php echo $row['image']; ?>" required><br><br>

    <label for="longdetail">Project Long Description: </label>
    <textarea name="longdetail" required><?php echo $row['longdetail']; ?></textarea><br><br>

    <label for="github">GitHub Link: </label>
    <input name="github" type="url" value="<?php echo $row['github']; ?>"><br><br>

    <label for="livelink">Live Link: </label>
    <input name="livelink" type="url" value="<?php echo $row['livelink']; ?>"><br><br>

    <label for="caseid">Case ID: </label>
    <input name="caseid" type="number" value="<?php echo $row['caseid']; ?>"><br><br>

    <label for="casename">Case Name: </label>
    <input name="casename" type="text" value="<?php echo $row['casename']; ?>"><br><br>

    <label for="caselongdetail">Case Long Description: </label>
    <textarea name="caselongdetail"><?php echo $row['caselongdetail']; ?></textarea><br><br>

    <label for="caseproblem">Case Problem: </label>
    <textarea name="caseproblem"><?php echo $row['caseproblem']; ?></textarea><br><br>

    <label for="casesolution">Case Solution: </label>
    <textarea name="casesolution"><?php echo $row['casesolution']; ?></textarea><br><br>

    <label for="casegoal">Case Goal: </label>
    <input name="casegoal" type="text" value="<?php echo $row['casegoal']; ?>"><br><br>

    <label for="casetool">Case Tool: </label>
    <input name="casetool" type="text" value="<?php echo $row['casetool']; ?>"><br><br>

    <label for="caseconclusion">Case Conclusion: </label>
    <textarea name="caseconclusion"><?php echo $row['caseconclusion']; ?></textarea><br><br>

    <input name="submit" type="submit" value="Edit">
</form>

<?php
$stmt = null;
?>
</body>
</html>
