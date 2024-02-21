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

    public function __construct($fullName, $username, $email, $password) {
        self::$fullName = $fullName;
        self::$username = $username;
        self::$email = $email;
        self::$password = $password;
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