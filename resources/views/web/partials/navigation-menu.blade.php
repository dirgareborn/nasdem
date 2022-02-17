<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <a href="{{URL('/')}}" class="logo me-2"><img data-src="{{asset('img/logo.png') }}" alt="partai-nasdem" class="lazyload img-fluid"></a>
      <h2 class="logo me-auto d-xs-none d-sm-block"><a href="{{URL('/')}}">Partai <span>Nas</span><strong class="text-danger">Dem</strong></a></h2>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{URL('/')}}" class="active">Beranda</a></li>

          <li class="dropdown"><a href="{{asset('tentang-kami') }}"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{asset('pengurus-dpd') }}">Pengurus DPD</a></li>
            </ul>
          </li>

          <li><a href="{{asset('visi-misi') }}">Visi & Misi</a></li>
          <li class="dropdown"><a href="{{asset('berita') }}">Berita</a>
          <ul>
              @foreach ($category as $kategori)
              <li><a href="/kategori/{{ $kategori->slug }}">{{ $kategori->nama }} </a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="{{asset('kegiatan') }}">Kegiatan</a></li>
          <li><a href="{{asset('kontak-kami') }}">Kontak</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="header-social-links d-flex">
      <a href="{{ $konfigurasi->twitter ?? 'https://twitter.com'}}" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="{{ $konfigurasi->facebook ?? 'https://facebook.com'}}" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="{{ $konfigurasi->instagram ?? 'https://instagram.com'}}" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="{{ $konfigurasi->youtube ?? 'https://youtube.com'}}" class="youtube"><i class="bu bi-youtube"></i></a>
      </div>

    </div>
  </header><!-- End Header -->
