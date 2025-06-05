<?php 
    $yas=10;
    $egitim="ilkokul";
    //if else with turnary
    echo ( $yas>=18 ) ? "ehliyet alabilir":"ehliyet alamaz";
    echo "<br>";
    //nasted if else with turnary
    echo ( $yas>=18 ) 
        ? (($egitim=="lise" or $egitim=="üniversite")
            ?"ehliyet alabilir"
            : "eğitim seviyesi yetersiz, ehliyet alamaz")
        :"yaş küçük, ehliyet alamaz";
 ?>