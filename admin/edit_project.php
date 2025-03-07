<?php
require_once('../includes/connect.php');
$query = "UPDATE projects 
          SET categoryid = ?, 
              name = ?, 
              shortdetail = ?, 
              image = ?, 
              longdetail = ?, 
              github = ?, 
              livelink = ?, 
              caseid = ?, 
              casename = ?, 
              caselongdetail = ?, 
              caseproblem = ?, 
              casesolution = ?, 
              casegoal = ?, 
              casetool = ?, 
              caseconclusion = ? 
          WHERE id = ?";


$stmt = $connection->prepare($query);

$stmt->bindParam(1, $_POST['categoryid'], PDO::PARAM_INT);
$stmt->bindParam(2, $_POST['name'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['shortdetail'], PDO::PARAM_STR);
$stmt->bindParam(4, $_POST['thumb'], PDO::PARAM_STR); 
$stmt->bindParam(5, $_POST['longdetail'], PDO::PARAM_STR);
$stmt->bindParam(6, $_POST['github'], PDO::PARAM_STR);
$stmt->bindParam(7, $_POST['livelink'], PDO::PARAM_STR);
$stmt->bindParam(8, $_POST['caseid'], PDO::PARAM_INT);
$stmt->bindParam(9, $_POST['casename'], PDO::PARAM_STR);
$stmt->bindParam(10, $_POST['caselongdetail'], PDO::PARAM_STR); 
$stmt->bindParam(11, $_POST['caseproblem'], PDO::PARAM_STR);
$stmt->bindParam(12, $_POST['casesolution'], PDO::PARAM_STR);
$stmt->bindParam(13, $_POST['casegoal'], PDO::PARAM_STR);
$stmt->bindParam(14, $_POST['casetool'], PDO::PARAM_STR);
$stmt->bindParam(15, $_POST['caseconclusion'], PDO::PARAM_STR);
$stmt->bindParam(16, $_POST['pk'], PDO::PARAM_INT); 

$stmt->execute();

$stmt = null;

header('Location: project_list.php');
?>
