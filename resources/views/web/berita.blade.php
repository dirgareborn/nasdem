@extends('web.layouts.app')
@section('title', $page_title)
@section('content')
@include('web.partials.breadcrumbs')
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8 entries">
                @forelse($beritas as $berita)
                <article class="entry">
                    <div class="entry-img">
                    <img data-src="{{is_img_350x250($berita->image)}}" alt="{{ $berita->title }}" class="lazyload img-fluid">
                    </div>
                    <h2 class="entry-title">
                    <a href="{{ route('detailBerita', $berita->slug) }}">{{ $berita->title }}</a>
                    </h2>
                    <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/author/{{ $berita->user->name }}">{{ $berita->user->name }}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('detailBerita', $berita->slug) }}"><time datetime="2020-01-01">{{ format_date($berita->created_at)}}</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('detailBerita', $berita->slug) }}">12 Comments</a></li>
                    </ul>
                    </div>
                    <div class="entry-content">
                    <p>
                        {{ Str::limit(strip_tags($berita->description),300)}}
                    </p>
                    <div class="read-more">
                        <a href="{{ route('detailBerita', $berita->slug) }}">Baca Selengkapnya</a>
                    </div>
                    </div>
                </article><!-- End blog entry -->
                @empty
                <p>Pencarian Kata Kunci <strong>{{ $q ?? ''}} </strong> {{ $beritas->count() }} Hasil </p>
                <div class="text-center read-more">
                        <a href="{{ url('/berita') }}">Kembali</a>
                </div>
                @endforelse
                {{ $beritas->links('vendor.pagination.azalea-01') }}
            </div><!-- End blog entries list -->
                @include('web.partials.sidebar')
            </div>
        </div>
    </div>
</section><!-- End Blog Section -->
@endsection