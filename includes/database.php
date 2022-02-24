<?php 
require('enviroment.php');

$db = mysqli_connect($_ENV["DB_HOST"], 'root', 'MySQL_root01', 'appsalon');
$db->set_charset('utf8');

if (!$db) {
    echo "Error";
    exit;
}