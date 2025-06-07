<?php
    function selamlama($isim){
        return "merhaba "."$isim!"."<br>";
    }

    echo selamlama("Aslı");

    function toplama($sayi1,$sayi2){
        return $sayi1+$sayi2;
    }
    echo toplama(4,7)."<br>";


    function yashesapla($dogumYili){
        return date("Y")-$dogumYili;
    }

    echo yashesapla(1972);
?>