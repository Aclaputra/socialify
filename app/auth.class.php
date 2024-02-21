<?php
interface authInterface {
    public static function register($user);
    public static function login();
}
class auth implements authInterface {
    private static final $db;
    public function __construct($db) {
        self::$db = $db;
    }
    public static function register($user) {
        try {

        } catch (Exception $e) {

        } finally {

        }
    }
    public static function login() {
        echo "login";
    }
}