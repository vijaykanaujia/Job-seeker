<?php
use App\Core\Routes;

require_once 'vendor/autoload.php';

$page = Routes::get();
echo $page;
die;

include BASE_PATH . '/' . $page;