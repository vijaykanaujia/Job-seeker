<?php
// base directory
$base_dir = __DIR__;

// server protocol
$protocol = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';

// domain name, Host name
$domain = $_SERVER['SERVER_NAME'];

define('BASE_PATH',rtrim($base_dir,'\config'));

if($domain == 'localhost'){
	$folder = explode('\\', BASE_PATH);
	//base url
	$base_url = $protocol . $domain . "/". end($folder);
}else{
	$base_url = $protocol . $domain;
}


define('BASE_URL',$base_url);
define('ASSETS_URL',$base_url."/assets");
define('TBL_USERS','users');
define('TBL_UNIVERSITIES','universities');
define('TBL_STUDENTS','students');
define('TBL_VISITORS','visitors');



//validate valid input value
function valid_input($data) {
  $data = trim($data); //trim extra whitespace
  $data = stripslashes($data); //Remove backslashes (\) from the user input data
  $data = htmlspecialchars($data); //Convert the predefined characters "<" and ">" to HTML entities
  return $data;
}

function dd(...$agrs){
	foreach ($agrs as $data) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	exit();
}

function sendMail(string $to, string $subject, string $message){
	$to = $to;
	$subject = $subject;
	$message = $message;
	$header = '';
	$header .= "MIME-Version: 1.0\r\n";
 	$header .= "Content-type: text/html\r\n";
 	$success = mail ($to, $subject, $message, $header);
 	if(! $success) {
		return false;
	}else{
		return true;
	}	
}

function oldJobeOrNew($jobDate){
	$now = new DateTime();
	$jobDate = new DateTime($jobDate);
	$diff = $now->diff($jobDate);
	if($diff->y == 0){
		return 'new';
	}else{
		return 'old';
	}
}






