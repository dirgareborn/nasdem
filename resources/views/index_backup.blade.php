<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="{{asset('favicons/favicon.ico') }}" rel="icon">
  <link href="{{asset('favicons/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('web/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('web/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('web/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v4.7.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="index.html" class="logo me-2"><img src="{{asset('img/logo.png') }}" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto hidden-xs"><a href="index.html">Partai <span>Nas</span><strong class="text-danger">Dem</strong></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html" class="active">Beranda</a></li>

          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">Pengurus DPD</a></li>
            </ul>
          </li>

          <li><a href="services.html">Berita</a></li>
          <li><a href="portfolio.html">Kegiatan</a></li>
          <li><a href="contact.html">Kontak</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(web/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2 class="hero-title">Partai Nas<span>Dem</span></h2>
              <h3 class="hero-title">Restorasi Indonesia</h3>
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(web/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>NasDem Restorasi Perubahan Indonesia</h2>
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(web/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>NasDem</h2>
              <h2>Politik Tanpa Mahar</h2>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">Politik Gagasan Surya Paloh</a></h4>
              <button class="btn flat btn-lg btn-danger">Detail</button>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Ideologi Partai NasDem</a></h4>
              <button type="button" class="btn btn-flat flat btn-lg btn-danger">Detail</button>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Ikut Gerakan Perubahan</a></h4>
              <a href="https://digital.nasdem.id" target="_blank" class="btn flat btn-lg btn-danger">Daftar Sekarang</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>Siapa Kita</h2>
        </div>
        <p class="text-center">
        “Kita membangun Partai NasDem bukan untuk menjadikannya sebuah <br> 
        perusahaan dalam logika industrialis. Partai adalah instrument <br> 
        pergerakan; di sini tak boleh ada semangat transaksional, tak boleh ada <br> 
        yang berpikir untuk mencari selisih atau berdagang. NasDem adalah <br> 
         partai yang menjadi sikap ideologis dan dikelola secara profesional.” <br> 
         - Surya Paloh
        </p>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-4 col-md-4 col-4">
                <figure class="figure">
                    <img src="{{asset('web/img/portfolio/portfolio-1.png') }}" class="img-fluid" alt="">
                    <figcaption class="figure-caption">
                        <h5 class="h5-border-bottom">Visi Partai NasDem</h5>
                    </figcaption>
                </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-4">
          <figure class="figure">
              <img src="{{asset('web/img/portfolio/portfolio-2.png') }}" class="img-fluid" alt="">
              <figcaption class="figure-caption">
                  <h5 class="h5-border-bottom">Misi Partai NasDem</h5>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-4">
          <figure class="figure">
              <img src="{{asset('web/img/portfolio/portfolio-3.png') }}" class="img-fluid" alt="">
              <figcaption class="figure-caption">
                  <h5 class="h5-border-bottom">Pengurus DPD Partai NasDem</h5>
              </figcaption>
            </figure>
          </div>
        </div>

      </div>
    </section>
    <!-- End Our Clients Section -->
    <!-- Number Section -->
    <section id="number-large" class="number-large">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-4 col-md-4 col-4">
                    <h1>01</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-4">
                    <h1>02</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-4">
                    <h1>03</h1>
                </div>
            </div>
        </div>        
    </section>
    <!-- End Number Section -->
       <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us" style="background-image: url('{{ asset('web/img/bg/h1-bg-img-1.jpg') }}'); background-position: bottom center;">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
              <!-- Embed Video -->
              <div class="entry-img img-thumb">
                <img width="500" height="400" src="https://nasdem.id/wp-content/uploads/2021/08/Screenshot11.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://nasdem.id/wp-content/uploads/2021/08/Screenshot11.png 594w, https://nasdem.id/wp-content/uploads/2021/08/Screenshot11-300x236.png 300w" sizes="(max-width: 594px) 100vw, 594px" />	
            </div>
                    <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dghgWaJfCjw?rel=0" allowfullscreen></iframe> -->
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
          <div class="section-title">
          <h2 style="text-align:left;color:white;text-transform:none;">Surya Paloh, Bapak Restorasi Indonesia</h2>
        </div>
            <p style="text-align:justify;color:white;text-transform:none;">
            Saya percaya proses Pendidikan politik yang sendiri yang sedang kita jalankan dapat memberikan hasil yang jauh lebih berarti. Saya percaya kalau memang kita konsisten terus dari waktu ke waktu. Berani menawarkan alternatif-alternatif pikiran. Yang tidak hanya terjebak pada langkah-langkah yg normatif. Tapi, berani melangkah jauh dari pendekatan2 yang normative, bolehlah kita mengharap dan bertekad menjadi partai ..nomor satu.” - Surya Paloh
            </p>
            <p style="font-family: TuesdayNight;color:white;">Surya Paloh</p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

       <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-4" data-aos="fade-right">
          <div class="section-title">
          <h2 style="text-align:left;text-transform:none;">Berita Kegiatan
dari Kader Kab. Gowa</h2>
        </div>              
        </div>
          <div class="col-lg-4 pt-4 pt-lg-0" data-aos="fade-left">
              <p style="text-align:justify;text-transform:none;">
                Anggota Partai NasDem aktif melakukan kegiatan sosial kemasyarakatan yang memberikan impact positif untuk kemajuan negeri ini. Pergerakan sayap partai juga memperluas cakupan Gerakan Perubahan yang diperjuangkan Partai NasDem.
            </p>
        </div>
        <div class="col-lg-4 pt-4 pt-lg-0" data-aos="fade-left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d427543.3047041853!2d119.58834039609718!3d-5.391308016541686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbec1606979d095%3A0x3030bfbcaf76fd0!2sKabupaten%20Gowa%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1643983925896!5m2!1sid!2sid" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    
    </div>
        </div>
      </div>
    </section><!-- End About Us Section -->
 <!-- welcome Section -->
 <section id="welcome" class="welcome">
        <div class="container-fluid" data-aos="fade-up">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 col-md-12 col-12">
                    <h1>Selamat Bergabung dalam Gerakan Perubahan!</h1>
                </div>
            </div>
        </div>        
    </section>
    <!-- End welcome Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h5>Tentang Kami</h5>
            <p>Anda baru saja melihat Partai yang cocok untuk Anda memperjuangkan kemajuan Indonesia.</p>
            <br>
            
            <p>
            Jl. Gontang Raya No.54<br>
            Kabupaten Gowa, Sulawesi Selatan<br>
            90224<br><br>
              <strong>Whatsapp:</strong> <a href="tel:+6285299444337">085299444337</a> <br>
              <strong>Email:</strong> info@gowa.nasdem.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Berita Terbaru</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Akses Cepat</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Website Pemerintah Kab. Gowa</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">NasDem Pusat</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">NasDem Digital</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Perlindungan Privasi</a></li>
            </ul>
          </div>
          
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Subscribe Sekarang</h4>
            <p>Dapatkan e-mail informasi kegiatan dan berita terbaru dari NasDem langsung di inbox surat elektronik Anda.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Partai NasDem DPD Gowa</span></strong>. All Rights Reserved
        </div>
        <!-- <div class="credits"> -->
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        <!-- </div> -->
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('web/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('web/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('web/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('web/vendor/isotope-layout/isotope.pkgd.min.j') }}s"></script>
  <script src="{{ asset('web/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('web/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('web/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('web/js/main.js') }}"></script>

</body>

</html>