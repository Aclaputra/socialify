<?php

interface userInterface {
    public function getFullName(): ?string;
    public function getUser(): ?string;
    public function getEmail(): ?string;
    public function getPassword(): ?string;
}
class user implements userInterface {
    private ?string $fullName = "";
    private ?string $username = "";
    private ?string $email = "";
    private ?string $password = "";
    private ?string $ipAdress = "";

    public function __construct($fullName, $username, $email, $password) {
        $tempIp = '127.0.0.1';
        $this->fullName = $fullName;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->ipAddress = $tempIp;
    }
    public function getFullName(): ?string {
        return $this->fullName;
    }
    public function getUser(): ?string {
        return $this->username;
    }
    public function getEmail(): ?string {
        return $this->email;
    }
    public function getPassword(): ?string {
        return $this->password;
    }
}