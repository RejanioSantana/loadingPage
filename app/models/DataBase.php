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

