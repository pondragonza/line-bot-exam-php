<?php
$data = file_get_contents("testt.txt");
$data1 = json_decode($data,true);
print_r($data);
?>
