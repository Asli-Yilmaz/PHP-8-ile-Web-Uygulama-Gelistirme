<?php
    //value parametre gonderilmesi
    function toplama($sayi){
        $sayi+=10;
        echo $sayi."<br>";
    }

    $x=20;
    toplama($x);
    echo $x."<br>";
    //fonksiyona reference parametre gönderilmesi
    echo "------------"."<br>";
    function toplama2(&$sayi){
        $sayi+=10;
        echo $sayi."<br>";
    }

    $x=20;
    toplama2($x);
    echo $x."<br>";
    echo "------------"."<br>";
    function yasHesapla($tarihler){
        for($i=0;$i<count($tarihler);$i++){
            $tarihler[$i]=date("Y")-$tarihler[$i];
        }
        return $tarihler;
    }

    $liste=array(1990,1972,1965);
    echo "<pre>";
    print_r(yasHesapla($liste));
    print_r($liste);    
    echo "</pre>";
    echo "------------"."<br>";
    function yasHesapla2(&$tarihler){
        for($i=0;$i<count($tarihler);$i++){
            $tarihler[$i]=date("Y")-$tarihler[$i];
        }
        return $tarihler;
    }

    $liste=array(1990,1972,1965);
    echo "<pre>";
    print_r(yasHesapla2($liste));
    print_r($liste);    
    echo "</pre>";

    
?>