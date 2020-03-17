<?php
use App\Classes\User;
use App\Core\Session;
use App\Core\Config;

session_start();
$data = [];
$user_session = Session::exists(Config::get('session.session_name'));
$user = new User($user_session ? Session::get(Config::get('session.session_name')) : '');
$GLOBALS['user'] = $user;