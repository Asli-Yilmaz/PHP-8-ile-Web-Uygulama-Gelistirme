<?php
    //diziler
    // 1. numeric arrays    
    $renkler=array("mavi","kırmızı","sari");
    echo $renkler[1];
    echo "<br>";
    $sayilar=array(1,2,3,4,5);
    echo $sayilar[0];
    echo "<br>";

    // 2. associative arrays (key-value)
    $plaka_bilgileri=array(
        41=>"Kocaeli",
        66=>"Yozgat",
        34=>"İstanbul"
    );
    //bir key altında bir dizi de tutulabilir
    echo $plaka_bilgileri[41];
    echo "<br>";
    echo $plaka_bilgileri[66];
    echo "<br>";
    echo $plaka_bilgileri[34];
?>