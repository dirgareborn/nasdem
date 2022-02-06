@extends('web.layouts.app')
@section('title','Jangan Ketinggalan Kegiatan NasDem')
@section('content')
@include('web.partials.breadcrumbs')

 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-lomba">Lomba</li>
              <li data-filter=".filter-sosial">Sosial</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up">
        @forelse($kegiatan as $kegiatan)
          <div class="col-lg-4 col-md-6 portfolio-item filter-lomba">
            <img src="{{ is_img_event($kegiatan->image)}}" class="img-fluid" alt="{{ $kegiatan->title }}">
            <div class="portfolio-info">
              <p>{{ $kegiatan->title }}</p>
              <a href="{{ URL('/') }}/{{ is_img_event($kegiatan->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $kegiatan->title }}"><i class="bx bx-plus"></i></a>
              <a href="{{ $kegiatan->slug }}" class="details-link" title="Lihat"><i class="bx bx-link"></i></a>
            </div>
          </div>
        @empty
        @endforelse
        </div>

      </div>
    </section><!-- End Portfolio Section -->
@endsection