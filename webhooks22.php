<?php // callback.php
require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$access_token = '2/ktZPikCIG3ZL076jYYNfe3mAg5TQ55Uz/GoA6dILTTUClIvRILXa/o96Lp8gfcLH5q2dxJeVtiHq8NZ5mNCHtH8VBUKzKfNBxIpMKZnn1XFCTFp/pTOwydGaGPvP0eFvZDsizHoFIRbWFTqYowyQdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		 if ($event['type'] == 'follow' ) {
                       // Get text sent
                      $text = $event['source']['userId']; 
         //             $file = fopen($myfile,'w+')or die ("can't open file");
         //             fwrite($file , print_r($text,true));
                         $text1 = array('userId'=>$text);
                             
                      //$url;
                      $ch1 = curl_init("https://api.line.me/v2/bot/profile/".$text);//.$text)
                      //fwrite($file , var_export($ch1,true));
                     
                      curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "GET");
                      curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
                     // curl_setopt($ch, CURLOPT_POSTFIELDS, $get);
                      //curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
                      curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
                      $result1 = curl_exec($ch1);
                      curl_close($ch1);
                     // $file = fopen($myfile,'w+')or die ("can't open file");
                   //   fwrite($file , print_r($result1,true));
       //               fclose($file);
                      
//                       fwrite($file1 , print_r($result1,true));
//                       fclose($file1);
                       //$events2 = json_decode($result1, true);
                      // $a = $events2['displayName'];
                       $b = ("Hello พิมพ์ 1 เพื่อเรียกใช้ฟังก์ชั่น line notify");
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
                      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                      $ch = curl_init($url);
                      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                      $result = curl_exec($ch);
                      curl_close($ch);
                      echo $result . "\r\n";
                      
                }
		// Reply only when message sent is in 'text' format
		  if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
                      $dataa = $event;   
                      $oud = $event['message']['text']; 
                      $name = file_get_contents('name.txt');
                      $name2 = json_decode($name);
                     for ($i=0;$i<=1;$i++){ 
                              if($oud == $name2[$i]) {
                                $replyToken = $event['replyToken'];
                                $messages = [
                                'type' => 'text',
                                'text' => 'เริ่มการทำงานของ line notify'
                                ];
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
                                $result = curl_exec($ch);
                                curl_close($ch);
                                echo $result . "\r\n";
                                $check = 1;
                                }
                   }
                   if ($check == 0){
                                $replyToken = $event['replyToken'];
                                $messages = [
                                'type' => 'text',
                                'text' => 'หยุดการทำงาน line notify'
                                ];
                                $url = 'https://api.line.me/v2/bot/message/reply';
                                $data = [
                                'replyToken' => $replyToken,
                                'messages' => [$messages],
                                ];
                                 echo($data);
                                $post = json_encode($data);
                                 echo($post);
                                $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                                $ch = curl_init($url);
                                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                                $result = curl_exec($ch);
                                curl_close($ch);
                                echo $result . "\r\n";
                                $check = 1;
                   }          
              }
	}
}
echo "OK";
