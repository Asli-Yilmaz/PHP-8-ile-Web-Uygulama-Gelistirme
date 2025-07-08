<?php

    //dosya açma
    //fopen("dosya adı","dosya açma modu");

    //r=okuma, imleç dosya başında
    //w=yazma,imleç dosya başında ve yazma işleminde dosyanın içinde olan önceki verielr silinir. dosya yoksa oluşturulur.
    //a=yazma,imleç soya sonunda, dosya içeriğine ekleme yapılır. dosya yoksa oluşturulur.
    //x=yazma, dosya yoksa oluşturulur varsa false döner

    //dosya içeriği ram bellek üzerine alınır. geçici bellek üzerindeki bu verilere stream denir
    $myfile=fopen("dosya.txt","r");
    //fread'in length parametresi byte türündendir. her char 1 byte old. için girilen sayı kadar karakter okur.
    echo fread($myfile,11); //okuma işlemi stream üzerinden yapılır
    echo "<br>";
    //byte byte okumak yerine fgets methodu ile satır satır alabilirsin
    while(!feof($myfile)){
        echo fgets($myfile);
    }

    //bellek üzerinden silme, işin bittiğinde silmelisin
    fclose($myfile);
?>