<?php
    class Product{

        public $name;
        public $price;

        function set_name($name){
            //nesnenin içerisndeki name değeri için this kullanıldı
            $this->name=$name;
        }
        function set_price($price){
            if($price<0){
                $this->price=0;
            }else{
                $this->price=$price;
            }           
            
        }
        function get_name(){
            return $this->name;
        }
        function get_price(){
            return $this->price;
        }



    }

    $p1=new Product();
    // $p1->name="Samsung S21";
    // $p1->price=20000;
    // echo $p1->name;
    // echo $p1->price;

    //yukarıdaki gibi değerlere ulaşmak/güncellemek yerine fonksyionlardan yararlanılabilir

    $p1->set_name("Samsung S20");
    $p1->set_price(20000);
    echo $p1->get_name()." ".$p1->get_price();

    echo "<hr>";

    //yukarıdaki gibi ürün oluştuduktan sonra propertylerine değer
    //atamak yerine nesnenin oluşturulduğu anda bu değerler atanabilir
    //bu da constructorlar ile yapılır
    class Person{

        public $name;
        public $age;

        function __construct($name,$age)
        {
            $this->name=$name;
            if($age<0){
                $this->age=0;
            }else{
                $this->age=$age;
            }     
            
        }
        function __destruct()
        {
            //program sonunda kullanılmayan sql             
            //bağlantılarını,  listeleri vs siler
            echo "nesne silindi"."<br>";
        }

        function get_name(){
            return $this->name;
        }
        function get_age(){
            return $this->age;
        }
        function display_info(){
            return $this->name." - ".$this->age;
        }
    }
    $person1=new Person("ali",35);
    $person2=new Person("ahmet",-30);
    echo $person1->display_info()."<br>";
    echo $person2->display_info()."<br>";



?>