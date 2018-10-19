<html>
<head>
<title>oud and pond design</title>
<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
</head>
<body>

<?php // callback.php
require "testt.txt";
https://pondragonza098@gmail.com:t3bGWBKaPq6RaR:@https://fixie:bzgCCzMBFxQGvPd@velodrome.usefixie.com:80;
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$access_token = '2/ktZPikCIG3ZL076jYYNfe3mAg5TQ55Uz/GoA6dILTTUClIvRILXa/o96Lp8gfcLH5q2dxJeVtiHq8NZ5mNCHtH8VBUKzKfNBxIpMKZnn1XFCTFp/pTOwydGaGPvP0eFvZDsizHoFIRbWFTqYowyQdB04t89/1O/w1cDnyilFU=';
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
$myfile = "testt.txt";
$myfile1 = "mess.txt";
$file = fopen($myfile,'a')or die ("can't open file");
$pond = 0;
$check = true;
          
// Get POST body content
$content = file_get_contents('php://input');
          fwrite($file , print_r($content,true));
          fclose($file);
// fwrite($file , var_export($content,true));
// fclose($file);
// Parse JSON
$events = json_decode($content, true);
// fwrite($file , var_export($events,true));
// fclose($file);
echo ($events);
// Validate parsed JSON data
if (!is_null($events['events'])) {
          // Loop through each event
          foreach ($events['events'] as $event) {
               
               if ($event['type'] == 'follow' ) {
                       // Get text sent
                       $text = $event['source']['userId']; 

                         $text1 = array('userId'=>$text);

                      
                      $ch1 = curl_init("https://api.line.me/v2/bot/profile/".$text);
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
//                       fwrite($file , print_r($result1,true));
//                       fclose($file);
                      
//                       fwrite($file1 , print_r($result1,true));
//                       fclose($file1);
                       $events2 = json_decode($result1, true);
                       $a = $events2['displayName'];
                       $b = ("Hello ".$a." กรุณาพิมพ์ 1 เว้นวรรคและตามด้วยชื่อเพื่อทำการบันทึกข้อมูล");
                       

                       $replyToken = $event['replyToken'];
                      // Build message to reply back
                      $messages = [
                      'type' => 'text',
                      'text' => $b
                      ];
                      // Make a POST Request to Messaging API to reply to sender
                      $url = 'https://api.line.me/v2/bot/message/reply';
                      $data = [
                      'replyToken' => $replyToken,
                      'messages' => [$messages],
                      ];
                       echo ($data);
                      $post = json_encode($data);
                       echo($post);
//                       $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                      $ch = curl_init($url);
                      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                      curl_setopt($ch, CURLOPT_PROXY, $proxy);
                      curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
                      $result = curl_exec($ch);
                      curl_close($ch);
                      echo $result . "\r\n";
                      
                }

               // Reply only when message sent is in 'text' format
               if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
                      $oud = $event['message']['text']; 
                      $name = file_get_contents('name.txt');
                      $name2 = json_decode($name);
//                      for ($i=0;$i<=1;$i++){ 
                     if(($oud == $name2[0]) or ($oud == $name2[1])){
//                       $file1 = fopen($myfile1,'r+')or die ("can't open file");
//                       fwrite($file1 , print_r($name2[0],true));
//                       fclose($file1);
//                        // Get text sent
//                        $text = $event['source']['userId']; 
//                        $text1 = '{"event": [{"userId": "'.$text.'"}]}';
//                          $text1 = array('userId'=>$text);
                         //fwrite($file , var_export(json_encode($text1),true));
                        
//                          for($i=0;$i>=$pond;$i++){
//                              $a[$i] = $text;
                      
                        // Get replyToken
                       $replyToken = $event['replyToken'];
                      // Build message to reply back
                      $messages = [
                      'type' => 'text',
                      'text' => 'บันทึกเรียบร้อย'
                      ];
                      // Make a POST Request to Messaging API to reply to sender
                      $url = 'https://api.line.me/v2/bot/message/reply';
                      $data = [
                      'replyToken' => $replyToken,
                      'messages' => [$messages],
                      ];
                       echo ($data);
                      $post = json_encode($data);
                       echo($post);
                      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                      $ch = curl_init($url);
                      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                      curl_setopt($ch, CURLOPT_PROXY, $proxy);
                      curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
                      $result = curl_exec($ch);
                      curl_close($ch);
                      echo $result . "\r\n";
                      $check =false;

                     }
                  if{$check){
                       $messages = [
                      'type' => 'text',
                      'text' => 'ท่านทำรายการผิด'
                      ];
                      // Make a POST Request to Messaging API to reply to sender
                      $url = 'https://api.line.me/v2/bot/message/reply';
                      $data = [
                      'replyToken' => $replyToken,
                      'messages' => [$messages],
                      ];
                       echo ($data);
                      $post = json_encode($data);
                       echo($post);
                      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                      $ch = curl_init($url);
                      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                      curl_setopt($ch, CURLOPT_PROXY, $proxy);
                      curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
                      $result = curl_exec($ch);
                      curl_close($ch);
                      echo $result . "\r\n";
                      }
            }
     }

}

