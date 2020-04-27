<?php
require_once '../../vendor/autoload.php';

use App\Core\Input;
use App\Core\Database;
use App\Core\Redirect;
use App\Core\Session;


$data = [];

$errors = false;
$user_fields = [];
$student_fields = [];


//first name validation
$first_name = valid_input(Input::get('first_name'));
if(! $first_name){	
	$data['error']['first_name_error'] = 'First name Required';
	$errors = true;
}else{
	if(! preg_match("/^[a-zA-Z ]*$/",$first_name)){
		$data['error']['first_name_error'] = 'Only letters and white space allowed';
		$errors = true;
	}else{
		$user_fields['first_name'] = $first_name;
		$student_fields['first_name'] = $first_name;
		$data['error']['first_name_error'] = '';
	}
}

//last name
$last_name = valid_input(Input::get('last_name'));	
if($last_name){
	$user_fields['last_name'] = $last_name;
	$student_fields['last_name'] = $last_name;
}

//university email validation
$university_email = valid_input(Input::get('university_email'));
if(! $university_email){
	$data['error']['university_email_error'] = 'Required field';
	$errors = true;
}else{
	if(! filter_var($university_email, FILTER_VALIDATE_EMAIL)){
		$data['error']['university_email_error'] = 'Invalid email format';
		$errors = true;
	}else{
		if(! strpos($university_email, 'ac.uk')){
			$data['error']['university_email_error'] = 'please insert format like xx@x.ac.uk';
			$errors = true;
		}else{
			$db = Database::getInstance();
			$query = explode('@', $university_email);
			$res = $db->query("SELECT * FROM ". TBL_UNIVERSITIES . " WHERE email LIKE '%{$query[1]}'");
			if(($res->count() == 0)){
				$data['error']['university_email_error'] = 'Uh oh! Unfortunately your university is crazy and does not have an active subscription with us. You might want to persuade your university career centre to subscribe to our services, so it\'s student\'s can get free access to our database of thousands of internships. They\'d be mad not to.';
				$errors = true;
			}else{
				$uni_id = $res->results()[0]->id;
				$db = Database::getInstance();
				$res = $db->get(TBL_USERS,['email','=', $university_email]);
				if(! ($res->count() == 0)){
					$data['error']['university_email_error'] = 'You are registered user with us please login and access our job database';
					$errors = true;
				}else{
					$data['error']['university_email_error'] = '';
					$student_fields['university_id'] = $uni_id;
					$user_fields['email'] = $university_email;
					$student_fields['email'] = $university_email;
				}
			}
		}
	}
}


//password validation
$password = Input::get('signup_password');
if(! $password){
	$data['error']['signup_password_error'] = 'password is required.';
	$errors = true;
}else{
	// Validate password strength
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);

	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
		$data['error']['signup_password_error'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
		$errors = true;
	}else{
	    $user_fields['password'] = $password;
	    $data['error']['signup_password_error'] = '';
	}
}

if(! $errors){
	$db = Database::getInstance();
	$result = $db->insert(TBL_USERS, $user_fields);
	if($result){
		$last_insert_id = $db->getLastInsertId();
		$student_fields['user_id'] = $last_insert_id;
		$result = $db->insert(TBL_STUDENTS, $student_fields);
		if($result){
			$data['msg'] = 'User registration successfully !';
			$data['reload_location'] = true;
			$msg = 'click <a style="color:red;" href="{BASE_URL}/app/verify-email.php?email={$university_email}" target="_blank">here</a> to verify your mail.';
			$ml_result = sendMail($university_email,'verify email link',$msg);
			if($ml_result){
				Session::flash('success', 'Thanks for registering, to complete your registration please verify your university email address, by clicking the link we have just sent');
			}else{
				$db->delete('users',['id', '=', $last_insert_id]);
				$data['msg'] = 'Please check your mail is correct';
				$data['reload_location'] = false;
			}
		}else{
			$db->delete('users',['id', '=', $last_insert_id]);
			$data['msg'] = 'User registration adding failed. please try again';
			$data['reload_location'] = false;
		}
	}else{
		$data['msg'] = 'User registration adding failed. please try again';
		$data['reload_location'] = false;
	}
}

echo json_encode($data);
