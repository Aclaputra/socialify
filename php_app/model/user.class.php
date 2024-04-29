<?php

interface userInterface {
    public function getName(): ?string;
    public function getUser(): ?string;
    public function getEmail(): ?string;
    public function getPassword(): ?string;
    public function getUsername(): ?string;
}
class user implements userInterface {
    private ?string $email;
    private ?string $password;
    private ?string $name;
    private ?string $username;
    private ?string $biography;
    private ?string $birthDate;
    private ?string $location;
    private ?int $age;
    private ?string $ipAdress;

    public function __construct($email, $pass, $name, $username) {
        $tempIp = '127.0.0.1';
        $this->email = $email;
        $this->password = hash('sha256', $pass);
        $this->name = $name;
        $this->username = $username;
        $this->ipAdress = md5($tempIp);
    }
    public function getName(): ?string {
        return $this->name;
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
    public function getUsername(): ?string {
        return $this->username;
    }
    public function getIpAdress(): ?string {
        return $this->ipAdress;
    }
}