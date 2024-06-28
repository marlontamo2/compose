<?php
use Composition\Compose\Test\Example;
$ex = new Example();
use Composition\Compose\Models\UserModel;
$user = new UserModel('marlon', 'marlon@example.com');
use Composition\Compose\Services\UserService;
$userService = new UserService();
//test123