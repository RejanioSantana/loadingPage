<?php
namespace app\controllers;
use app\models\DataBase;

class DataController
{
    public static function datas()
    {
        $bd = new DataBase();
        $r = $bd->query("SELECT * FROM data");
        return $r ;
    }
    public static function login(array $array)
    {
        $bd = new DataBase();
        $r = $bd->queryParam(
            "SELECT * FROM users WHERE user = ? and password = ?",$array);
        return $r;
    }
    public static function datasUpadate(array $array)
    {
        $db = new DataBase();
        $r = $db->updateDatas($array);
        if($r){
            echo "lista atualizada";
            header("Location: ./");
        };
    }
}