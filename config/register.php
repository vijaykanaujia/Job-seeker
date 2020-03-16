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


//validate valid input value
function valid_input($data) {
  $data = trim($data); //trim extra whitespace
  $data = stripslashes($data); //Remove backslashes (\) from the user input data
  $data = htmlspecialchars($data); //Convert the predefined characters "<" and ">" to HTML entities
  return $data;
}



