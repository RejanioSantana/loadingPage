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
        
        self::movieFile();
        // $db = new DataBase();
        // $r = $db->updateDatas($array);
        // if($r){
            //     header("Location: ./paniel");
            // };
    }
    private static function movieFile()
    {
        if($_FILES["bg"]["error"] == UPLOAD_ERR_OK){
            $file = $_FILES["bg"];
            $name = $_FILES["name"];
            $tmp_name = $_FILES["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "background" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
    }
}