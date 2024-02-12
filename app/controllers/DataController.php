<?php
namespace app\controllers;

use app\classes\Redirect;
use app\models\DataBase;

class DataController
{
    public static function datas()
    {
        $bd = new DataBase();
        $r = $bd->datas();
        return $r ;
    }
    public static function login($email)
    {
        $bd = new DataBase();
        $datas =  $bd->datasAdmin($email);
        return $datas;
    }
    public static function datasUpadate()
    {
        $array = $_POST;
        $db = new DataBase();
        $r = $db->updateDatas($array);
        if($r){
                header("Location: ./paniel");
                exit;
            };
    }
    public static function uploadIcon()
    {
        
        $description_icone = $_POST["name_icone"];
        
        if($_FILES["new_icone"]["error"] == UPLOAD_ERR_OK){

            $name = $_FILES["new_icone"]["name"];
            $tmp_name = $_FILES["new_icone"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = uniqid() .'.'. $extension;
            $f = new DataBase();
            $local = 'assets/img/' . $newName;
            $result = $f->insertIcon($local,$description_icone);
            if($result){
                move_uploaded_file($tmp_name,'assets/img/' . $newName);
                Redirect::to('adminEdit');
                exit;
            }
            Redirect::to('adminEdit');
            exit;

        }
    }
    private static function movieFile()
    {
        // if($_FILES["bg"]["error"] == UPLOAD_ERR_OK){
        //     $name = $_FILES["bg"]["name"];
        //     $tmp_name = $_FILES["bg"]["tmp_name"];
        //     $extension = pathinfo($name,PATHINFO_EXTENSION);
        //     $newName = "background" .'.'. $extension;
        //     move_uploaded_file($tmp_name,'assets/img/' . $newName);
        // }
    }
}