<?php
$content = file_get_contents('pond.txt');
$d = (json_decode($content));
print_r($d[1]);
?>
