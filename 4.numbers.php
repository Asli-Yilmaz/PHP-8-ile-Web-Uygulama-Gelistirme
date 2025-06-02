<?php
    $sayi1=5;
    $sayi2=3;
    echo "sonuc: ".($sayi1-$sayi2)."<br>";
    echo "sonuc: ".($sayi1+$sayi2)."<br>";
    echo "sonuc: ".($sayi1/$sayi2)."<br>";
    echo "sonuc: ".($sayi1*$sayi2)."<br>";
    echo "sonuc: ".($sayi1**$sayi2)."<br>"; //üst alma 5 üssü 3


    echo is_int($sayi1)."<br>";
    echo var_dump(is_int(5.2));
    //is_float(sayi)
    //is_numeric(sayi)//ondalık ve tam sayi için true döner string tütündeki sayi için de true döner
    //ceil(sayi) ->sayiyi yukarıya yuvarlar
    //floor(sayi) -> sayiyi aşağıya yuvarlar
    //round(sayi) ->en yakın tam sayiya yuvarlar
    //sqrt(25) ->karekökünü alır
    //pow(sayi) ->karesini alır
    //max(sayi_dizisi)
    //min(sayi_dizisi)
?>