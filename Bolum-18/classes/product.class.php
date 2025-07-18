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
        public function createProduct($title,$price,$description){
            $sql="INSERT INTO products(title,price,description) VALUES(:title,:price,:description)";
            $stmt=$this->connect()->prepare($sql);
            try{
                return $stmt->execute(['title'=>$title,'price'=>$price,'description'=>$description]);
            }catch(PDOException $e){
                echo "Kaydetme işlemi başarısız : ".$e->getMessage()."<br>";
            }        


        }
        public function editProduct($id, $title,$price,$description){
            $sql="UPDATE products SET title=:title,price=:price,description=:description where id=:id";
            $stmt=$this->connect()->prepare($sql);
            try{
                return $stmt->execute(['id'=>$id,'title'=>$title,'price'=>$price,'description'=>$description]);
            }catch(PDOException $e){
                echo "Güncelleme işlemi başarısız : ".$e->getMessage()."<br>";
            }        


        }
        public function deleteProduct($id){
            $sql="DELETE FROM products where id=:id";
            $stmt=$this->connect()->prepare($sql);
            return $stmt->execute(['id'=>$id]);
                
        }

    }

?>