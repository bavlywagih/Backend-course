<?php 

include "config.php";

$json = file_get_contents('php://input');
$data = json_decode($json);
$title = $data->title;
$body = $data->body;
$views = $data->views;
$created_at = date('Y-m-d');
$query = "INSERT INTO posts (`title`, `body`, `views`, `created_at`) VALUES ('$title', '$body', '$views', '$created_at')";
$result = $connect->query($query);


if($result){
    echo json_encode(['status' => 'success']);
}else{
    echo json_encode(['status' => 'error']);
}




?>