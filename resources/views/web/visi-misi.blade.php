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
                    <h2 class="entry-title">
                    <a href="#">Visi Partai NasDem</a>
                    </h2>
                    <div class="entry-content">
                    <p>
                    {!! $konfigurasi->visi !!}
                    </p>
                    </div>

                    <h2 class="entry-title">
                    <a href="#">Misi Partai NasDem</a>
                    </h2>
                    <div class="entry-content">
                    <p>
                    {!! $konfigurasi->misi !!}
                    </p>
                    </div>
                </article><!-- End blog entry -->
            </div><!-- End blog entries list -->
            @include('web.partials.sidebar')
        </div>
        
    </div>
</div>
</section><!-- End Blog Section -->
@endsection