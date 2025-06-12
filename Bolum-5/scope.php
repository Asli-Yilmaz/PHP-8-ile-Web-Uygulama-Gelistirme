<?php
    //global scope
    $x=5;
    echo $x."<br>";
    //local scope
    function test(){
        $x=19;
        echo $x."<br>";
    }

    test();
    echo $x."<br>";

    function test2(){
        global $x; //global değeri kullanmamızı sağlar
        echo $x."<br>";
    }
    test2();

    //global değeri local bir alanda değiştirme işlemi:
    function test3(){
        $GLOBALS["x"]=10;
    }
    test3();
    echo $x."<br>";

?>