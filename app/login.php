<?php
require_once '../vendor/autoload.php';

use App\Core\Input;
use App\Classes\InitSmarty;
use App\Core\Redirect;
use App\Core\Session;
use App\Classes\User;
use App\Core\Config;

$smartyInstance = InitSmarty::getInstance();
$smartyInstance->assign('user', $GLOBALS['user']);

$data = [
	'page' => 'login',//mendatory
	'title' => 'Hungry interns',
];

if(Input::get('submit') && Input::isMethod('POST')){
	$errors = false;
	$fields = [];

	//email validation
	$email = valid_input(Input::get('email'));
	$data['email'] = $email;
	if(! $email){
		$data['email_error'] = 'Required field';
		$errors = true;
	}else{
		if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
			$data['email_error'] = 'Invalid email format';
			$errors = true;
		}else{
			$fields['email'] = $email;
		}
	}

	//password validation
	$password = Input::get('password');
	if(! $password){
		$data['password_error'] = 'password is required.';
		$errors = true;
	}else{
		// Validate password strength
		$fields['password'] = $password;
	}
	if(! $errors){
		$user = $GLOBALS['user'];
		$result = $user->login($fields['email'],$fields['password']);
		if($result){
			$login_user = new User(Session::exists(Config::get('session.session_name')));
			switch ($login_user->data()->type) {
				case 'admin':
					unset($login_user);
					Session::flash('success','Login Successfully !');
					Redirect::to(BASE_URL ."/app/admin");
					break;
				case 'student':
					unset($login_user);
					Session::flash('success','Login Successfully !');
					Redirect::to(BASE_URL ."#home");
					break;
				default:
					unset($login_user);
					Redirect::to(BASE_URL ."#home");
					break;
			}
		}else{
			Session::flash('danger','Login Failed');
			Redirect::to(BASE_URL ."#home");
		}
	}
}

$smartyInstance->assign($data);
$smartyInstance->display('index.tpl');