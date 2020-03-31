<?php
require_once '../../vendor/autoload.php';
require_once BASE_PATH . "/app/middleware/admin.php";

use App\Core\Input;
use App\Core\Database;
use App\Classes\InitSmarty;
use App\Core\Redirect;
use App\Core\Session;
use App\Classes\User;

$smartyInstance = InitSmarty::getInstance();
$userInstance = User::getInstance();
$smartyInstance->assign('user', $userInstance);

$data = [
	'page' => 'add-student',//mendatory
	'title' => 'Hungry interns',
];

if(Input::get('submit') && Input::isMethod('POST')){
	$errors = false;
	$user_fields = [];
	$student_fields = [];


	//university mail validation
	$university_id = valid_input(Input::get('university_id'));	
	$data['university_id'] = $university_id;
	if(! $university_id){
		$data['university_id_error'] = 'university Required';
		$errors = true;	
	}else{
		$student_fields['university_id'] = $university_id;
	}

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
			$user_fields['first_name'] = $first_name;
			$student_fields['first_name'] = $first_name;
		}
	}
	
	//last name
	$last_name = valid_input(Input::get('last_name'));	
	$data['last_name'] = $last_name;
	if($last_name){
		$user_fields['last_name'] = $last_name;
		$student_fields['last_name'] = $last_name;
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
				$user_fields['email'] = $email;
				$student_fields['email'] = $email;
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
		    $user_fields['password'] = $password;
		}
	}

	if(! $errors){
		$db = Database::getInstance();
		$result = $db->insert('users',$user_fields);
		if($result){
			$last_insert_id = $db->getLastInsertId();
			$student_fields['user_id'] = $last_insert_id;
			$result = $db->insert('students',$student_fields);
			if($result){
				Session::flash('success','Student added successfully !');
				Redirect::to(HOME_URL ."#home");
			}else{
				$db->delete('users',['id', '=', $last_insert_id]);
				Session::flash('danger','Student adding failed. please try again');
				Redirect::to(HOME_URL ."#home");
			}
		}else{
			Session::flash('danger','Student adding failed. please try again');
			Redirect::to(HOME_URL ."#home");
		}
	}
}

$smartyInstance->assign($data);
$smartyInstance->display($redirect_to);

