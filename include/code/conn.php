<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');


session_start();


$project_name = ""; // PROJECT NAME

define('SERVER_ROOT', $_SERVER["DOCUMENT_ROOT"]);
define('ROOT', SERVER_ROOT . "/");

define('THIS_DATE', date('Y m d'));
define('THIS_TIME', time());
define('THIS_YEAR', date('Y'));
define('THIS_MONTH', date('m'));
define('THIS_DAY', date('d'));

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pewi13.wi8');
define('DB_PASSWORD', 'zpkk2345');
define('DB_DATABASE', 'pewi13_wi8_sde_dk');

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$conn->set_charset("utf8");