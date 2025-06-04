<?php
    $a=10;
    $b=20;
    $c="10";
    $sonuc=($a==$b); //
    echo var_dump($sonuc)."<br>";

    $sonuc=($a!=$b); // eşit değil mi? sorusuna cevap verir
    echo var_dump($sonuc)."<br>";

    $sonuc=($a<>$b); // eşit değil mi? sorusuna cevap verir
    echo var_dump($sonuc)."<br>";

    $sonuc=($a==$c); //veri tipine bakmaz sadece değere bakar ve true donderir
    echo var_dump($sonuc)."<br>";

    $sonuc=($a===$c); //identical yani hem tiplerinin hem değerlerin eşitliğini kontrol eder false doner
    echo var_dump($sonuc)."<br>";

    $sonuc=($a!==$c); //not identical yani hem tiplerinin hem değerlerin eşitliğini kontrol eder true doner
    echo var_dump($sonuc)."<br>";

    $sonuc=($c<=>$a); //spaceship- a değeri b değerine eşit mi sorusuna t/f değil sayısal bir değerle cevap verir
    echo var_dump($sonuc)."<br>";
    //0=> eşitlik, 1=>soldaki değer büyük, -1=> sağdaki değer büyük
    //spaceship de değere bakar türe bakmaz
?>