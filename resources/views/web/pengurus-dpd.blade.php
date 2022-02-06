@extends('web.layouts.app')
@section('title','Pengurus DPD')
@section('content')
    @include('web.partials.breadcrumbs')
 <!-- ======= Our Team Section ======= -->
 <section id="blog" class="blog team section-bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 entries">
                <div class="section-title" data-aos="fade-up">
                <h2>Susunan Kepengurusan<strong> DPD</strong></h2>
                </div>
                <div class="row">
                    @forelse($pengurus as $pengurus)
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{ is_foto($pengurus->foto , $pengurus->jenis_kelamin) }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h6>{{ $pengurus->nama }}</h6>
                            <span>{{ $pengurus->jabatan->nama_jabatan }}</span>
                        </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-md-12">
                        <h5>Belum Ada Data Pengurus</h5>
                    </div>
                    @endforelse
                </div>
            </div>
        @include('web.partials.sidebar')
        </div>
      </div>
    </section><!-- End Our Team Section -->
@endsection