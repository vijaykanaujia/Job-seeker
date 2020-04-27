<?php
require_once '../../vendor/autoload.php';

use App\Core\Input;
use App\Classes\InitSmarty;
use App\Core\Redirect;
use App\Core\Session;
use App\Classes\User;
use App\Core\Config;

$smartyInstance = InitSmarty::getInstance();
$user = User::getInstance();
$smartyInstance->assign('user', $user);

$data = [];

$errors = false;
$fields = [];
$error_fields = [];

//email validation
$email = valid_input(Input::get('email'));

if(! $email){
	$data['error']['email_error'] = 'Required field';
	$errors = true;
}else{
	if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
		$data['error']['email_error'] = 'Invalid email format';
		$errors = true;
	}else{
		$fields['email'] = $email;
	}
}

//password validation
$password = Input::get('password');
if(! $password){
	$data['error']['password_error'] = 'password is required.';
	$errors = true;
}else{
	// Validate password strength
	$fields['password'] = $password;
}
if(! $errors){
	$result = $user->login($fields['email'],$fields['password']);
	if($result['login'] && $result['is_mail_verify']){
		$login_user = new User(Session::exists(Config::get('session.session_name')));
		switch ($login_user->data()->type) {
			case 'admin':
				unset($login_user);
				$data['msg'] = 'Login Successfully !';
				$data['reload_location'] = BASE_URL ."/app/admin";
				break;
			case 'student':
				unset($login_user);
				$data['msg'] = 'Login Successfully !';
				$data['reload_location'] = BASE_URL;
				break;
			default:
				unset($login_user);
				$data['reload_location'] = BASE_URL;
				break;
		}
	}elseif(! $result['login'] && $result['is_mail_verify']){
		$data['msg'] = 'Login Failed';
		$data['reload_location'] = BASE_URL;
	}
	else{
		$data['msg'] = 'Your email id is not verified !';
		$data['reload_location'] = BASE_URL;
	}
}

echo json_encode($data);