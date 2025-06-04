<?php
    $notlar=array(50,30,70);
    echo count($notlar)."<br>";
    $plakalar=array(41=>"kocaeli",34=>"istanbul",53=>"rize");
    echo count($plakalar)."<br>";

    array_push($notlar,100); //sona ekler
    echo count($notlar)."<br>";

    array_unshift($notlar,20); //başa ekler
    array_pop($notlar); //sondan siler
    array_shift($notlar); //baştan siler

    print_r($notlar)."<br>";
    sort($notlar); //artan şekilde sıralar
    print_r($notlar)."<br>";
    asort($plakalar) ;//value değerine göre artan sıralama
    ksort($plakalar);//ket değerine dgöre artan sıralama

    rsort($notlar);//numeric verileri azalan şekilde sıralar
    arsort($plakalar); //value değerine göre azalan sıralama
    krsort($plakalar); // key değerine göre azalan sıralama

    echo "<br>";
    //string to array
    $str="kocaeli,41";
    $arr=explode(",",$str);
    print_r($arr);

    //array to string
    echo "<br>";
    $str_new=implode("=",$arr);
    echo $str_new;

    print_r( array_count_values($notlar)); //tekrarlayan sayıların kaç kez tekrarladığıbı fösterir
    array_flip($plakalar); //key ve value değerlerinin yerlerini değiştir.
    array_rand($notlar);//rastgele bir değer indexi  dönderir
    array_rand($notlar,2) ;//rastgele iki değer indexi  dönderir

?>