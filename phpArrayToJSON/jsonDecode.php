<!-- decode function is used to convert json object to php Array / object -->
<!-- json_decode(json object,assoc/associativearray-> it has two value either true or false , 
false is its default value if given true then it returns an array if not given any value by default its false or if given false
then it returns an object) -->


<?php
$json_string = "jsonDecode/mydata.json";
$jsondata = file_get_contents($json_string);
$arr = json_decode($jsondata, true);
//  print_r($arr);
echo "<table border = '1' cellpadding= '10px' width= '100%'>";
foreach ($arr as list("userId" => $uid, "id" => $id, "title" => $title, "body" => $body)) {
    echo "<tr><td>{$id}</td><td>{$uid}</td><td>{$title}</td><td>{$body}</td></tr>";
}
echo "</table>";
?>