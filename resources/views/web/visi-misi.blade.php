@extends('web.layouts.app')
@section('title','Visi & Misi')
@section('content')
@include('web.partials.breadcrumbs')
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8 entries">
               
                <article class="entry">
                    <div class="section-title">
                    <h2>Visi Partai NasDem </h2>
                    </div>
                    <div class="entry-content">
                    <p>
                    {!! $konfigurasi->visi !!}
                    </p>
                    </div>

                    <div class="section-title">
                    <h2>Misi Partai NasDem </h2>
                    </div>
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