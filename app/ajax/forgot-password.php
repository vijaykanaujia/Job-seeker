<?php
require_once '../../vendor/autoload.php';

use App\Core\Input;
use App\Classes\InitSmarty;
use App\Core\Redirect;
use App\Core\Session;
use App\Classes\User;
use App\Core\Config;
use App\Core\Database;

$smartyInstance = InitSmarty::getInstance();
$user = User::getInstance();
$smartyInstance->assign('user', $user);

$data = [];

$errors = false;
$fields = [];
$error_fields = [];

//email validation
$email = valid_input(Input::get('register_email'));

if(! $email){
	$data['error']['register_email_error'] = 'Required field';
	$errors = true;
}else{
	if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
		$data['error']['register_email_error'] = 'Invalid email format';
		$errors = true;
	}else{
		$db = Database::getInstance();
		$res = $db->get('users',['email', '=', $email]);
		if(($res->count() === 0)){
			$data['error']['register_email_error'] = 'This email not exists';
			$errors = true;
		}else{
			$id = $res->results()[0]->id;
		}
	}
}
//new password validation
$new_password = Input::get('new_password');
if(! $new_password){
	$data['error']['new_password_error'] = 'New password is required.';
	$errors = true;
}else{
	// Validate password strength
	$uppercase = preg_match('@[A-Z]@', $new_password);
	$lowercase = preg_match('@[a-z]@', $new_password);
	$number    = preg_match('@[0-9]@', $new_password);
	$specialChars = preg_match('@[^\w]@', $new_password);

	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($new_password) < 8) {
		$data['error']['new_password_error'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
		$errors = true;
	}
}

//confirm password validation
$confirm_password = Input::get('confirm_password');
if(! $confirm_password){
	$data['error']['confirm_password_error'] = 'Confirm password is required.';
	$errors = true;
}else{
	if(! ($new_password == $confirm_password)){
		$data['error']['confirm_password_error'] = 'New password and confirm password not match.';
		$errors = true;
	}else{
		$fields['password'] = $confirm_password;
	}
}

if(! $errors){
	$result = $user->update($fields,$id);
	
	if($result){
		$data['msg'] = 'Password reset successfully';
		$data['hide_form'] = true;
	}else{
		$data['msg'] = 'Password reset Failed';
		$data['hide_form'] = false;
	}
}

echo json_encode($data);