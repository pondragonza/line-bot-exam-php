<?php
$content = file_get_contents('value.txt');
$d = (json_decode($content));
$a = $d[0];
print_r($a);
?>
