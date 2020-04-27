<?php
require_once 'vendor/autoload.php';
use App\Classes\Careerjet_API;
use App\Classes\MyCareerjetAPI;
$api = new Careerjet_API();
$result = $api->search(['affid' => '5704082add03b271cfad611e8cd277c7']);

dd($result);