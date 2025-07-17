<?php

    //desteknelenen veritabanı türlerini gösterir
    //print_r( PDO::getAvailableDrivers());

    //bağlantı oluşturma
    $host="localhost";
    $user="root";
    $password="";
    $dbName="mydb";

    try{
        $dataSourceName="mysql:host=".$host.";dbname=".$dbName;
        $pdo=new PDO($dataSourceName,$user,$password);
        //hata gösterme modunun tanımlanması
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(pdo::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        echo "Bağlantı Yapıldı."."<br>";
    }catch(PDOException $error){
        echo "Bağlantu hatası: ".$error->getMessage()."<br>";
    }



?>