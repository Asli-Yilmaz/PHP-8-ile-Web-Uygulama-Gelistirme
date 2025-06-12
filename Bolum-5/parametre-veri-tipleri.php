<?php
    declare(strict_types=1);
    //normalde çevirilebilen string tplerini sayısal veriye çevirerek
    //işlem yapabilmesine rağmen strict_types ile artık bu ilemi yapmaz
    //ve hata dönderir. boylece yazılan kodun güvenilirliği artar
    function toplama(int $sayi1,int $sayi2):int{
        return $sayi1+$sayi2;
    }
    //:int =int turunde değer dönder demek
    echo toplama("10","20");
?>