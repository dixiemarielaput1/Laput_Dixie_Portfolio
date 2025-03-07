<?php
require_once('../includes/connect.php');

// Project Image Main Goes Here.
if (!empty($_FILES['main_image']['name'])) {
    $random = rand(10000, 99999);
    $filetype = strtolower(pathinfo($_FILES['main_image']['name'], PATHINFO_EXTENSION));

    if ($filetype == 'jpeg') $filetype = 'jpg';
    if ($filetype == 'exe') exit('Nice try');

    $main_image_name = 'image' . $random . '.' . $filetype;
    $target_file = '../images/' . $main_image_name;

    if (move_uploaded_file($_FILES['main_image']['tmp_name'], $target_file)) {
        $query = "INSERT INTO projects 
            (categoryid, name, shortdetail, image, longdetail, github, livelink, caseid, casename, caselongdetail, caseproblem, casesolution, casegoal, casetool, caseconclusion) 
            VALUES 
            (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $connection->prepare($query);
        $stmt->bindParam(1, $_POST['categoryid'], PDO::PARAM_INT);
        $stmt->bindParam(2, $_POST['name'], PDO::PARAM_STR);
        $stmt->bindParam(3, $_POST['shortdetail'], PDO::PARAM_STR);
        $stmt->bindParam(4, $main_image_name, PDO::PARAM_STR);
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
        $stmt->execute();

        $lastid = $connection->lastInsertId(); // Last inserted project ID

        // Insert Project Image Main into the media tb
        $media_query = "INSERT INTO media (projectid, image_filename) VALUES (?, ?)";
        $media_stmt = $connection->prepare($media_query);
        $media_stmt->bindParam(1, $lastid, PDO::PARAM_INT); 
        $media_stmt->bindParam(2, $main_image_name, PDO::PARAM_STR);
        $media_stmt->execute();
    }
}

        // 3 Maximum Images
if (!empty($_FILES['design_images']['name'][0])) {
    $media_query = "INSERT INTO media (projectid, image_filename) VALUES (?, ?)";
    $media_stmt = $connection->prepare($media_query);

    foreach ($_FILES['design_images']['name'] as $index => $file_name) {
        if (!empty($file_name)) {
            $random = rand(10000, 99999);
            $filetype = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if ($filetype == 'jpeg') $filetype = 'jpg';
            if ($filetype == 'exe') continue;

            $design_image_name = 'design_' . $random . '.' . $filetype;
            $target_file = '../images/' . $design_image_name;

            if (move_uploaded_file($_FILES['design_images']['tmp_name'][$index], $target_file)) {
                $media_stmt->bindParam(1, $lastid, PDO::PARAM_INT);
                $media_stmt->bindParam(2, $design_image_name, PDO::PARAM_STR);
                $media_stmt->execute();
            }
        }
    }
}

header('Location: project_list.php');
exit();
?>
