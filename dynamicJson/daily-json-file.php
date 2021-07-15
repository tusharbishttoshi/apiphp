<?php
include_once 'config.php';
$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);
$json_data = json_encode($output,JSON_PRETTY_PRINT);
$file_name = "my-".date("d-m-Y").".json";
if(file_put_contents("json/{$file_name}",$json_data)){
    echo $file_name . "created";
}
else{
    echo "unable to create json files.";
}
?>