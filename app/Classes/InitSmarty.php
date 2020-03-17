<?php
namespace App\Classes;
use Smarty;
class InitSmarty{
	private static $_instance = null;

	public static function getInstance(){
		if (!isset(self::$_instance))
        {
            self::$_instance = new Smarty();
            self::$_instance->setTemplateDir(BASE_PATH . "/templates")
			->setCompileDir(BASE_PATH . "/templates_c")
			->setCacheDir(BASE_PATH . "/cache");
        }

        return self::$_instance;
	}
}