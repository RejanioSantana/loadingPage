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
    public static function login($email)
    {
        $bd = new DataBase();
        $datas =  $bd->datasAdmin($email);
        return $datas;
    }
    public static function datasUpadate(array $array)
    {
        
        self::movieFile();
        $db = new DataBase();
        $r = $db->updateDatas($array);
        if($r){
                header("Location: ./paniel");
            };
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
        if($_FILES["icon-1"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon-1"]["name"];
            $tmp_name = $_FILES["icon-1"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon1" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon-2"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon-2"]["name"];
            $tmp_name = $_FILES["icon-2"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon2" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon-3"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon-3"]["name"];
            $tmp_name = $_FILES["icon-3"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon3" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon-4"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon-4"]["name"];
            $tmp_name = $_FILES["icon-4"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon4" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon-5"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon-5"]["name"];
            $tmp_name = $_FILES["icon-5"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon5" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
        if($_FILES["icon-6"]["error"] == UPLOAD_ERR_OK){
            $name = $_FILES["icon-6"]["name"];
            $tmp_name = $_FILES["icon-6"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = "icon6" .'.'. $extension;
            move_uploaded_file($tmp_name,'assets/img/' . $newName);
        }
    }
}