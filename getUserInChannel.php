<?php
require 'config.php';

$appId = "";
$cname = "demo";
$url = sprintf("%s/%s/%s/%s/%s",$baseUrl,"channel","user",$appId,$cname);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, $userName . ":" . $password);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
$result = curl_exec($ch);
curl_close($ch);

var_dump($result);