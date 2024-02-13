<?php
namespace app\models;

use PDO;
use PDOException;
use Exception;

class DataBase
{
    private $conn;
    
    public function __construct()
    {   
        $config = array
        (
            'host' => 'localhost',
            'username' => 'root',
            'password' => 'root',
            'dbname' => 'landing_page'
        );
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);
        } catch(PDOException $e) {
            throw new Exception("Erro de conexão: " . $e->getMessage());
        }
    }

    public function datasAdmin(string $email)
    {   
        try{
            $sql = "SELECT * FROM administrador WHERE email = :email ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':email',$email);
            $stmt->execute();
            $resp = $stmt->fetch(PDO::FETCH_ASSOC);
            return $resp;

        }catch(Exception){
            return false;
        }
    }

    public function insertIcon($local,$name)
    {
        try{
            $stmt = $this->conn->prepare("
            INSERT INTO icone (url,name) VALUES (:local,:name)");
            
            $stmt->bindValue(":local",$local);
            $stmt->bindValue(":name",$name);
            $response = $stmt->execute();
            
            return $response;
            
        }catch(Exception $e){
            echo($e->getMessage());
            return false;
        }
    }
    public function delIcon($id)
    {
        try{
            $stmt = $this->conn->prepare("DELETE FROM icone WHERE idicone = :id");
            $stmt->bindValue(":id",$id);
            $response = $stmt->execute();
            return $response;
            
        }catch(Exception $e){
            echo($e->getMessage());
            return false;
        }
    }
    public function fileCapturies()
    {
        try{
            $stmt = $this->conn->prepare("
            SELECT name,company,email,whatsapp,investment FROM captured");
            $stmt->execute();
            $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $response;
            
        }catch(Exception $e){
            echo($e->getMessage());
            return false;
        }
    }
    public function capturiesCountPages()
    {
        try{
            $stmt = $this->conn->prepare("
            SELECT COUNT(*) AS total_de_paginas FROM captured");
            $stmt->execute();
            $response = $stmt->fetch(PDO::FETCH_ASSOC);
            return $response;
            
        }catch(Exception $e){
            echo($e->getMessage());
            return false;
        }
    }
    public function capturiesCount($emailsPorPagina)
    {
        try{
            $stmt = $this->conn->prepare("
            SELECT CEIL(COUNT(*) / :num) AS total_de_paginas FROM captured");        
            $stmt->bindValue(":num",$emailsPorPagina, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetch(PDO::FETCH_ASSOC);
            return $response;
            
        }catch(Exception $e){
            echo($e->getMessage());
            return false;
        }
    }
    public function delAllCapturies()
    {   
        try{
        $stmt = $this->conn->prepare("DELETE FROM captured");
        $stmt->execute();
        return true;
        }catch(Exception $e){
            echo($e->getMessage());
            return false;
        }
    }
    
    public function delCapturies($array)
    {   
        try{
        $stmt = $this->conn->prepare("DELETE FROM captured WHERE idcaptured= :id");
        foreach($array as $key => $value) {
            $stmt->execute(array(':id' => $value));
        
        }
        return true;
        }catch(Exception $e){
            echo($e->getMessage());
            return false;
        }
    
    }
    public function capturies($maxValue,$offset)
    {
        try{
            $stmt = $this->conn->prepare("SELECT * FROM captured  LIMIT :maxValue OFFSET :offset ");
            $stmt->bindValue(":maxValue",$maxValue, PDO::PARAM_INT);
            $stmt->bindValue(":offset",$offset, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $response;
            
        }catch(Exception $e){
            echo($e->getMessage());
            return false;
        }
    }
    public function locationIcon($id)
    {
        try{
            $stmt = $this->conn->prepare("SELECT url FROM icone WHERE idicone = :id");
            $stmt->bindValue(":id",$id);
            $stmt->execute();
            $response = $stmt->fetch(PDO::FETCH_ASSOC);
            return $response;
            
        }catch(Exception $e){
            echo($e->getMessage());
            return false;
        }
    }
    public function datas()
    {
        try{
            $response = [];
            $stmt = $this->conn->prepare("SELECT * FROM data");
            $stmt->execute();
            $response[] = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt = $this->conn->prepare("SELECT * FROM texts");
            $stmt->execute();
            $response[] = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt = $this->conn->prepare("SELECT * FROM icone");
            $stmt->execute();
            $response[] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $response;
            
        }catch(Exception $e){
            echo($e->getMessage());
            return false;
        }
    }

    public function query($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $resp = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resp;
    }
    public function queryParam($sql,$param)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($param);
        $resp = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resp;
    }
    public function updateDatas($array)
    {   
        try
        {
            $stmt = $this->conn->prepare(
                " UPDATE data SET 
                meta_title = :meta_title, 
                meta_description = :meta_description, 
                meta_keywords = :meta_keywords, 
                name_btn_one = :name_btn_one, 
                link_btn_one = :url_btn_one, 
                name_btn_two = :name_btn_two,
                link_btn_two = :url_btn_two, 
                name_btn_form = :name_btn_form, 
                link_form = :url_btn_form
                "); 
                foreach($array as $index => $value){
                switch ($index) {
                    case 'meta_title':
                        $stmt->bindValue(":$index",$value);
                    case 'meta_description':
                        $stmt->bindValue(":$index",$value);
                    case 'meta_keywords':
                        $stmt->bindValue(":$index",$value);
                    case 'name_btn_one':
                        $stmt->bindValue(":$index",$value);
                    case 'url_btn_one':
                        $stmt->bindValue(":$index",$value);
                    case 'name_btn_two':
                        $stmt->bindValue(":$index",$value);
                    case 'url_btn_two':
                        $stmt->bindValue(":$index",$value);
                    case 'name_btn_form':
                        $stmt->bindValue(":$index",$value);
                    case 'url_btn_form':
                        $stmt->bindValue(":$index",$value);
                       
                }
            }
            $stmt->execute();
            $stmt = $this->conn->prepare(
                "UPDATE texts SET text_one = :description1, text_two = :description2, text_form = :form_description");
            foreach($array as $index => $value){
                switch ($index) {
                    case 'description1':
                        $stmt->bindValue(":$index",$value);
                    case 'description2':
                        $stmt->bindValue(":$index",$value);
                    case 'form_description':
                        $stmt->bindValue(":$index",$value);
                       
                }
            }  
            $stmt->execute();
            return true;
        } catch (Exception  $e) {
            echo($e->getMessage());
            return false;
        }
       
    }

    public function close() {
        $this->conn = null;
    }

}

