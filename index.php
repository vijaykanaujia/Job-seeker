<?php
use App\Core\Config;
use App\Classes\Careerjet_API;
use App\Classes\MyCareerjetAPI;
require_once 'vendor/autoload.php';

$smarty = new Smarty;

$search_result = MyCareerjetAPI::getSearchResult();

$smarty->assign('search_result',$search_result);

$smarty->display(BASE_PATH.'/templates/index.tpl');

