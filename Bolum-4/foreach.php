<?php
    $ogrenciler=array("asli","alyosha","adil","apama");

    foreach($ogrenciler as $ogrenci){
        echo $ogrenci."<br>";
    }
    $personelYas=array(
        array("asli",25),
        array("alyosha",22),
        array("apama",68),
    );
    
    foreach ($personelYas as $personel) {
        echo $personel[0]."->".$personel[1]."<br>";
    }

    $urunler=array(
        "100"=>array(
            "urun_adi"=>"iphone 16",
            "fiyat"=>60000
        ),
        "101"=>array(
            "urun_adi"=>"iphone 15",
            "fiyat"=>50000
        ),
        "102"=>array(
            "urun_adi"=>"iphone 14",
            "fiyat"=>40000
        ),
    );
    foreach ($urunler as $key => $value) {
        echo $key."<br>";
        echo $value["urun_adi"]." ";
        echo $value["fiyat"]."<br>";
    }

?>