<?php // callback.php
require "testt.txt";
https://pondragonza098@gmail.com:t3bGWBKaPq6RaR:@https://fixie:bzgCCzMBFxQGvPd@velodrome.usefixie.com:80;
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$access_token = '2/ktZPikCIG3ZL076jYYNfe3mAg5TQ55Uz/GoA6dILTTUClIvRILXa/o96Lp8gfcLH5q2dxJeVtiHq8NZ5mNCHtH8VBUKzKfNBxIpMKZnn1XFCTFp/pTOwydGaGPvP0eFvZDsizHoFIRbWFTqYowyQdB04t89/1O/w1cDnyilFU=';
$myfile = "testt.txt";
$file = fopen($myfile,'r+')or die ("can't open file");
$pond = 0;
// Get POST body content
$content = file_get_contents('php://input');
// fwrite($file , var_export($content,true));
// fclose($file);
// Parse JSON
$events = json_decode($content, true);
echo ($events);
// Validate parsed JSON data
if (!is_null($events['events'])) {
          // Loop through each event
          foreach ($events['events'] as $event) {
               // Reply only when message sent is in 'text' format
               if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
                       // Get text sent
                       $text = $event['source']['userId']; 
                       $text1 = '{"$event":{"userId": "'.$text.'"}}';
                         fwrite($file , var_export($text1,true));
                         fclose($file);
//                          for($i=0;$i>=$pond;$i++){
//                              $a[$i] = $text;
                                   
                       $data1 = file_get_contents("testt.txt");
                         print_r($data1);
                         echo ("ok".$data1);
                       //fwrite($file , var_export($text,true));
                       //fclose($file);
                         
                       // Get replyToken
                       $replyToken = $event['replyToken'];
                      // Build message to reply back
                      $messages = [
                      'type' => 'text',
                      'text' => $text
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

