<?php

    class Product extends Db{
        
        public function getProducts(){
            $sql="SELECT * FROM products";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function getProductById($id){
            $sql="SELECT * FROM products WHERE id=:id";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute(['id'=>$id]);
            return $stmt->fetch();
        }
    }

?>