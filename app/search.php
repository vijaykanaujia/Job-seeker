<?php
require_once '../vendor/autoload.php';

use App\Classes\MyCareerjetAPI;
use App\Core\Input;
use App\Classes\InitSmarty;

$user = $GLOBALS['user'];
$smartyInstance = InitSmarty::getInstance();
$smartyInstance->assign('user', $user);

$data = [
	'page' => 'search',//mendatory
	'title' => 'Hungry interns',
];

$data['keyword'] = Input::get('keyword') ? : '';
$data['location'] = Input::get('location') ? : '';

if($user->isLoggedIn()){
	$pagesize = 10;
	$url_is_active = true;
	$show_pagination = true;
}else{
	$pagesize = 3;
	$url_is_active = false;
	$show_pagination = false;
}


$data['search_result'] = MyCareerjetAPI::getSearchResult($pagesize, $url_is_active, $show_pagination);

$smartyInstance->assign($data);
$smartyInstance->display('index.tpl');