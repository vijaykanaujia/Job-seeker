<?php
require_once '../../vendor/autoload.php';
require_once BASE_PATH . "/app/middleware/admin.php";

use App\Core\Database;
use App\Classes\InitSmarty;
use App\Core\Input;

$smartyInstance = InitSmarty::getInstance();
$smartyInstance->assign('user', $GLOBALS['user']);

$data = [
	'page' => 'manage-university',//mendatory
	'title' => 'Hungry interns',
];

$page = Input::get('page')? : 1;
$limit = 10;

$start_from = ($page-1) * $limit;

$db = Database::getInstance();
$t = $db->query("SELECT * FROM `universities");
$total = $t->count();

$result = $db->query("SELECT * FROM `universities` LIMIT {$start_from} , {$limit}");
$data['pagination'] = ['total' => $total, 'page' => $page, 'limit'=> $limit];
$data['universities_list'] = $result->results();

$smartyInstance->assign($data);
$smartyInstance->display($redirect_to);