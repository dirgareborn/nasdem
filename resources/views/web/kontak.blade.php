@extends('web.layouts.app')
@section('title','Kontak Kami')
@section('content')
    @include('web.partials.breadcrumbs')
  <!-- ======= Contact Section ======= -->
  <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="{{ $konfigurasi->map ?? ''}}" frameborder="0" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <section id="contact" class="contact">
      <div class="container">
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif
        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Alamat:</h4>
                  <p>{{ $konfigurasi->address ?? 'Jl. Gontang Raya No.54'}}<br>{{ $konfigurasi->pos_code ?? '90224'}}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{ $konfigurasi->email ?? 'info@gowa.nasdem.id'}}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Whatsapp:</h4>
                  <p><a href="tel:{{ $konfigurasi->telepon ?? '+6285299444337'}}">{{ $konfigurasi->telepon ?? '+6285299444337'}}</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="/kontak-kami" method="post" role="form" class="php-email-form">
            @csrf
              <div class="row">
                <div class="col-md-6 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0 {{ $errors->has('name') ? 'has-error' : '' }}">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
@endsection