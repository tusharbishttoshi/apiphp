<?php
include_once 'config.php';
$sql = "SELECT * FROM student WHERE Id = {$_POST['id']}";
$result = mysqli_query($conn,$sql);
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);

echo json_encode($output);