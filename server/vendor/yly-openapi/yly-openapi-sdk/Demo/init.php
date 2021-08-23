<?php

include dirname(__DIR__) . '/Lib/Autoloader.php';
use App\Config\YlyConfig;

$grantType = 'client_credentials';      //'client_credentials' 自有型应用; 'authorization_code' 开放型应用
define('GRANTTYPE', $grantType);


$clientId = '';                                       //应用id
$clientSecret = '';             //应用密钥


$config = new YlyConfig($clientId, $clientSecret);
