<?php
    $name="Aslı";
    $surname="Yılmaz";

    $mesaj="My name is ".$name." ".$surname.".";
    // parantez olmasa da olur ama okunabilirlik açısından daha iyi
    $mesaj= "My name is {$name} {$surname}.";
    echo $mesaj;

    //string fonksiyonları
    
    // - strlen(string) ->karakter uzunluğu
    // - str_word_count(string) ->verilen stirngin kelimelerini sayar
    // - strtolower(string) ->kelimeleri küçük harf yapar
    // - strtoupper(string) ->kelimeleri büyük harf yapar
    // - ucfirst(string) ->sadece ilk harfi büyük yapar
    // - str_replace(eski string,yeni string, değişikliğin yaplacağı ana string)
    // - str_replace([eski string1,eski string2],[yeni string1, yeni string2], değişikliğin yaplacağı ana string)
?>