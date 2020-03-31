<?php

$admin_middle_user = $GLOBALS['user'];

if($admin_middle_user->isLoggedIn()){
	if(!($admin_middle_user->data()->type == 'student')){
		$redirect_to = "errors/401.tpl";
		define('HOME_URL',BASE_URL . '/app/admin');
	}else{
		$redirect_to = "index.tpl";
		define('HOME_URL',BASE_URL);
	}
}else{
	$redirect_to = "index.tpl";
}

unset($admin_middle_user);