<?php


$access_token = 'v8ZeLFUyG6JfMw7rYvZybHnI89Q8JABiucAvJ3SU1F/QBkGmt2G30TOENwICIhcmBkHFQ0nbiQLpuYPsmiwRKUXxxJWO/nqWUb+Dm+lmBXKhN6X3z2UTu+xOoGDmC5WeCDQ0zPRLUV/DwE6rmly26AdB04t89/1O/w1cDnyilFU=';

$userId = 'U440df8f5d0462b99d170bf9effbcd26a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

