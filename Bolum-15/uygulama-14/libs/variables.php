<?php 
const title="Popüler Kurslar";

const db_user=array(
    "username"=>"asliyilmaz13",
    "password"=>"12345",
    "name"=>"Aslı YILMAZ",
);
$kategoriler=array(
        array("kategori_adi"=>"Programlama","aktif"=>true),
        array("kategori_adi"=>"Veri Analizi","aktif"=>false),
        array("kategori_adi"=>"Ofis Uygulamaları","aktif"=>false),
        array("kategori_adi"=>"Mobil Uygulamalar","aktif"=>false),
    );

$sehirler=array(
    "1"=>"Adana",
    "2"=>"Adıyaman",
    "3"=>"Afyon",
    "4"=>"Ağrı",
);

$hobilerArray=array(
    "1"=>"Sinema",
    "2"=>"Spor",
    "3"=>"Müzik",
);

$kurslar=array(
        1=>array(
            "baslik"=>"Php Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Php ile web geliştirme",
            "resim"=>"1.jpg",
            "yayinTarihi"=>"31.05.2025",
            "yorumSayisi"=>0,
            "begeniSayisi"=>10,
            "onay"=>true
        ),
        2=>array(
            "baslik"=>"Python Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Python programlama",
            "resim"=>"2.jpg",
            "yayinTarihi"=>"31.05.2025",
            "yorumSayisi"=>10,
            "begeniSayisi"=>0,
            "onay"=>true
        ),
        3=>array(
            "baslik"=>"Node.js Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Node.js ile web geliştirme",
            "resim"=>"3.jpg",
            "yayinTarihi"=>"31.05.2025",
            "yorumSayisi"=>10,
            "begeniSayisi"=>20,
            "onay"=>true
        )
    );
?>