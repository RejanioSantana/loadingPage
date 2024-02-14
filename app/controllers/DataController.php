<?php
namespace app\controllers;

use app\classes\Redirect;
use app\models\DataBase;
use Exception;

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
        $r = new DataBase();
        $total_page = $r->capturiesCountPages();
        $total_page = $total_page["total_de_paginas"] ;
        $emailsPorPagina = (intval($total_page) > 10) ? 10 : $total_page ;
        $paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
        $offset = ($paginaAtual - 1) * $emailsPorPagina;
        $result = $r->capturies($emailsPorPagina,$offset);
        $total_page = (intval($total_page) > 10) ? ceil($total_page/10) : 1 ;
        return [$result, $total_page];
    }
    public static function delAllCaptured()
    {
        
        $r = new DataBase();
        $result= $r->delAllCapturies();
        if($result){
            Redirect::to('adminEmail');
            exit;
        }
        Redirect::to('adminEmail');
        exit;
        
    }
    public static function delCaptured()
    {
        if(isset($_POST['mail'])) {
            $r = new DataBase();
            $result= $r->delCapturies($_POST['mail']);
            if($result){
                Redirect::to('adminEmail');
                exit;
            }
            Redirect::to('adminEmail');
            exit;
        }
    }
    public static function fileCaptured()
    {
        
            $r = new DataBase();
            $result= $r->fileCapturies();
            if($result){
                header('Content-Type: text/csv; charset=UTF-8');
                header('Content-Disposition: attachment; filename=arquivo.csv');
                $arq = fopen("php://output","w");
                $cabecalho = ['Nome','Empresa','E-mail','Whatapp','Investimento Anual'];
                fputcsv($arq,$cabecalho,';');
                foreach($result as $index => $value){
                    fputcsv($arq,$value,';');

                }
                fclose($arq);
                exit;
            }
            Redirect::to('adminEmail');
            exit;
        
    }
    public static function dataParam($param)
    {
        $bd = new DataBase();
        $r = $bd->dataParam($param);
        return $r ;
    }
    public static function addFile()
    {   
        if(isset($_FILES["favicon"])){
            $name = $_FILES["favicon"]["name"];
            $tmp_name = $_FILES["favicon"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = uniqid() .'.'. $extension;
            $f = new DataBase();
            $local = 'assets/img/' . $newName;
            $location = $f->dataParam($_POST['type']);
            $location = $location['favicon'];
            try {
                $r = unlink($location);
                if($r){
                    $result = $f->insertFile('favicon',$local);
                    if($result){
                        move_uploaded_file($tmp_name,'assets/img/' . $newName);
                        Redirect::back();
                        exit;
                    }
                }
            } catch(Exception $e){
            }finally{
                $result = $f->insertFile('favicon',$local);
                    if($result){
                        move_uploaded_file($tmp_name,'assets/img/' . $newName);
                        Redirect::back();
                        exit;
                    }
            }

            Redirect::back();
            exit;
        }
        if(isset($_FILES["banner"])){
            $name = $_FILES["banner"]["name"];
            $tmp_name = $_FILES["banner"]["tmp_name"];
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            $newName = uniqid() .'.'. $extension;
            $f = new DataBase();
            $local = 'assets/img/' . $newName;
            $location = $f->dataParam($_POST['type']);
            $location = $location['banner'];
            try {
                $r = unlink($location);
                if($r){
                    $result = $f->insertFile('banner',$local);
                    if($result){
                        move_uploaded_file($tmp_name,'assets/img/' . $newName);
                        Redirect::back();
                        exit;
                    }
                }
            } catch(Exception $e){
                
            }finally{
                $result = $f->insertFile('banner',$local);
                    if($result){
                        move_uploaded_file($tmp_name,'assets/img/' . $newName);
                        Redirect::back();
                        exit;
                    }
            }
            Redirect::back();
            exit;
        }
        
    }
}