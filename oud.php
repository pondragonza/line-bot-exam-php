<?php
$content = file_get_contents('value.txt');
$d = json_decode($content));
$d = $d[0];
print_r($d);
?>
