<?php
if($_POST['name']!='' && $_POST['age']!='' && $_POST['city']!=''){
    if(file_exists('json/student_data.json')){
    $current_data = file_get_contents('json/student_data.json');
    $array_data = json_decode($current_data,true);
    $new_data = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'city' => $_POST['city'],
    );
    $array_data[] = $new_data;
    $json_data = json_encode($array_data,JSON_PRETTY_PRINT);
    if(file_put_contents('json/student_data.json',$json_data)){
        echo "successfully saved data in JSON file.";
    }
    else{
        echo "JSON file doesn't exist.";
    }
}
else{
    echo "file doesn't exist";
}
}
else{
    echo "all forms required";
}
