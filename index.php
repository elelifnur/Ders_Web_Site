<!DOCTYPE php>
<?php
include('baglan.php');
$sorgu = mysqli_query($conn,"select * from genel_bilgiler");
$genel_bilgiler = mysqli_fetch_array($sorgu);

$sorgula1 = mysqli_query($conn,"select * from dersler where id=1");
$isim1 = mysqli_fetch_array($sorgula1);

$sorgula2 = mysqli_query($conn,"select * from dersler where id=2");
$isim2 = mysqli_fetch_array($sorgula2);

$sorgula3 = mysqli_query($conn,"select * from dersler where id=3");
$isim3 = mysqli_fetch_array($sorgula3);


$sor1 = mysqli_query($conn,"select * from ders_acikla where id=1");
$acik1 = mysqli_fetch_array($sor1);

$sorgu1 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=1");
$foto1 = mysqli_fetch_array($sorgu1);

$sorgu2 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=2");
$foto2 = mysqli_fetch_array($sorgu2);

$sorgu3 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=3");
$foto3 = mysqli_fetch_array($sorgu3);

$sorgu4 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=4");
$foto4 = mysqli_fetch_array($sorgu4);

$sorgu5 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=5");
$foto5 = mysqli_fetch_array($sorgu5);

$sorgu6 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=6");
$foto6 = mysqli_fetch_array($sorgu6);

$sorgu11 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=11");
$foto11 = mysqli_fetch_array($sorgu11);


$sor = mysqli_query($conn,"select * from ders_notlari");
$ders_notlari = mysqli_fetch_array($sor);
$soru = mysqli_query($conn,"select * from konu_basliklari");
$konu_basliklari = mysqli_fetch_array($soru);
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $genel_bilgiler['site_adi'];  ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free php Templates" name="keywords">
    <meta content="Free php Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <i class="flaticon-043-teddy-bear"></i>
                <span class="text-primary"><?php echo $genel_bilgiler['site_adi'];  ?></span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Ana Sayfa</a>
                    <a href="hakkimizda.php" class="nav-item nav-link">Hakkımızda</a>
                    <a href="siniflar.php" class="nav-item nav-link">Sınıflar</a>
                    <a href="galeri.php" class="nav-item nav-link">Galeri</a>
                    <!-- <a href="satin_alma.php" class="nav-item nav-link">Satın Alma</a> -->
                    <a href="iletisim.php" class="nav-item nav-link">İletişim</a>
                </div>
                <a href="siniflar.php" class="btn btn-primary px-4">Sınıfa Katıl</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Öğrencilerin Öğrenme Merkezi</h4>
                <h1 class="display-3 font-weight-bold text-white">Hızlı ve Etkili Öğrenme Yeri</h1>
                <p class="text-white mb-4"><?php echo $genel_bilgiler['kisa_bilgi'];  ?></p>
                <!-- <a href="" class="btn btn-secondary mt-1 py-3 px-5">Daha fazla Öğren</a> -->
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="img/uni_ogr/<?php echo $foto11["fotograflar"]; ?>" alt=""> 
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4><?php echo $isim1['dersler'];  ?></h4>
                            <p class="m-0"><?php echo $acik1['liner_cebir'];  ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4><?php echo $isim2['dersler'];  ?></h4>
                            <p class="m-0"><?php echo $acik1['tbt'];  ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4><?php echo $isim3['dersler'];  ?></h4>
                            <p class="m-0"><?php echo $acik1['web_programlama'];  ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Start -->
	
   


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Yorumlarınız</span></p>
                <h1 class="mb-4">Kullanıcı Yorumları</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                         <?php echo $foto1["yorumlar"];  ?> 
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/uni_ogr/<?php echo $foto1["fotograflar"];  ?>" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5><?php echo $foto1["adi"]." ".$foto1['soyadi'];  ?></h5>
                            <i>Oto Galerici</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        <?php echo $foto2["yorumlar"];  ?>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/uni_ogr/<?php echo $foto2["fotograflar"];  ?>" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5><?php echo $foto2["adi"]." ".$foto2['soyadi'];  ?></h5>
                            <i>Aşçı</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        <?php echo $foto3["yorumlar"];  ?>
                    </div>
                    
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/uni_ogr/<?php echo $foto3["fotograflar"];  ?>" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5><?php echo $foto3["adi"]." ".$foto3['soyadi'];  ?></h5>
                            <i>Esnaf</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        <?php echo $foto4["yorumlar"];  ?>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/uni_ogr/<?php echo $foto4["fotograflar"];  ?>" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5><?php echo $foto4["adi"]." ".$foto4['soyadi'];  ?></h5>
                            <i>Marangoz</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        <?php echo $foto5["yorumlar"];  ?>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/uni_ogr/<?php echo $foto5["fotograflar"];  ?>" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5><?php echo $foto5["adi"]." ".$foto5['soyadi'];  ?></h5>
                            <i>Marangoz</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Son Eklenenler</span></p>
                <h1 class="mb-4">Son Eklenen Ders Notları</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class=""><?php echo $konu_basliklari['lineer_cebir'];  ?></h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> <?php echo $genel_bilgiler['adi']." ".$genel_bilgiler['soyadi'];  ?></small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i>Lineer cebir</small>
                                <!-- <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small> -->
                            </div>
                            <!-- <p>fnneısfnkn.</p> -->
                            <a href="notlar.php" class="btn btn-primary px-4 mx-auto my-2">Daha Fazla</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-2.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class=""><?php echo $konu_basliklari['tbt'];  ?></h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i><?php echo $genel_bilgiler['adi']." ".$genel_bilgiler['soyadi'];  ?></small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Temel Bilgi Teknolojileri</small>
                                <!-- <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small> -->
                            </div>
                            <!-- <p>eıhfı</p> -->
                            <a href="notlar.php" class="btn btn-primary px-4 mx-auto my-2">Daha Fazla</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-3.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class=""><?php echo $konu_basliklari['web_programlama'];  ?></h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i><?php echo $genel_bilgiler['adi']." ".$genel_bilgiler['soyadi'];  ?></small></small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Programlama</small>
                                <!-- <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small> -->
                            </div>
                            <!-- <p>...</p> -->
                            <a href="notlar.php" class="btn btn-primary px-4 mx-auto my-2">Daha Fazla</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                <p>
                    <a href="proje_raporum.docx" target="blank">Proje Raporu </a> - 
	                <a href="sablonlar/adward" target="blank">Şablon Orjinal Versiyonu</a>
                </p>
                    <!-- <i class="flaticon-043-teddy-bear"></i> -->
                    <!-- <span class="text-white">KidKinder</span> -->
                </a>
                <!-- <p>.</p> -->
                <!-- <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div> -->
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <!-- <h3 class="text-primary mb-4">Get In Touch</h3> -->
                <div class="d-flex">
                    <!-- <h4 class="fa fa-map-marker-alt text-primary"></h4> -->
                    <div class="pl-3">
                        <!-- <h5 class="text-white">Adres</h5>
                        <p>123 Street, New York, USA</p> -->
                    </div>
                </div>
                <div class="d-flex">
                    <!-- <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3"> -->
                        <!-- <h5 class="text-white">Email</h5>
                        <p>info@example.com</p> -->
                    </div>
                </div>
                <div class="d-flex">
                    <!-- <h4 class="fa fa-phone-alt text-primary"></h4> -->
                    <!-- <div class="pl-3"> -->
                        <!-- <h5 class="text-white">Phone</h5>
                        <p>+012 345 67890</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <!-- <h3 class="text-primary mb-4">Quick Links</h3> -->
                <!-- <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Anasayfa</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Hakkımızda</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Sınıflarımız</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Teachers</a> 
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bloğumuz</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>İletişim</a>
                </div> -->
            </div>
            <!-- <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                            required="required" />
                    </div> -->
                    <!-- <div>
                        <button class="btn btn-primary btn-block border-0 py-3" type="submit">Submit Now</button>
                    </div>
                </form>
            </div> -->
        </div>
        <!-- <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                by
                <a class="text-primary font-weight-bold" href="https://phpcodex.com">php Codex</a>
            </p>
        </div> -->
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>