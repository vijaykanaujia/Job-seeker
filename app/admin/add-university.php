<?php
require_once '../../vendor/autoload.php';
require_once BASE_PATH . "/app/middleware/admin.php";

use App\Core\Input;
use App\Core\Database;
use App\Classes\InitSmarty;
use App\Core\Redirect;
use App\Core\Session;

$smartyInstance = InitSmarty::getInstance();
$smartyInstance->assign('user', $GLOBALS['user']);

$data = [
	'page' => 'add-university',//mendatory
	'title' => 'Hungry interns',
];

if(Input::get('submit') && Input::isMethod('POST')){
	$errors = false;
	$fields = [];

	//first name validation
	$name = valid_input(Input::get('name'));
	$data['name'] = $name;
	if(! $name){	
		$data['name_error'] = 'Name Required';
		$errors = true;
	}else{
		if(! preg_match("/^[a-zA-Z ]*$/",$name)){
			$data['name_error'] = 'Only letters and white space allowed';
			$errors = true;
		}else{
			$fields['name'] = $name;
		}
	}

	//email validation
	$email = valid_input(Input::get('email'));
	$data['email'] = $email;

	if(! $email){
		$data['email_error'] = 'Email required';
		$errors = true;
	}else{
		if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
			$data['email_error'] = 'Invalid email format';
			$errors = true;
		}else{
			if(! strpos($email, 'ac.uk')){
				$data['email_error'] = 'please insert format like xx@x.ac.uk';
				$errors = true;
			}else{
				$db = Database::getInstance();
				$query = explode('@', $email);
				$res = $db->query("SELECT * FROM ". TBL_UNIVERSITIES . " WHERE email LIKE '%{$query[1]}'");
				if(! ($res->count() === 0)){
					$data['email_error'] = 'This email already taken';
					$errors = true;
				}else{
					$fields['email'] = $email;
				}
			}
		}
	}

	if(! $errors){
		$db = Database::getInstance();
		$result = $db->insert(TBL_UNIVERSITIES ,$fields);
		if($result){
			Session::flash('success','university created successfully !');
			Redirect::to(BASE_URL ."/app/admin#home");
		}else{
			Session::flash('danger','university creation failed. please try again');
			Redirect::to(BASE_URL ."/app/admin#home");
		}
	}
}

$smartyInstance->assign($data);
$smartyInstance->display($redirect_to);

