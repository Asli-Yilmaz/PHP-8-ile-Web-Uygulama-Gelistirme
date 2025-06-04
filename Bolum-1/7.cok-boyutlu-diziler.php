<?php
    $ogrenci1=array("ali",array(60,88,12));
    $ogrenci2=array("Aslı",array(87,67,43));
    echo $ogrenci1[0]."<br>";
    echo $ogrenci1[1][0]."<br>";
    echo $ogrenci1[1][2]."<br>";

    echo $ogrenci2[0]."<br>";
    echo $ogrenci2[1][0]."<br>";
    echo $ogrenci2[1][2]."<br>";

    $ogrenci1_ortalama=($ogrenci1[1][0]+$ogrenci1[1][1]+$ogrenci1[1][2])/3;
    echo $ogrenci1_ortalama."<br>";

    $ogrenciler=array(
        "100"=>array(
            "ad"=>"mehmet",
            "soyad"=>"Yılmaz",
            "notlar"=>array(
                "matematik"=>array(50,70,80),
                "fizik"=>array(60,50,90)
            )
        ),
        "200"=>array(
            "ad"=>"aydın",
            "soyad"=>"doğan",
            "notlar"=>array(
                "matematik"=>array(70,32,95),
                "fizik"=>array(40,76,86)
                
            )
            ),
    );
    echo $ogrenciler["100"]["ad"];         
    echo $ogrenciler["100"]["soyad"];   
    echo $ogrenciler["100"]["notlar"]["matematik"][0]."<br>";
    
    echo $ogrenciler["200"]["ad"];         
    echo $ogrenciler["200"]["soyad"];   
    echo $ogrenciler["200"]["notlar"]["matematik"][0]."<br>";

?>