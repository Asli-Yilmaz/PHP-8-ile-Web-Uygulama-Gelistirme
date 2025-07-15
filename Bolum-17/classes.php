<?php

    //class tanımlanması
    class Student{
        //property tanımlama
        public $studentNo;
        public $name;
        public $class;
    }

    //instance tanımlanması
    $ogrenci1=new Student();
    $ogrenci2=new Student();

    $ogrenci1->name="Adil";
    $ogrenci1->studentNo=10;
    $ogrenci1->class="10/A";

    $ogrenci2->name="Apama";
    $ogrenci2->studentNo=20;
    $ogrenci2->class="11/B";

    echo $ogrenci1->studentNo." - ".$ogrenci1->name." - ".$ogrenci1->class."<br>";
    echo $ogrenci2->studentNo." - ".$ogrenci2->name." - ".$ogrenci2->class."<br>";
    echo "<hr>";
    //instanceların diziye eklenmesi
    $students=[$ogrenci1,$ogrenci2];

    foreach($students as $s){
        echo $s->studentNo." - ".$s->name." - ".$s->class."<br>";
        var_dump($s instanceof Student);//s nesnesi student classının bir insatance mı?
        echo "<br>";
    }


?>