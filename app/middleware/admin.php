<?php
use App\Core\Redirect;
$admin_middle_user = $GLOBALS['user'];
if($admin_middle_user->isLoggedIn()){
	if(! ($admin_middle_user->data()->type == 'admin')){
		$redirect_to = "errors/401.tpl";
		define('HOME_URL',BASE_URL);
	}else{
		$redirect_to = "admin/index.tpl";
		define('HOME_URL',BASE_URL . '/app/admin');
	}
}else{
	Redirect::to(BASE_URL);
}

unset($admin_middle_user);
