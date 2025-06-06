<?php
    $ogrenciler=array("aslı","alyosha","adil","apama");
    for($i =0; $i<count($ogrenciler);$i++){
        echo $ogrenciler[$i]."<br>";
    }
    $i=0;
    echo "<br>";
    while($i<count($ogrenciler)){
        echo $ogrenciler[$i]."<br>";
        $i++;
    }
    echo "<br>";

    $personelYas=array(
        array("asli",25),
        array("alyosha",22),
        array("apama",68),
    );

    for($i=0;$i<count($personelYas);$i++){
        echo $personelYas[$i][0]."->".$personelYas[$i][1]."<br>";
    }
    echo "<br>";

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
    for($i=0;$i<count($urunler);$i++){
        echo $urunler[$i];
    }
    //yukarıdaki kode hata verir çünkü dictinorylere index ile değil key ile ulaşabilirsin
    echo "<br>";
    //bunun için keyleri bir array olarak bize getiren array_keys() fonksiyonu kullanılır
    $keys=array_keys($urunler);
    for($i=0;$i<count($keys);$i++){
        echo $keys[$i];
        echo "<br>";
    }
    echo "<br>";
    for($i=0;$i<count($keys);$i++){
        //print_r($urunler[$keys[$i]]);
        echo $urunler[$keys[$i]]["urun_adi"]."->".$urunler[$keys[$i]]["fiyat"];
        echo "<br>";
    }

?>