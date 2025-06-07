<?php
    function bir($kelime,$tekrar){
        for($i=0;$i<$tekrar;$i++){
            echo $kelime."<br>";
        }
    }

    bir("aslı",5);

    function dikdortgenAlanVeCevre($boy,$en){
        $alan=$boy*$en;
        $cevre=$boy*2+$en*2;
        echo "dikdörtgenin alanı : $alan"."<br>";
        echo "dikdörtgenin çevresi : $cevre"."<br>";
    }
    dikdortgenAlanVeCevre(17,3);

    function yaziTura(){
        $sayi=rand(1,100);
        if($sayi<50) echo "tura"."<br>";
        else echo "Yazı"."<br>";
    }
    yaziTura();
    function dizi($sayi){
        $sonuc=array();
        for($i=1;$i<=$sayi;$i++){
            if($sayi%$i==0){
                array_push($sonuc,$i);
            }
        }
       return $sonuc;
    }
    print_r(dizi(12));
?>