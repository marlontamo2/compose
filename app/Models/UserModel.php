<?php
namespace Composition\Compose\Models;

use Composition\Compose\Interface\IUser;

class UserModel implements IUser {
    private string $username;
    private string $email;

    public function __construct(string $username = '', string $email = '') {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }
}
