<?php

require_once '../vendor/autoload.php';
use App\Classes\MyCareerjetAPI;
use App\Core\Input;
$smartyInstance = $GLOBALS['smarty'];

$search_result = MyCareerjetAPI::getSearchResult();

$smartyInstance->assign('search_result',$search_result);
$smartyInstance->assign('assets_url', ASSETS_URL);
$smartyInstance->assign('keyword', Input::get('keyword') ? : '');
$smartyInstance->assign('location',  Input::get('location') ? : '');

$smartyInstance->display('search-result.tpl');
