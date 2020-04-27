<?php
require_once '../vendor/autoload.php';

use App\Core\Input;
use App\Classes\User;
use App\Core\Session;
use App\Core\Redirect;

$email = Input::get('email');

$userInstance = User::getInstance();

$result = $userInstance->find($email);
if($result){
	$res = $userInstance->update(['is_mail_verify' => 'yes'], $userInstance->data()->id);
	if($res){
		echo "<script>alert('thank you !');</script>";
		echo "<script>window.close();</script>";
	}else{
		dd('Something Went wrong!');
	}
	
}else{
	dd('Something Went wrong!');
}

