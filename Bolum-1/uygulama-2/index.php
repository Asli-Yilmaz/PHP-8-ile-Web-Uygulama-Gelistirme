<?php
    const title="Popüler Kurslar";

    $kurs1_baslik="Php Kursu";
    $kurs1_altBaslik="Sıfırdan ileri seviye Php ile web geliştirme";
    $kurs1_resim="1.jpg";
    $kurs1_yayinTarihi="31.05.2025";
    $kurs1_yorumSayisi="100";
    $kurs1_begeniSayisi="300";

    $kurs2_baslik="Python Kursu";
    $kurs2_altBaslik="Sıfırdan ileri seviye Python programlama";
    $kurs2_resim="2.jpg";
    $kurs2_yayinTarihi="31.05.2025";
    $kurs2_yorumSayisi="100";
    $kurs2_begeniSayisi="300";

    $kurs3_baslik="Node.js Kursu";
    $kurs3_altBaslik="Sıfırdan ileri seviye Node.js ile web geliştirme";
    $kurs3_resim="1.jpg";
    $kurs3_yayinTarihi="31.05.2025";
    $kurs3_yorumSayisi="100";
    $kurs3_begeniSayisi="300";
    
    $kurs1_altBaslik=ucfirst(strtolower($kurs1_altBaslik));
    $kurs2_altBaslik=ucfirst(strtolower($kurs2_altBaslik));
    $kurs3_altBaslik=ucfirst(strtolower($kurs3_altBaslik));

    $kurs1_altBaslik=substr($kurs1_altBaslik,0,40)."...";
    $kurs2_altBaslik=substr($kurs2_altBaslik,0,40)."...";
    $kurs3_altBaslik=substr($kurs3_altBaslik,0,40)."...";

    $kurs1_url=str_replace([" ","."],["-",""],strtolower($kurs1_baslik));
    $kurs2_url=str_replace([" ","."],["-",""],strtolower($kurs2_baslik));
    $kurs3_url=str_replace([" ","."],["-",""],strtolower($kurs3_baslik));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <!-- div.container yaz enter bas -->
    <div class="container my-3">
        <h1 class="mb-3"><?php echo title;?></h1>
        <!-- div.card yaz enter bas -->
        <div class="card mb-3">
            <!-- div.row  ile oluştu ve row 12 coldan oluşur-->
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim;?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <!-- div.card-body -->
                    <div class="card-body">
                        <!-- h5.card-title -->
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url; ?>" >
                                <?php echo $kurs1_baslik;?>
                            </a>
                        </h5>
                        <!-- p.card-text -->
                        <p class="card-text"><?php echo $kurs1_altBaslik;?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni :<?php echo $kurs1_begeniSayisi?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum :<?php echo $kurs1_yorumSayisi?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="card mb-3">
            <!-- div.row  ile oluştu ve row 12 coldan oluşur-->
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs2_resim;?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <!-- div.card-body -->
                    <div class="card-body">
                        <!-- h5.card-title -->
                        <h5 class="card-title">
                            <a href="<?php echo $kurs2_url; ?>" >
                                <?php echo $kurs2_baslik;?>
                            </a>
                        </h5>
                        <!-- p.card-text -->
                        <p class="card-text"><?php echo $kurs2_altBaslik;?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni :<?php echo $kurs2_begeniSayisi?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum :<?php echo $kurs2_yorumSayisi?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div> 
        <div class="card mb-3">
            <!-- div.row  ile oluştu ve row 12 coldan oluşur-->
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs3_resim;?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <!-- div.card-body -->
                    <div class="card-body">
                        <!-- h5.card-title -->
                        <h5 class="card-title">
                            <a href="<?php echo $kurs3_url; ?>" >
                                <?php echo $kurs3_baslik;?>
                            </a>
                        </h5>
                        <!-- p.card-text -->
                        <p class="card-text"><?php echo $kurs3_altBaslik;?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni :<?php echo $kurs3_begeniSayisi?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum :<?php echo $kurs3_yorumSayisi?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>