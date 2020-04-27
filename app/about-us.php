<?php
require_once '../vendor/autoload.php';

use App\Core\Input;
use App\Classes\InitSmarty;
use App\Core\Redirect;
use App\Core\Session;
use App\Classes\User;
use App\Core\Config;

$smartyInstance = InitSmarty::getInstance();
$user = User::getInstance();
$smartyInstance->assign('user', $user);
unset($user);

$data = [
	'page' => 'about-us',//mendatory
	'title' => 'Hungry interns',
];


$smartyInstance->assign($data);
$smartyInstance->display('index.tpl');