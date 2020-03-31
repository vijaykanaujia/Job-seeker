<?php
require_once '../../vendor/autoload.php';
use App\Core\Database;
use App\Core\Input;

$db = Database::getInstance();
$id = Input::get('id');
$result = $db->delete('universities', ['id','=', $id]);

if($result){
	echo 'success';
}else{
	echo 'failed';
}