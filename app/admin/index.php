<?php
require_once '../../vendor/autoload.php';
require_once BASE_PATH . "/app/middleware/admin.php";

use App\Classes\MyCareerjetAPI;
use App\Core\Input;
use App\Classes\InitSmarty;
use App\Core\Session;
use App\Core\Database;

$smartyInstance = InitSmarty::getInstance();
$smartyInstance->assign('user', $GLOBALS['user']);


$data = [
	'page' => 'home',//mendatory
	'title' => 'Hungry interns'
];

$db = Database::getInstance();
$u = $db->query('SELECT * FROM `universities`');
$data['universities'] = $u->count();

$s = $db->query('SELECT * FROM `users`');
$data['students'] = $s->count();

if(isset($_SESSION['success'])){
	$data['success'] = Session::flash('success');
}
if(isset($_SESSION['danger'])){
	$data['danger'] = Session::flash('danger');
}

$smartyInstance->assign($data);
$smartyInstance->display($redirect_to);