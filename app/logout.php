<?php
require_once '../vendor/autoload.php';

use App\Classess\User;
use App\Core\Redirect;
use App\Core\Session;

$user = $GLOBALS['user'];
$user->logout();
Session::flash('success','Logout Successfully');
Redirect::to(BASE_URL . "#home");

