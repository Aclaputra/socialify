<?php

interface userInterface {
    public static function getFullName(): string;
    public static function getUser(): string;
    public static function getEmail(): string;
    public static function getPassword(): string;
}
class user implements userInterface {
    private static string $fullName;
    private static string $username;
    private static string $email;
    private static string $password;
    private static string $ipAdress;

    public function __construct($fullName, $username, $email, $password) {
        $tempIp = '127.0.0.1';
        self::$fullName = $fullName;
        self::$username = $username;
        self::$email = $email;
        self::$password = $password;
        self::$ipAddress = $tempIp;
    }
    public static function getFullName(): string {
        return self::$fullName;
    }
    public static function getUser(): string {
        return self::$username;
    }
    public static function getEmail(): string {
        return self::$email;
    }
    public static function getPassword(): string {
        return self::$password;
    }
}