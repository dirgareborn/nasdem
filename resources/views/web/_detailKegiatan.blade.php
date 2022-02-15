@extends('web.layouts.app')
@section('title', 'Kegiatan')
@section('content')
@include('web.partials.breadcrumbs')
<!-- ======= event Section ======= -->
<section id="event" class="event">
    <img src="{{is_img_event($kegiatan->image)}}" alt="{{ $kegiatan->title }}" class="img-cover" style="max-height:420px; width:100%;">
    <div class="event-title">
        <h3>{{ $kegiatan->title }}</h3>
    </div>
    <div class="event-time">
        <strong>
            <i class="bi bi-clock"></i>    
            <time datetime="{{ format_date($kegiatan->created_at)}}">{{ format_date($kegiatan->created_at)}}</time>
            <i class="bi bi-geo-alt"></i> {{ $kegiatan->location }}
        </strong>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 entries">
                <article class="entry">
                    <div class="countdown">
                        <ul>
                        <li><span id="days"></span>days</li>
                        <li><span id="hours"></span>Hours</li>
                        <li><span id="minutes"></span>Minutes</li>
                        <li><span id="seconds"></span>Seconds</li>
                        </ul>
                    </div>
                    <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ _('Yang Menghadiri ') }} &nbsp; <strong> {{ $kegiatan->attendants }} </strong></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('detailKegiatan', $kegiatan->slug) }}"><time datetime="2020-01-01">{{ format_date($kegiatan->created_at)}}</time></a></li>
                    </ul>
                    </div>
                    <div class="entry-content"  data-aos="fade-up">
                    <div class="section-title-left">
                        <h3>{{ $kegiatan->title }}</h3>
                    </div>
                    <p>
                        {{ strip_tags($kegiatan->description) }}
                    </p>
                    </div>
                    <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li>{{ $kegiatan->kategori->nama }}</li>
                </ul>
              </div>
                </article><!-- End blog entry -->
                <!-- End blog entries list -->
            </div>
        </div>
    </div>
</div>
</section><!-- End Blog Section -->
@endsection
@push('js')
@include('web.assets._countdownjs')
@endpush