<?php
require_once 'vendor/autoload.php';

require_once BASE_PATH . '/app/middleware/student.php';

use App\Classes\MyCareerjetAPI;
use App\Core\Input;
use App\Classes\InitSmarty;
use App\Core\Session;

$smartyInstance = InitSmarty::getInstance();
$smartyInstance->assign('user', $GLOBALS['user']);


$data = [
	'page' => 'home',//mendatory
	'title' => 'Hungry interns'
];

if(isset($_SESSION['success'])){
	$data['success'] = Session::flash('success');
}
if(isset($_SESSION['danger'])){
	$data['danger'] = Session::flash('danger');
}

$smartyInstance->assign($data);
$smartyInstance->display($redirect_to);

