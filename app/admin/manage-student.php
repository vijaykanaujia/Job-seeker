<?php
require_once '../../vendor/autoload.php';
require_once BASE_PATH . "/app/middleware/admin.php";

use App\Core\Database;
use App\Classes\InitSmarty;
use App\Core\Input;

$smartyInstance = InitSmarty::getInstance();
$smartyInstance->assign('user', $GLOBALS['user']);

$data = [
	'page' => 'manage-student',//mendatory
	'title' => 'Hungry interns',
];

$page = Input::get('page')? : 1;
$limit = 10;

$start_from = ($page-1) * $limit;

$db = Database::getInstance();
$t = $db->query("SELECT * FROM `students");
$total = $t->count();

$result = $db->query("SELECT students.id,students.user_id,students.first_name,students.last_name,students.email,students.created_at, universities.email as uni_email FROM students LEFT JOIN universities ON students.university_id=universities.id LIMIT {$start_from} , {$limit}");

$data['pagination'] = ['total' => $total, 'page' => $page, 'limit'=> $limit];
$data['students_list'] = $result->results();

$smartyInstance->assign($data);
$smartyInstance->display($redirect_to);