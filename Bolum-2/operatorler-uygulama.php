<?php
    $a=10;
    $b=20;
    $c=5;

    //1- a, b çarpımı ile a,b,c toplamının farkı
    $sonuc=($a*$b)-($a+$b+$c);
    echo "1-sonuc: {$sonuc} <br>";
    
    //2- a,b,c toplamının mod  3ü nedir

    $sonuc=($a+$b+$c)%3;
    echo "2-sonuc: {$sonuc} <br>";

    //3- b'ninn c. kuvveti
    $sonuc=$b**$c;
    echo "3-sonuc: {$sonuc} <br>";

    //4- a için 50-100 arasında kontrolü yapınız
    $sonuc=($a>=50 and $a<=100);
    echo var_dump($sonuc)."<br>";
    
    //5- a için pozitif çift kontrolü yapınız
    $sonuc=($a>=0 and $a%2==0);
    echo "5-sonuc: {$sonuc} <br>";
    
    //6- username ve password ile uygulama giriş kontrolü yapınız
    $username="asliYilmaz613";
    $password="567812.";
    $sonuc=($username=="asliYilmaz613" and $password=="567812.");
    echo "6-sonuc: {$sonuc} <br>";

    //7- a,b,c için büyüklük kontrolü yapınız
    $sonuc1=$a>=$b;
    echo "7-sonuc1: {$sonuc} <br>";
    $sonuc2=$b>=$c;
    echo "7-sonuc2: {$sonuc} <br>";
    $sonuc3=$a>=$c;
    echo "7-sonuc3: {$sonuc} <br>";

    //8. 2 vize(%60) ve final (%40) notuna göre ortalama hesağlayınız
    $vize_1=30;
    $vize_2=30;
    $final=70;
    $ortalama=(($vize_1+$vize_2)/2)*60/100+$final*40/100;
    echo "ortalama: {$ortalama} <br>";
    $sonuc=$ortalama>=50;
    echo "8-sonuc-1:".(int)$sonuc."<br>";
    $gecmeDurumu=($ortalama>=50 and $final>=50);
    echo "8-sonuc-2:".(int)$gecmeDurumu."<br>";
    $gecmeDurumu=($ortalama>=50  or $final>=70);
    echo "8-sonuc-3:".(int)$gecmeDurumu."<br>";
?>