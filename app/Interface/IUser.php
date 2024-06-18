<?php
namespace Composition\Compose\Interface;

interface IUser {
    public function getUsername(): string;
    public function setUsername(string $username): void;
    public function getEmail(): string;
    public function setEmail(string $email): void;
}

