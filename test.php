<?php 
require "testt.txt";
require "test.php";
https://pondragonza098@gmail.com:t3bGWBKaPq6RaR:@https://fixie:bzgCCzMBFxQGvPd@velodrome.usefixie.com:80;
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$access_token = '2/ktZPikCIG3ZL076jYYNfe3mAg5TQ55Uz/GoA6dILTTUClIvRILXa/o96Lp8gfcLH5q2dxJeVtiHq8NZ5mNCHtH8VBUKzKfNBxIpMKZnn1XFCTFp/pTOwydGaGPvP0eFvZDsizHoFIRbWFTqYowyQdB04t89/1O/w1cDnyilFU=';
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
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
                      print_r($result1);
?>
