<?php
require "value.txt" ;
$myfile = "value.txt";
$fileHandle = fopen($myfile,'w+')or die("can't open file");
// $content = file_get_contents('"value.txt');
// print_r($content);

$output=$_POST;
// $e = ($_POST["hum"]);
// // // print_r($a);
// $d = ($_POST["temp"]);
// // // print_r($b);
// $a = ($_POST["status"]);
// // // print_r($c);
// $b = ($_POST["startTime"]);
// // // print_r($d);
// $c = ($_POST["endTime"]);
// // // print_r($e);
// $f = ($_POST["Subject"]);


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
// if ($c == "true"){
//   $oud = ("[".$a.",".$d.",".$e."]")
fwrite($fileHandle, (print_r($output),true));
//   fwrite($fileHandle, (print_r($a)));
  fclose($fileHandle);

// }
// else{
//   $oud =("[".$a.",".$f.",".$b.",".$c.",".$d.",".$e."]")
//   fwrite($fileHandle, (print_r($oud),true));
//   fwrite($fileHandle, (print_r($a)));
  
//   fclose($fileHandle);
// }
?> 
