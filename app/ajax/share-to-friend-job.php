<?php
require_once '../../vendor/autoload.php';

use App\Core\Input;

$errors = false;
$data = [];

$job_url = valid_input(Input::get('job_url'));

//your name validation
$your_name = valid_input(Input::get('your_name'));
if(! $your_name){	
	$data['error']['your_name_error'] = 'Name Required';
	$errors = true;
}else{
	if(! preg_match("/^[a-zA-Z ]*$/",$your_name)){
		$data['error']['your_name_error'] = 'Only letters and white space allowed';
		$errors = true;
	}else{
		$data['error']['your_name_error'] = '';
	}
}
//my email validation
$friend_email = valid_input(Input::get('friend_email'));
if(! $friend_email){
	$data['error']['friend_email_error'] = 'Required field';
	$errors = true;
}else{
	if(! filter_var($friend_email, FILTER_VALIDATE_EMAIL)){
		$data['error']['friend_email_error'] = 'Invalid email format';
		$errors = true;
	}else{
		$data['error']['friend_email_error'] = '';
	}
}

if(! $errors){
	$to = $friend_email;
	$subject = $your_name . ' share job for you';
	$message = '<a href="'.$job_url.'" target="_blank">'.$job_url.'</a>';

	$res = sendMail($to, $subject, $message);

	if($res){
		$data['msg'] = "Job Shared";
		$data['hide_form'] = true;
	}else{
		$data['msg'] = "Something went Wrong Please check your friend's email is correct";
		$data['hide_form'] = false;
	}
}

echo json_encode($data);