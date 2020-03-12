<?php

use App\Classes\InitSmarty;
use App\Classes\MyCareerjetAPI;

//$smartyInstance = InitSmarty::getSmartyInstance();
$smartyInstance = new Smarty;

$search_result = MyCareerjetAPI::getSearchResult();

$smartyInstance->assign('search_result',$search_result);
$smartyInstance->assign('assets_url', ASSETS_URL);

$smartyInstance->display(BASE_PATH.'/templates/index.tpl');
