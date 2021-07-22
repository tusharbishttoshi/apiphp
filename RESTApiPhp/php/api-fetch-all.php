<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Orign:*');

include_once 'config.php';

$sql = "SELECT * FROM getapi";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}
else{
    echo json_encode(array('msg'=>'No record found','status'=>false));
}
?>