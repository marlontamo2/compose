<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
require 'require/imports.php';

echo $ex->read()."<br>";
echo '<b>Username:</b> ' . $user->getUsername() . "<br>";
echo '<b>Email:</b> ' . $user->getEmail() . "<br>";
$userService->addUser(1, "John Doe");
$userService->addUser(2, "Jane Smith");
$userService->removeUser(1);
$userService->listUsers();

