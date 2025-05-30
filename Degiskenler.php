<?php

    $ad="Asli";
    $soyad="Yilmaz";

    echo $ad." ".$soyad;
    echo "<br>";

    $sayi1=50;
    $sayi2=100;

    
    //büyük küçük harf duyarlılığı vardır
    /*
        çoklu yorum satırı
    */
    $Sayi1=70;
    echo $sayi1." ".$sayi2;
    echo getType($ad);

    $doubleSayi1=(double)$sayi1;
    echo $doubleSayi1;
    echo "<br>";
    echo gettype($doubleSayi1);

    //çevirebildiği kadarını çevirir çevirilemeyecek değere gelince bırakır
    $a=(int)"20a50";
    echo gettype($a);
    echo $a;

    //a kararkterini inte çeviremediği için 0 döndedir
    $a=(int)"a20";
    echo gettype($a);
    echo $a;

    //true nun değeri olarak 1 i yazdır.
    $a=true;
    echo gettype($a);
    echo $a;

    //ancak false un bir değeri yoktur ve bir şey yazdırmaz
    $a=false;
    echo gettype($a);
    echo $a;

    //false değeerini int e çeviriğimiz için şimdi 0 yazar
    $a=(int)false;
    echo gettype($a);
    echo $a;
?>