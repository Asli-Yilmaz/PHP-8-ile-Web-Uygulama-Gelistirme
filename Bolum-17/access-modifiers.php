<?php
    class Person{

        //vaşağıdaki gbi kullanımda varsayılan erişim belirteci publictir
        private int $salary;
        var string $name;
        private int $age;

        function __construct($name,$age,$salary=0)
        {
            $this->name=$name;
            if($age<0){
                $this->age=0;
            }else{
                $this->age=$age;
            }  
            if($salary<0){
                $this->salary=0;
            }else{
                $this->salary=$salary;
            }  
            
        }
        
        private function get_name(){
            return $this->name;
        }
        private function get_age(){
            return $this->age;
        }
        private function get_yearlySalary(){
            return $this->salary*12;
        }
        function display_info(){
            return $this->get_name()." - ".$this->get_age()." - ".$this->get_yearlySalary();
        }
    }

    $person1=new Person("ali",35,20000);
    $person2=new Person("ahmet",-30,30000);
    echo $person1->display_info()."<br>";
    echo $person2->display_info()."<br>";
    //public propertylere aşağıdaki gibi erişilebilir
    echo $person1->name."<br>";
    //private propertylere ise sınıf dışarısından direkt erişilemez
    //echo $person1->age."<br>";//hata alınır.
    //bunun yerine get ve set gibi fonksiyonlar ile private verilere ulaşılır.
    //echo $person1->get_age()."<br>";

    echo $person1->display_info()."<br>";
    echo $person2->display_info()."<br>";


?>