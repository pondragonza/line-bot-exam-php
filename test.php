$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('2/ktZPikCIG3ZL076jYYNfe3mAg5TQ55Uz/GoA6dILTTUClIvRILXa/o96Lp8gfcLH5q2dxJeVtiHq8NZ5mNCHtH8VBUKzKfNBxIpMKZnn1XFCTFp/pTOwydGaGPvP0eFvZDsizHoFIRbWFTqYowyQdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['<channel secret>' => '6d55c36fd534e5266875bc21a5674292']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('5d03e92c56634888bf818f01127d5618', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
