<?php

    $myfile=fopen("course.json","r");
    $size=filesize("course.json");

    $jsonString=fread($myfile,$size);
    //echo $jsonArray["title"]; //hata verir.

    //string to array=>decode
    $jsonArray=json_decode($jsonString,true);
    echo $jsonArray["title"];
    echo $jsonArray["description"];
    echo $jsonArray["image"];

?>