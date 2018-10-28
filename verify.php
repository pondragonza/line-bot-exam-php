<?php
$proxy = 'proxyurl:port';
$proxyauth = 'username:password';
$access_token = 'ojD9j32WdWq7TrrFt9ZcKZQ8J8QdpF30wrOLwxqBH2jMNciNvld7V9LYROQJ8FLmJAD0vM8mF6DtYpsiuWrA+0ZfvCKcPk8nG8l5CZooVcZ/oTwupq7Du9LN8eyxbhzW6p/Pc1c3/zcjO6q2O9m7OwdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
