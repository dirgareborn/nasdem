<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <a href="{{URL('/')}}" class="logo me-2"><img src="{{asset('img/logo.png') }}" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto hidden-xs"><a href="{{URL('/')}}">Partai <span>Nas</span><strong class="text-danger">Dem</strong></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{URL('/')}}" class="active">Beranda</a></li>

          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{asset('pengurus-dpd') }}">Pengurus DPD</a></li>
            </ul>
          </li>

          <li><a href="{{asset('visi-misi') }}">Visi Misi</a></li>
          <li><a href="{{asset('berita') }}">Berita</a></li>
          <li><a href="{{asset('kegiatan') }}">Kegiatan</a></li>
          <li><a href="{{asset('kontak-kami') }}">Kontak</a></li>

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
