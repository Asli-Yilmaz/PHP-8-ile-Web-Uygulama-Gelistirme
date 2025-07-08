<?php
    // $myfile=fopen("dosya2.txt","w");
    // $title="php dersleri\n";
    // fwrite($myfile,$title);
    // fclose($myfile);
    // $myfile=fopen("dosya2.txt","a");
    // fwrite($myfile,"aspnet dersleri\n");
    // fclose($myfile);
    // $myfile=fopen("dosya2.txt","r");
    // $size=filesize("dosya2.txt");    
    // echo fread($myfile,$size);
    // fclose($myfile);
    //a+ hem ekleme hem okuma modu,
    //w+ hem sıfırdan yazma hem okuma modu,

    
    $myfile=fopen("dosya2.txt","a+");
    $title="php dersleri\n";
    fwrite($myfile,$title);
    //şuanda cursor sayfa sonund aolduğu için okuma işlemine drekt devam edersek hiçbir şey okumaz
    //önce fseek() methodu ile cursor ü tekrar sayfa başına getirmeliyiz.
    fseek($myfile,0);
    $size=filesize("dosya2.txt");    
    echo fread($myfile,$size);

?>