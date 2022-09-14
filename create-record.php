<?php

include "vendor/autoload.php";
include "config/database.php";

use App\Connection;
use App\Todo;

$connObj = new Connection($host, $database, $user, $password);
$connection = $connObj->connect();
$task = new Todo('');
$task->setConnection($connection);
// $task->save();
$task->getById(1);
$task->update('FOO BAR', 1);
print_r($task);