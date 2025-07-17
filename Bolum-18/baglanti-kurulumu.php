<?php

    //desteknelenen veritabanı türlerini gösterir
    print_r( PDO::getAvailableDrivers());

    //bağlantı oluşturma
    $host="localhost";
    $user="root";
    $password="";
    $dbName="mydb";

    try{
        $dataSourceName="mysql:host=".$host.";dbName=".$dbName;
        $baglanti=new PDO($dataSourceName,$user,$password);
        //hata gösterme modunun tanımlanması
        $baglanti->setAttribute(PDO::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
        echo "Bağlantı Yapıldı.";
    }catch(PDOException $error){
        echo "Bağlantu hatası: ".$error->getMessage();
    }



?>