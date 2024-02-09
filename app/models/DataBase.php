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
                title = :title, description = :description1, 
                title_form = :title_form, 
                description_form = :description_form, 
                name_btn_form = :name_btn_form, 
                link_form = :link_form, 
                description_two = :description_two, 
                name_btn_one = :name_btn_one, 
                link_btn_one= :link_btn_one, 
                name_btn_two = :name_btn_two, 
                link_btn_two= :link_btn_two,
                icon1 = :icon1, icon2 = :icon2, icon3 = :icon3, 
                icon4 = :icon4, icon5 = :icon5, icon6 = :icon6, 
                li1 = :li1, li2 = :li2, li3 = :li3, li4 = :li4, 
                li5 = :li5, li6 = :li6, li7 = :li7, tli = :tli
                ");
            foreach($array as $index => $value)
            {
            $stmt->bindValue(":$index",$value);
            }

            $stmt->execute();
            return true;
        } catch (Exception) {
            return false;
        }
       
    }

    public function close() {
        $this->conn = null;
    }

}

