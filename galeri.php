<!DOCTYPE php>
<?php
include('baglan.php');
$sorgu = mysqli_query($conn,"select * from genel_bilgiler");
$genel_bilgiler = mysqli_fetch_array($sorgu);

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

$sorgu7 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=7");
$foto7 = mysqli_fetch_array($sorgu7);

$sorgu8 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=8");
$foto8 = mysqli_fetch_array($sorgu8);

$sorgu9 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=9");
$foto9 = mysqli_fetch_array($sorgu9);

$sorgu10 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=10");
$foto10 = mysqli_fetch_array($sorgu10);

$sorgu11 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=11");
$foto11 = mysqli_fetch_array($sorgu11);

$sorgu12 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=12");
$foto12 = mysqli_fetch_array($sorgu12);

$sorgu13 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=13");
$foto13 = mysqli_fetch_array($sorgu13);

$sorgu14 = mysqli_query($conn,"select * from ogrenci_bilgileri where id=14");
$foto14 = mysqli_fetch_array($sorgu14);
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
                    <a href="index.php" class="nav-item nav-link">Ana Sayfa</a>
                    <a href="hakkimizda.php" class="nav-item nav-link">Hakkımızda</a>
                    <a href="siniflar.php" class="nav-item nav-link">Sınıflar</a>
                    <!-- <a href="satin_alma.php" class="nav-item nav-link">Satın Alma</a> -->
                    <a href="galeri.php" class="nav-item nav-link active">Galeri</a>
                    <a href="iletisim.php" class="nav-item nav-link">İletişim</a>
                </div>
                <a href="siniflar.php" class="btn btn-primary px-4">Sınıfa Katıl</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Galeri</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Ana Sayfa</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Galeri</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Galerimiz</span></p>
                <h1 class="mb-4">öğrencilerimizin Fotoğrafları</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">Hepsi</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">Kızlar</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">Erkekler</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">Grup Çalışması</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto1["fotograflar"];  ?>" alt=""> <br>
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto1["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto2["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto2["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto3["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto3["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto4["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto4["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto5["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto5["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto6["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto6["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto7["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto7["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto8["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto8["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto9["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto9["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto10["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto10["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto11["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto11["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto12["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto12["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto13["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto13["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/uni_ogr/<?php echo $foto14["fotograflar"];  ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/uni_ogr/<?php echo $foto14["fotograflar"];  ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Footer Start -->
    <!-- <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5"> -->
                <!-- <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-white">KidKinder</span>
                </a> -->
                <!-- <p>Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr stet diam duo eos rebum ipsum diam ipsum elitr.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div> -->
            <!-- </div> -->
            <!-- <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Get In Touch</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Address</h5>
                        <p>123 Street, New York, USA</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Phone</h5>
                        <p>+012 345 67890</p>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Ana Sayfa</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Hakkımızda</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Sınıflar</a>
                     <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Teachers</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Blog</a> -->
                    <!-- <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Hakkımızda</a> -->
                <!-- </div> -->
            <!-- </div>  -->
            <!-- <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                            required="required" />
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block border-0 py-3" type="submit">Submit Now</button>
                    </div>
                </form>
            </div> -->
        <!-- </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                by
                <a class="text-primary font-weight-bold" href="https://phpcodex.com">php Codex</a>
            </p>
        </div> -->
    <!-- </div> -->
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