<?php
// require "value.txt" ;
$myfile = "value.txt";
$fileHandle = fopen($myfile,'w+')or die("can't open file");
$content = file_get_contents('"value.txt');
print_r($content);

// $output=$_POST;
// $a = ($_POST["hum"]);
// // print_r($a);
// $b = ($_POST["temp"]);
// // print_r($b);
// $c = ($_POST["status"]);
// // print_r($c);
// $d = ($_POST["startTime"]);
// // print_r($d);
// $e = ($_POST["endTime"]);
// // print_r($e);

//print_r($a);
// print_r($b);
// if ($c == "true"){
//     $output= '{
//    "value": [
//    {"temp": "'.$b.'"},
//    {"hum": "'.$a.'"},
//    {"status":"'.$c.'"}
//    ]
//    }';
// }
// else {
//      $output= '{
//     "value": [
//     {"temp": "'.$b.'"},
//     {"hum": "'.$a.'"},
//     {"status":"'.$c.'"},
//     {"startTime":"'.$d.'"},
//     {"endTime":"'.$e.'"}
//     ]
//     }';
// }
// print_r($output);
// fwrite($fileHandle, $a);
fwrite($fileHandle, print_r(json_encode($content)));
  fclose($fileHandle);
?>
