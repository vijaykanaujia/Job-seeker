<?php
require_once '../vendor/autoload.php';

use App\Classes\MyCareerjetAPI;
use App\Core\Input;
use App\Classes\InitSmarty;

$smartyInstance = InitSmarty::getInstance();
$smartyInstance->assign('user', $GLOBALS['user']);

$data = [
	'page' => 'search',//mendatory
	'title' => 'Hungry interns',
];

$data['keyword'] = Input::get('keyword') ? : '';
$data['location'] = Input::get('location') ? : '';

$data['search_result'] = MyCareerjetAPI::getSearchResult();

$smartyInstance->assign($data);
$smartyInstance->display('index.tpl');