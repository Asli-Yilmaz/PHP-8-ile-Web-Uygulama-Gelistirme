<?php
    function selamlama($isim="değerli kullanıcı",$mesaj="iyi günler,"){
        return "$mesaj $isim";
    }
    $sonuc=selamlama("aslı","merhaba")."<br>";
    echo $sonuc;
     $sonuc=selamlama("aslı")."<br>";
    echo $sonuc;
     $sonuc=selamlama()."<br>";
    echo $sonuc;
     $sonuc=selamlama("aslı")."<br>";
    echo $sonuc;
?>