<?php
require 'config.php';

$url = sprintf("%s/%s/",$baseUrl,"kicking-rule");

$data['appid'] = '';
$data['cname'] = 'demo';
$data['uid']   = '1000';
$data['time']  = '1440';

$jsonData = json_encode($data);

$ch = curl_init();
curl_setopt($ch,CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $userName . ":" . $password);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);

var_dump($result);

