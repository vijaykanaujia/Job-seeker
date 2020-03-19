<?php
require_once '../../vendor/autoload.php';
use App\Classes\GuestUser;
use App\Classes\User;

$userInstance = $GLOBALS['user'];
if($userInstance->isLoggedIn()){
	echo "close";
}else{
	$guestUserInstance = new GuestUser;
	if($guestUserInstance->exists()){
		$data = $guestUserInstance->data();
		$searchableTime = time() - strtotime($data->created_at);
		if($searchableTime >= 60 ){
			echo "open";
		}else{
			echo "close";
		}		
	}
}