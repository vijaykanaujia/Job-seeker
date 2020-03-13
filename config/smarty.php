<?php

$smarty = new Smarty();

$smarty->setTemplateDir(BASE_PATH . "/templates")
		->setCompileDir(BASE_PATH . "/templates_c")
		->setCacheDir(BASE_PATH . "/cache");

$GLOBALS['smarty'] = $smarty;