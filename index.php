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
echo"<hr>";
 //test123
//  $env =["GITHUB_CLIENT_ID"=> githubclient,
//  "GITHUB_CLIENT_SECRET"=> githubsecret,
$env = file(__DIR__.'/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($env as $value)
{
  $value = explode('=', $value);
  define($value[0], $value[1]);
  
}
echo constant("GITHUB_CLIENT_ID")."<br>";
echo constant("GITHUB_CLIENT_SECRET");