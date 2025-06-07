<?php
    function toplama(...$sayilar){
        $toplam=0;
        foreach($sayilar as $sayi){
            $toplam+=$sayi;
        }
        return $toplam;
    }

    echo toplama(45,24,14)."<br>";
    echo toplama(45,24,14,64,25,145)."<br>";
    echo toplama(45,24,)."<br>";
?>