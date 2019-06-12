<?php

require("test/phpMQTT.php");

$server = "tcp://10.0.20.1";     // change if necessary
$port = 1883;                     // change if necessary
$username = "carparkmqtt";                   // set your username
$password = "carparkmqtt";                   // set your password
$client_id = "phpMQTT-publisher"; // make sure this is unique for connecting to sever - you could use uniqid()

$mqtt = new phpMQTT($server, $port, $client_id);

if ($mqtt->connect(true, NULL, $username, $password)) {
	$mqtt->publish("bluerhinos/phpMQTT/examples/publishtest", "Hello World! at " . date("r"), 0);
	$mqtt->close();
} else {
    echo "Time out!\n";
}
