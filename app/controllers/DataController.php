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
    public static function delIcon($id)
    {
            $f = new DataBase();
            $local = $f->locationIcon($id);
            if(file_exists($local['url'])){
                $result = unlink($local['url']);
                if($result){
                    $result = $f->delIcon($id);
                    if($result){
                        Redirect::to('adminEdit');
                        exit;
                    }
                }
            }
            Redirect::to('adminEdit');
            exit;
    }
    public static function capturiesList()
    {
        $emailsPorPagina = 1;
        $paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
        $offset = ($paginaAtual - 1) * $emailsPorPagina;
        $offset = 10;
        $r = new DataBase();
        $result = $r->capturies($emailsPorPagina,$offset);
        return $result;
    }

}