<?php

//buradaki değişkenleri variables klasorune ekledik
require "libs/variables.php";
//buradaki fonksiyonları functions klasorune ekledik
require "libs/functions.php";



?>
<?php
if (isset($_GET["categoryid"]) && is_numeric($_GET["categoryid"])) {
    $secilenKategori = $_GET["categoryid"];
    $sonuclar = getCoursesByCategoryId($secilenKategori);
} elseif (isset($_GET["q"])) {
    $sonuclar = getCoursesByKeyword($_GET["q"]);
} else {
    $sonuclar = getCourses(false,true);
}
?>
<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>
<!-- div.container yaz enter bas -->
<div class="container my-3">
    <div class="row">
        <div class="col-3">
            <?php include "partials/_menu.php" ?>
        </div>
        <div class="col-9">
            <?php include "partials/_title.php" ?>
            <?php if (mysqli_num_rows($sonuclar) > 0): ?>
                <?php
                while ($kurs = mysqli_fetch_assoc($sonuclar)) : ?>
                    <!--if bloğunun açılışı-->
                    <?php if ($kurs["onay"]):  ?>
                        <div class="card mb-3">
                            <!-- div.row  ile oluştu ve row 12 coldan oluşur-->
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/<?php echo $kurs["resim"]; ?>" alt="" class="img-fluid rounded-start">
                                </div>
                                <div class="col-8">
                                    <!-- div.card-body -->
                                    <div class="card-body">
                                        <!-- h5.card-title -->
                                        <h5 class="card-title">
                                            <a href="course-details.php?id=<?php echo $kurs["id"]; ?>">
                                                <?php echo $kurs["baslik"]; ?>
                                            </a>
                                        </h5>
                                        <!-- p.card-text -->
                                        <p class="card-text">
                                            <?php echo kisaAciklama($kurs["altBaslik"]) ?>
                                        </p>
                                        <p>
                                            <?php if ($kurs["begeniSayisi"] > 0): ?>
                                                <span class="badge rounded-pill text-bg-primary">
                                                    Beğeni :<?php echo $kurs["begeniSayisi"] ?>
                                                </span>
                                            <?php endif ?>
                                            <?php if ($kurs["yorumSayisi"] > 0): ?>
                                                <span class="badge rounded-pill text-bg-danger">
                                                    Yorum :<?php echo $kurs["yorumSayisi"] ?>
                                                </span>
                                            <?php else: ?>
                                                <span class="badge rounded-pill text-bg-warning">
                                                    İlk Yorumu Sen Yap
                                                </span>
                                            <?php endif ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--if bloğunun kapanışı-->
                    <?php endif; ?>
                <?php endwhile ?>
            <?php else: ?>
                <div class="alert alert-warning">
                    Kurs Bulunamadı.
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>
<?php include "partials/_footer.php" ?>