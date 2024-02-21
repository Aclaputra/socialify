<?php

interface authInterface {
    public static function register($data);
    public static function login();
}
class auth implements authInterface {
    public static function register($data) {
        echo $data['email'] . ' ' . $data['password'];
    }
    public static function login() {
        echo "login";
    }
}