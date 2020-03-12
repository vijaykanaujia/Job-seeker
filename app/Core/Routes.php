<?php
namespace App\Core;

use App\Core\Redirect;
class Routes
{
	public static function get(){
		$routes = $GLOBALS['routes'];
		$page = '404.php';	
		$self = substr( $_SERVER['REQUEST_URI'] , 1 , strlen ( $_SERVER['REQUEST_URI'] ) );

		if($_SERVER['HTTP_HOST'] == "localhost"){
			$self = explode('/', $self);
			unset($self[0]);
			$self = implode('/', $self);
			$self = $self ? : '/';
		}
		$request_uri = explode('?', $self);
		
		foreach( $routes as $key => $value ) {
			if ( preg_match( $key , $request_uri[0] ) ) {
				$page = $value;
				break;
			}
		}
		return $page;
	}

}