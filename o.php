<?php
                      $name = file_get_contents('name.txt');
                      $name2 = json_decode($name);
// $myArr = array("John", "Mary", "Peter", "Sally");
// //$myJSON = json_encode($myArr[0]);
//  echo $name2;
  print_r ($name2[0]);
?>
