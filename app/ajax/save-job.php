<?php
require_once '../../vendor/autoload.php';

use App\Core\Input;

$errors = false;
$data = [];

//my email validation
$my_email = valid_input(Input::get('my_email'));
$job_url = valid_input(Input::get('job_url'));

if(! $my_email){
	$data['error']['my_email_error'] = 'Required field';
	$errors = true;
}else{
	if(! filter_var($my_email, FILTER_VALIDATE_EMAIL)){
		$data['error']['my_email_error'] = 'Invalid email format';
		$errors = true;
	}else{
		$data['error']['my_email_error'] = '';
	}
}

if(! $errors){
	$to = $my_email;
	$subject = 'Saved Job';
	$message = '<a href="'.$job_url.'" target="_blank">'.$job_url.'</a>';

	$res = sendMail($to, $subject, $message);

	if($res){
		$data['msg'] = "Job Saved";
		$data['hide_form'] = true;
	}else{
		$data['msg'] = "Something went Wrong Please check your email is correct";
		$data['hide_form'] = false;
	}
}

echo json_encode($data);