<?php
require_once('includes/connect.php');
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$query = "SELECT id, name, image FROM projects WHERE id = $id";
$results = mysqli_query($connect, $query);

$project = mysqli_fetch_array($results);


if ($project) {
    $totalQuery = "SELECT COUNT(*) as total FROM projects";
    $totalResult = mysqli_query($connect, $totalQuery);
    $totalRow = mysqli_fetch_array($totalResult);
    $totalProjects = $totalRow['total'];
    echo json_encode([
        'project' => $project,
        'totalProjects' => $totalProjects
    ]);
} else {

    echo json_encode([]);
}
?>