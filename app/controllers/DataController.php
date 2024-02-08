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
            $name = $_FILES["bg"]["name"];
            $tmp_name = $_FILES["bg"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "background" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon1"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon1"]["name"];
            $tmp_name = $_FILES["icon1"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon1" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon2"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon2"]["name"];
            $tmp_name = $_FILES["icon2"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon2" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon3"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon3"]["name"];
            $tmp_name = $_FILES["icon3"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon3" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon4"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon4"]["name"];
            $tmp_name = $_FILES["icon4"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon4" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon5"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon5"]["name"];
            $tmp_name = $_FILES["icon5"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon5" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon6"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon6"]["name"];
            $tmp_name = $_FILES["icon6"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon6" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
    }
}