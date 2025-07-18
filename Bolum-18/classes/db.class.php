<?php

    class Db{
        private $host="localhost";
        private $user="root";
        private $password="";
        private $dbName="mydb";

        //daha sonradan db classından sınıflar türetilecek ve bu 
        //türetilen yeni classların connect methoduna ulaşabilmesi için protected yapılmalı
        protected function connect(){
            try{
                $dataSourceName="mysql:host=".$this->host.";dbname=".$this->dbName;
                $pdo=new PDO($dataSourceName,$this->user,$this->password);
                //hata gösterme modunun tanımlanması
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(pdo::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                
                return $pdo;
            }catch(PDOException $error){
                echo "Bağlantı hatası: ".$error->getMessage()."<br>";
            }
        }
    }
?>