<?php

include "vendor/autoload.php";
include "config/database.php";

use App\Connection;
use App\Todo;

$connObj = new Connection($host, $database, $user, $password);
$connection = $connObj->connect();

$task = new Todo('');
$task->setConnection($connection);
$task->getById(1);
$task->update('Collect wood', 0);

var_dump($task);