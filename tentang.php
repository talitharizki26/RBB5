<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ruang Berproses</title>
    <link rel="icon" href="img/icon.png" type="image/png" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tentang.css?v=<?php echo time(); ?>">
</head>

<body class="hero-section">
    <header>
        <div class="navigation-wrap bg-light start-header start-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand"><img src="img/logo-new.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto py-4 py-md-0">
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="index2.php">Beranda</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="layanan.php">Layanan</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="program.php">Program</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="artikel.php">Artikel</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                        <a class="nav-link" href="tentang.php">Tentang</a>
                                    </li>
                                    <?php
                                    if (!isset($_SESSION["login"])) {
                                    ?>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a href="pengguna/login.php" class="nav-link">Masuk</a>
                                        </li>
                                        <?php
                                    } else {
                                        if ($_SESSION["role"] == 1) {
                                        ?>
                                            <li>
                                                <a href="admin/dashboard.php" class="nav-link">Rekap Admin</a>

                                            </li>
                                        <?php
                                        }
                                        ?>
                                        <li><a href="logout.php" class="nav-link">Logout</a></li><?php
                                                                                                }
                                                                                                    ?>
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="section full-height">
            <div class="absolute-center">
                <div class="section jumbotron-section-tentang">
                    <div class="container">
                        <div class="text-center text-md-center">
                            <h1 class="font-weight-600">Tentang Ruang Berproses</h1>
                            <img class="lebar" src="img/hero/hero-tentang.png" alt="Hero Image">
                            <!-- <a href="http://www.freepik.com">Designed by Freepik</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section pengenalan">
            <div class="container">
                <div class="card-deck text-lg-left text-center">
                    <div class="card card-kenal">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-6 col-12 my-auto text-md-left text-center">
                                    <h3 class="card-title">Selamat datang di Ruang Berproses</h3>
                                    <p>Mempelajari psikologi tidak serta merta membuat seseorang paham 100% bagaimana cara merawat dan menjaga kesehatan mental, apalagi bagi yang tidak sama sekali menerima edukasi terkait kesehatan mental. Padahal, kebutuhan akan edukasi tersebut sangatlah penting. Bagaimana seseorang dalam proses kehidupannya memiliki wadah dalam melihat dirinya lebih positif dan mampu menjadi manusia yang berdampak bagi orang disekelilingnya adalah harapan kami dalam mendirikan Ruang untuk siapapun Berproses dengan kondisi kesehatan mentalnya.</p>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-6 col-12 my-auto text-md-right text-center">
                                    <img src="img/yo.jpeg" alt="Hero Image" width="20%">
                                    <h5>Yohana Sondang Activa Hutabarat, M.Psi</h5>
                                    <h6>Founder Ruang Berproses</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section visi-misi">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <img src="img/tentang/tentang-visimisi.jpg" alt="Hero Image" width="90%">
                        <!-- <a href="http://www.freepik.com">Designed by stories / Freepik</a> -->
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6 col-12 my-auto text-md-left text-center">
                        <ul class="check">
                            <li>
                                <h4>Visi</h4>
                                <p> Setiap orang menyadari bahwa Kesehatan mental adalah penting dan setiap orang memiliki ruang untuk berproses dengan dirinya.</p>
                            </li>
                            <li>
                                <h4>Misi</h4>
                                <p>Mengadvokasi mengenai pentingnya akan Kesehatan mental dan mendampingi setiap orang yang ingin berproses dengan kondisi kesehatan mentalnya selaras dengan perubahan yang terus terjadi didalam proses kehidupan.</p>
                            </li>
                            <li>
                                <h4>Tagline</h4>
                                <p>"Selalu ada ruang untuk kamu berproses menuju versi terbaikmu."</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section profil">
            <div class="container">
                <h2 class="text-center font-weight-600">Profil Ruang Berproses</h2>

            </div>
        </div>

        <div class="section associte">
            <div class="container">
                <h2 class="text-center font-weight-600">Associate Psychologist</h2>

            </div>
        </div>


        <section class="testimonials">
            <div class="container">
                <h2 class="text-center font-weight-600">Testimoni</h2>
                <div class="wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="testimonials-list" class="owl-carousel">
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/user.png" alt="">
                                        <p>"Pembicaranya asik dan moderatornya juga keren. Disetiap pembicara selesai menjawab pertanyaan peserta, moderator selalu menyimpulkan jawaban pembicara"</p>
                                        <p>-R.A.B (21 tahun, Mahasiswa psikologi)</p>
                                    </div>
                                    <div class="testimonial-name">Psytalk43</div>
                                </div>

                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/user.png" alt="">
                                        <p>"Kesan webinar sangat baik. Saya mendapat wawasan lebih luas dan mendalam mengenai journaling serta manfaatnya secara spesifik terhadap kesehatan mental, karena saya belum pernah mendalami mengenai journaling"</p>
                                        <p>-S.E.A (42 tahun, Konselor sekolah)</p>
                                    </div>
                                    <div class="testimonial-name"> Kelas Berproses 1</div>
                                </div>

                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/user.png" alt="">
                                        <p>"Seru bangetttt menjadi pengalaman dalam hidup saya karena dengan adanya sesi ini saya dapat bercerita apa yang dialami oleh saya sehingga saya mendapatkan kesempatan untuk bercerita pada sesi ini"</p>
                                        <p>-M</p>
                                    </div>
                                    <div class="testimonial-name">Support Group</div>
                                </div>

                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/user.png" alt="">
                                        <p>"Awalnya saya merasa takut dan ragu untuk bercerita pada orang lain. Namun setelah saya melakukan sesi konseling saya merasa lega, nyaman, dan seperti menemukan hal yang saya cari selama ini. Bukan sekedar omongan motivasi melainkan ilmu dan solusi."</p>
                                        <p>-S</p>
                                    </div>
                                    <div class="testimonial-name">Peer Counseling</div>
                                </div>

                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="imgPlaceholder" src="img/user.png" alt="">
                                        <p>"Menurutku gak terlalu mahal dan Psikolog RB yang konseling aku waktu itu juga baik & bisa menghangatkan suasana, ngga canggung juga, yang jelas aku bisa mengatasi masalahku."</p>
                                        <p>-N</p>
                                    </div>
                                    <div class="testimonial-name">Counseling Profesional</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>



        <div class="section balik-layar">
            <div class="container">
                <h2 class="text-center font-weight-600">Di Balik Layar</h2>
                <div class="row mt-5 col-md-12">
                    <div class="center">
                        <button class="accordion">Department Event & Content</button>
                        <div class="panel">
                            <button class="accordionn">Div. Content Creator
                                <hr>
                                <p>Clarita</p>
                                <p>Gita</p>
                                <p>Nadya</p>
                            </button>
                            <button class="accordionn">Div. IG Live
                                <hr>
                                <p>Lulu</p>
                                <p>Kevin</p>
                                <p>Meilinda</p>
                            </button>
                            <button class="accordionn">Div. Webinar
                                <hr>
                                <p>Rafael</p>
                                <p>Hana Budi</p>
                                <p>Debora</p>
                            </button>
                            <button class="accordionn">Div. Design and Video
                                <hr>
                                <p>Anisa Sri</p>
                                <p> Fitri Nur</p>
                                <p>Wildanti</p>
                                <p> Yohanna Rekhatalia</p>
                            </button>
                        </div>
                        <button class="accordion">Department Service</button>
                        <div class="panel">
                            <button class="accordionn">Div. Counseling
                                <hr>
                                <p>Anindya Putri Pramadi</p>
                                <p>Rr Dyah Ayu Putri Ambarsari</p>
                                <p>Veronica Dinda Sekar Kristanti</p>
                            </button>
                            <button class="accordionn">Div. Support Group
                                <hr>
                                <p>Teena Beatricia</p>
                                <p>Salma Azzahra</p>
                            </button>
                        </div>
                        <button class="accordion">Department Social Media & Branding</button>
                        <div class="panel">
                            <button class="accordionn">Div. Public Relation
                                <hr>
                                <p>Jeannetta</p>
                                <p>Josephine</p>
                                <p>Fani Wulandari</p>
                                <p>Silvia</p>
                            </button>
                            <button class="accordionn">IG Specialist
                                <hr>
                                <p>Siska</p>
                                <p>Riana</p>
                            </button>
                            <button class="accordionn">Tiktok Specialist
                                <hr>
                                <p>Herdiana</p>
                            </button>
                            <button class="accordionn">Twitter & FB Specialist
                                <hr>
                                <p>Intan</p>
                                <p>Anbari</p>
                            </button>
                            <button class="accordionn">LinkedIn Specialist
                                <hr>
                                <p>Atikah</p>
                            </button>
                        </div>
                        <button class="accordion">Department Program & Creative</button>
                        <div class="panel">
                            <button class="accordionn">Div. Human Resources
                                <hr>
                                <p>Maria Indira</p>
                                <p>Alvina</p>
                            </button>
                            <button class="accordionn">Div. IT
                                <hr>
                                <p>Friska Andalusia</p>
                                <p>Elfal Birri</p>
                                <p>Talitha Rizki Ghaisanni Rioeh</p>
                            </button>
                            <button class="accordionn">Div. Branding
                                <hr>
                                <p>Kefas Radito S.T</p>
                                <p>Trishya Juwita</p>
                                <p>Banu Faris Adinata Harisman</p>
                                <p>Vrista Claudia</p>
                                <p>Anynda Berlian Dini</p>
                                <p>Maryam Dzimar Yasmin</p>
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>






    </main>

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 footer-about wow fadeInUp text-md-left text-center">
                        <img class="logo-footer" src="img/logo-new.png" alt="logo-footer">
                        <p>
                            Jangan ragu untuk menghubungi kami melalui telepon, email, atau media sosial kami. Kami pasti akan kembali menghubungi Anda sesegera mungkin.
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown text-md-left text-center">
                        <h3>Kontak</h3>
                        <p><i class="fas fa-phone"></i><a href="https://wa.me/+6281573499529">+6281573499529 (Ruang Berproses)</a></p>
                        <p><i class="fas fa-phone"></i><a href="https://wa.me/+6281280077254">+6281280077254 (Hakita)</a></p>
                        <p><i class="fas fa-envelope"></i><a href="mailto:admin@ruangberproses.id">admin@ruangberproses.id</a></p>
                    </div>
                    <div class="col-md-4 col-lg-3 footer-social wow fadeInUp text-md-left text-center">
                        <h3>Sosial Media</h3>
                        <p>
                            <a href="https://facebook.com/RuangBerproses/"><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/ruangberproses/"><i class="fab fa-twitter"></i></a>
                            <a href="https://t.me/ruangberproses/"><i class="fab fa-telegram"></i></a>
                            <a href="https://www.instagram.com/ruangberproses.id/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/ruang-berproses/"><i class="fab fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="footer-copyright">
                        <p>Copyright &copy; 2021 Ruang Berproses. All Rights Reserved | Tim IT RB</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- Script -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    (function($) {
        "use strict";

        $(function() {
            var header = $(".start-style");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 10) {
                    header.removeClass('start-style').addClass("scroll-on");
                } else {
                    header.removeClass("scroll-on").addClass('start-style');
                }
            });
        });

        //Animation

        $(document).ready(function() {
            $('body.hero-section').removeClass('hero-section');
        });

        //Menu On Hover

        $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
            if ($(window).width() > 750) {
                var _d = $(e.target).closest('.nav-item');
                _d.addClass('show');
                setTimeout(function() {
                    _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
                }, 1);
            }
        });

    })(jQuery);
</script>
<script src="js/faq.js"></script>
<script src="js/testimonial.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>

</html>