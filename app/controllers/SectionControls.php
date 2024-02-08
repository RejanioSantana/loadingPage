<?php
namespace app\controllers;
use app\controllers\DataController;

class SectionControls
{
    public static function login(array $array)
    {
        $r =  DataController::login($array);
        if($r == false){
            self::start();
            self::destroy();
            return false;
        }
        self::start();
        self::set("user",$array[0]);
        self::set("password",$array[1]);
        header("Location: ./paniel");
        exit();

    }
    public static function section()
    {
        self::start();
        if (!isset($_SESSION['user']) && !isset($_SESSION['password'])) {
            self::destroy();
            header("Location: ./admin");
            exit;
        }
    }
    public static function start() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $value) {
        self::start();
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        self::start();
        return $_SESSION[$key] ?? null;
    }

    public static function remove($key) {
        self::start();
        unset($_SESSION[$key]);
    }

    public static function destroy() {
        self::start();
        session_destroy();
    }
}