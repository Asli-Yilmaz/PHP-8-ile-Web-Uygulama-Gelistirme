<?php 
const title="Popüler Kurslar";
$kategoriler=array(
        array("kategori_adi"=>"Programlama","aktif"=>true),
        array("kategori_adi"=>"Veri Analizi","aktif"=>false),
        array("kategori_adi"=>"Ofis Uygulamaları","aktif"=>false),
        array("kategori_adi"=>"Mobil Uygulamalar","aktif"=>false),
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