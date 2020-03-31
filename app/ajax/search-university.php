<?php
require_once '../../vendor/autoload.php';
use App\Core\Database;
use App\Core\Input;

$uni_list = [];
$query = Input::get('q')? : '';
$getDbInstance = Database::getInstance();

$label = $getDbInstance->query("SELECT * FROM `universities` WHERE `name` LIKE '%".$query."%'");

if ($label->count() > 0) {
    foreach ($label->results() as $key) {
        $uni_list[] = ['id' => $key->id, 'text' => $key->name];
    }
} else {
    $uni_list[0] = ['id' => '', 'text' => 'No data'];
}

echo json_encode($uni_list);