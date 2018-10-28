<?php 
$ch1 = curl_init("https://api.line.me/v2/bot/profile/Uf6071f679024997b537b91a0c8330a20);"//.$text);
                      //fwrite($file , var_export($ch1,true));
                     
                      curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "GET");
                      curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
                      //curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                      curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
                      curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
                      curl_setopt($ch1, CURLOPT_PROXY, $proxy);
                      curl_setopt($ch1, CURLOPT_PROXYUSERPWD, $proxyauth);
                      $result1 = curl_exec($ch1);
                      curl_close($ch1);
                      $file = fopen($myfile,'w+')or die ("can't open file");
                      fwrite($file , print_r($result1,true));
                      print_r($result1)
?>
