<?php
    //and,
    //or,
    //xor=> sadece birinin true olması durumunda true dur.
        //true-false=true
        //true-true=false
        //false-false=false
    //!

    $yas=20;
    $mezuniyet="lise";

    $sonuc=($yas>=18) and ($mezuniyet=="lise");
    $sonuc=($yas>=18) and ($mezuniyet=="lise" or $mezuniyet=="lisans" or $mezuniyet=="on lisans");
    
?>