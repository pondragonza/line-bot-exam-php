<?php
require "value.txt" ;
$myfile = "value.txt";
$fileHandle = fopen($myfile,'w+')or die("can't open file");
// $output=$_POST;
$e = ($_POST["hum"]);
// // print_r($a);
$d = ($_POST["temp"]);
// // print_r($b);
$a = ($_POST["status"]);
// // print_r($c);
$b = ($_POST["startTime"]);
// // print_r($d);
$c = ($_POST["endTime"]);
// // print_r($e);
$f = ($_POST["Subject"]);


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
if ($a == "true"){
//   $oud = ['"'.$a.'"'];
     $oud = ('["'.$a.'","'.$d.'","'.$e.'"]');

}
else if ($a == "false"){
//   $oud = ['"'.$a.'"'];
  $oud = ('["'.$a.'","'.$f.'","'.$b.'","'.$c.'","'.$d.'","'.$e.'"]');
//   $oud = ("[true,busy,".$f.",".$b.",".$c.",".$d.",".$e."]");
  }else{
//   $oud = ("[true,waiting,".$f.",".$b.",".$c.",".$d.",".$e."]") ;
//   $oud = ['"'.$a.'"'];
   $oud = ('["'.$a.'","'.$f.'","'.$b.'","'.$c.'","'.$d.'","'.$e.'"]');
//    $oud = ("[".$a,$d,$e."]");
}
fwrite($fileHandle,print_r($oud,true));
//   fwrite($fileHandle, (print_r($a)));
fclose($fileHandle);


//   $oud = ("[".$a.",".$f.",".$b.",".$c.",".$d.",".$e."]") ;
//   $oud = ("[".$a.",".$d.",".$e."]");
//   fwrite($fileHandle, (print_r($a,true));
// //   fwrite($fileHandle, (print_r($a)));
  
//   fclose($fileHandle);
// }
?> 
