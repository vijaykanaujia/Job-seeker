<?php
// base directory
$base_dir = __DIR__;

// server protocol
$protocol = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';

// domain name
$domain = $_SERVER['SERVER_NAME'];

define('BASE_PATH',rtrim($base_dir,'\config'));

$folder = explode('\\', BASE_PATH);

//base url
$base_url = $protocol . $domain . "/". end($folder);

define('BASE_URL',$base_url);
define('ASSETS_URL',$base_url."/assets");



