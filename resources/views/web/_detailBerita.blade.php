@extends('web.layouts.app')
@section('title','Berita')
@section('content')
@include('web.partials.breadcrumbs')
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8 entries">
               
                <article class="entry">
                    <div class="entry-img">
                    <img src="{{is_img($berita->image)}}" alt="{{ $berita->title }}" class="img-fluid">
                    </div>
                    <h2 class="entry-title">
                    <a href="{{ route('detailBerita', $berita->slug) }}">{{ $berita->title }}</a>
                    </h2>
                    <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('detailBerita', $berita->slug) }}">Administrator</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('detailBerita', $berita->slug) }}"><time datetime="2020-01-01">{{ format_date($berita->created_at)}}</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('detailBerita', $berita->slug) }}">12 Comments</a></li>
                    </ul>
                    </div>
                    <div class="entry-content">
                    <p>
                        {{ strip_tags($berita->description) }}
                    </p>
                    </div>
                </article><!-- End blog entry -->
            </div><!-- End blog entries list -->
            @include('web.partials.sidebar')
            @include('web._beritaLainnya')
        </div>
        
    </div>
</div>
</section><!-- End Blog Section -->
@endsection