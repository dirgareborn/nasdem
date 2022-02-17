@extends('web.layouts.app')
@section('title', $page_title)
@section('content')
@include('web.partials.breadcrumbs')
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
        <div class="section-title-left">
            <h2 class="text-title">Berita </h2>
        </div>
        @forelse($beritas as $berita)
          <div class="col-lg-3 col-md-3 py-2">
              <img data-src="{{is_img_350x250($berita->image) }}" class="lazyload" alt="{{ $berita->title }}" style="max-height:200px; min-height:200px; width:100%;">
            <div class="box">
              <strong class="text-dark"> 
              <a class="text-dark" href="{{ route('detailBerita', $berita->slug) }}">{{ Str::limit($berita->title, 30) }}</a>  
              </strong>
            </div>
          </div>
          @empty
        @endforelse
        {{ $beritas->links('vendor.pagination.azalea-01') }}
        </div>
    </div>
</section>
<!-- End Pricing Section -->

@endsection