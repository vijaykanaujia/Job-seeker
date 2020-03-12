<?php
namespace App\Classes;

class InitSmarty{

	private static function SmartyGetInstance(){
		$smarty = new Smarty();
		return $smarty;
	}

	public static function getSmartyInstance(){
		return self::SmartyGetInstance();
	}
}