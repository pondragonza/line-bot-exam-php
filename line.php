<?php
// $data = file_get_contents("testt.txt");
// $data1 = json_decode($data,true);
$json = json_decode(file_get_contents("test.txt"), true);
print_r($json);
?>
