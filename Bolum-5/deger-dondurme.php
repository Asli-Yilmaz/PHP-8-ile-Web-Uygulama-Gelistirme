<?php 
    function toplama(){
        return 20+39;
    }
    echo toplama()."<br>";

    function yasHesapla(){
        return sene()-2000;
    }
    echo yasHesapla()."<br>";

    function sene(){
        return date("Y");
    }
    echo sene()."<br>";

    function saat(){
        return date("h");
    }
    echo saat();
?>