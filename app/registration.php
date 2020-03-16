<?php
require_once '../vendor/autoload.php';

use App\Classes\MyCareerjetAPI;
use App\Core\Input;
use App\Core\Database;
use App\Classes\InitSmarty;
use App\Core\Redirect;
use App\Core\Session;

$smartyInstance = InitSmarty::getInstance();

$data = [
	'page' => 'registration',//mendatory
	'title' => 'Hungry interns',
];

if(Input::get('submit') && Input::isMethod('POST')){
	$errors = false;
	$fields = [];

	//first name validation
	$first_name = valid_input(Input::get('first_name'));
	$data['first_name'] = $first_name;
	if(! $first_name){	
		$data['first_name_error'] = 'First name Required';
		$errors = true;
	}else{
		if(! preg_match("/^[a-zA-Z ]*$/",$first_name)){
			$data['first_name_error'] = 'Only letters and white space allowed';
			$errors = true;
		}else{
			$fields['first_name'] = $first_name;
		}
	}
	
	//last name
	$last_name = valid_input(Input::get('last_name'));	
	$data['last_name'] = $last_name;
	if($last_name){
		$fields['last_name'] = $last_name;
	}

	//email validation
	$email = valid_input(Input::get('email'));
	$data['email'] = $email;
	if(! $email){
		$data['email_error'] = 'Required, invalid email format';
		$errors = true;
	}else{
		if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
			$data['email_error'] = 'Invalid email format';
			$errors = true;
		}else{
			$db = Database::getInstance();
			$res = $db->get('users',['email', '=', $email]);
			if(! ($res->count() === 0)){
				$data['email_error'] = 'This email already taken';
				$errors = true;
			}else{
				$fields['email'] = $email;
			}
		}
	}

	//password validation
	$password = Input::get('password');
	if(! $password){
		$data['password_error'] = 'password is required.';
		$errors = true;
	}else{
		// Validate password strength
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number    = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);

		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
			$data['password_error'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
			$errors = true;
		}else{
		    $fields['password'] = $password;
		}
	}

	if(! $errors){
		$db = Database::getInstance();
		$result = $db->insert('users',$fields);
		if($result){
			Session::flash('success','User registration successfully !');
			Redirect::to(BASE_URL ."#home");
		}else{
			Session::flash('danger','User registration failed. please try again');
			Redirect::to(BASE_URL);
		}
	}
}

$smartyInstance->assign($data);
$smartyInstance->display('index.tpl');
