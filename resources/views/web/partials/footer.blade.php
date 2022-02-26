<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h5>Tentang Kami</h5>
            <p>Anda baru saja melihat Partai yang cocok untuk Anda memperjuangkan kemajuan Indonesia.</p>
            <br>
            
            <p>
            {{ $konfigurasi->address ?? 'Jl. Gontang Raya No.54'}}<br>
            {{ $konfigurasi->pos_code ?? '90224'}}<br><br>
              <strong>Whatsapp:</strong> <a href="tel:{{ $konfigurasi->telepon ?? '+6285299444337'}}">{{ $konfigurasi->telepon ?? '+6285299444337'}}</a> <br>
              <strong>Email:</strong> {{ $konfigurasi->email ?? 'info@gowa.nasdem.id'}}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Akses Cepat</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ URL('/')}}">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('kontak-kami')}}">Kontak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('tentang-kami')}}">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.termsofservicegenerator.net/live.php?token=9I4ix1f2Ld24Ha68fzZMTK7XhEd2LM9A">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('privacy-policy') }}">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link Terkait</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="http://gowakab.go.id/">Website Pemerintah Kab. Gowa</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://nasdem.id">Website Partai NasDem DPP</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://digital.nasdem.id">NasDem Digital</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Subscribe Sekarang</h4>
            <p>Dapatkan e-mail informasi kegiatan dan berita terbaru dari NasDem langsung di inbox surat elektronik Anda.</p>
            <form action="{{ route('subscribers.store') }}" method="post">
            @csrf
                @if (session('subscribed'))
                    <div class="alert alert-success">
                      {{ session('subscribed') }}
                    </div>
                @endif
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>{{ $konfigurasi->website_title ?? 'Partai NasDem'}}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Made with <i class="bx bx-heart"></i> in Makassar <a href="https://amaze.co.id/">{{ config('app.author')}}</a>
        </div>
      </div>
      
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="{{ $konfigurasi->twitter ?? 'https://twitter.com'}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{ $konfigurasi->facebook ?? 'https://facebook.com'}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{ $konfigurasi->instagram ?? 'https://instagram.com'}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{ $konfigurasi->youtube ?? 'https://youtube.com'}}" class="youtube"><i class="bx bxl-youtube"></i></a>
       
      </div>
    </div>
  </footer>