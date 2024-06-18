<?php
namespace Composition\Compose\Services;

use Composition\Compose\Traits\LoggerTrait;

class UserService {
    use LoggerTrait;

    private $users = [];

    // Add a user
    public function addUser($userId, $userName) {
        $this->users[$userId] = $userName;
        $this->logUserActivity($userId, "Added user $userName");
    }

    // Remove a user
    public function removeUser($userId) {
        if (isset($this->users[$userId])) {
            $userName = $this->users[$userId];
            unset($this->users[$userId]);
            $this->logUserActivity($userId, "Removed user $userName");
        } else {
            $this->logUserActivity($userId, "Attempted to remove non-existent user");
        }
    }

    // List all users
    public function listUsers() {
       
        $this->logMessage("performed activity: Listed all users.");
        foreach ($this->users as $userId => $userName) {
            echo "User ID: $userId, User Name: $userName" . PHP_EOL;
        }
    }
}


