<?php

    $sayi=10;
    switch($sayi){
        case ($sayi<5):
            echo "sayi 5 den küçük"."<br>";
            break;
        case ($sayi<=10 and $sayi>=5):
            echo "sayi 10 ile 5 arasında"."<br>";
            break;
        default:
            echo "sayi 10 dan büyük"."<br>";
    }
?>