<?php

$tasks = $database->selectAll('todos');
$tasks = $database->deleteAll('todos');
$tasks = $database->insertAll('todos');

// var_dump($tasks[0]->foobar()); // calling methods of Task class

// var_dump($tasks);

require 'views/index.view.php';