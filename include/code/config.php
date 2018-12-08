<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

session_start();

//echo "Included";

define('SERVER_ROOT', $_SERVER["DOCUMENT_ROOT"]);
define('ROOT', SERVER_ROOT . "/");

define('THIS_DATE', date('Y m d'));
define('THIS_TIME', time());
define('THIS_YEAR', date('Y'));
define('THIS_MONTH', date('m'));
define('THIS_DAY', date('d'));

define('DB_SERVER', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');

function myautoloader($classname) {
    require_once ROOT . 'include/classes/' . $classname . '.php';
}
spl_autoload_register('myautoloader');

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$conn->set_charset("utf8");
