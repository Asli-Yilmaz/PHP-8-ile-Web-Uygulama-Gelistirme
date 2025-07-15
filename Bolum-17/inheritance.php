<?php
    class Kisi{
        public string $name;
        public string $surname;

        public function Speak(){
            echo "{$this->name} {$this->surname} konuşuyor.";
            echo "<br>";
        }

    }
    $person1=new kisi();
    $person1->name="Aslı";
    $person1->surname="Yılmaz";
    $person1->Speak();

    //öğrenci sınıfı kişi sınıfından türetilmiş oldu
    class Ogrenci extends Kisi{
        public $studentNo;
        public function Study(){
            echo "{$this->name} {$this->surname} ders çalışıyor.";
            echo "<br>";
        }
    }
    echo "<hr>";
    $person2=new Ogrenci();
    $person2->name="Sıla";
    $person2->surname="Ayılmaz";
    $person2->Speak();
    $person2->Study();

    class Ogretmen extends Kisi{
        public $salary;
        //1.
        protected function Teach(){            
            echo "{$this->name} {$this->surname} ders anlatıyor.";
            echo "<br>";
        }
    }
    echo "<hr>";
    $person3=new Ogretmen();
    $person3->name="Sıla";
    $person3->surname="Kaya";
    $person3->Speak();
    // $person3->Teach();
    // 2. teach fonksiyonu protected olduğu için dışardan erişilemez

    echo "<hr>";
    $persons=[$person1,$person2,$person3];
    foreach($persons as $person){
        echo var_dump($person instanceof Kisi)."<br>";
        //hepsi de kisi sınfıının instancedır
    }
    //ard arda iki class dan tüetilen bir class tanımlayabilirsiniz
    class Mudur extends Ogretmen{
        public function Manage(){
            $this->Teach();
            //3. müdür sınıfı oğretmenden kalıtım aldığı için protected fonksiyon ve propertylere erişebilir.
            echo "{$this->name} {$this->surname} Okulu yönetiyor.";
        } 
        
    }
    echo "<hr>";
    $person4=new Mudur();    
    $person4->name="Ayten";
    $person4->surname="Doğan";
    $person4->Speak();
    $person4->Manage();

    echo "<hr>";
    array_push($persons,$person4);
    foreach($persons as $person){
        echo var_dump($person instanceof Kisi)."<br>";
        //müdür de kisi sınıfının bir instance dır
    }
    //public methodlara instancelar erişebilir,
    //private methodlara instancelar erişemez,
    //protected methoda, o sınıftan kalıtım alan classlar içinden erişilebilir
    //dışardan yine de erişilemez.yani nesne üzerinden değil kalıtım alına  sınıf içinden erişilir




?>