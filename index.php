<?php
require __DIR__ . '/autoload.php';

$users = new \App\Models\User();
$user = $users->findAll();
var_dump($user);