<?php

include "vendor/autoload.php";
include "config/database.php";

use App\Connection;
use App\Todo;

$connObj = new Connection($host, $database, $user, $password);
$connection = $connObj->connect();

$task = new Todo('');
$task->setConnection($connection);
$todos = $task->getAll();

foreach ($todos as $item) {
	echo $item['task'] . ' is_completed=' . $item['is_completed'] . "\n";
}