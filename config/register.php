<?php
// base directory
$base_dir = __DIR__;

// server protocol
$protocol = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';

// domain name
$domain = $_SERVER['SERVER_NAME'];

// script name
$script_name = rtrim($_SERVER['PHP_SELF'],'/index.php');

//base url
$base_url = $protocol . $domain . $script_name;

define('BASE_PATH',rtrim($base_dir,'\config'));

define('BASE_URL',$base_url);
define('ASSETS_URL',$base_url."/assets");

