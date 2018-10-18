<?php
$data = file_get_contents("testt.txt");
$data1 = json_decode($data,true);
$data2 = $data1['event'];
print_r($data2);
?>
