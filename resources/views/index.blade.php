@extends('web.layouts.app')
@section('nav')
    @include('web.partials.slide')
@endsection
@section('content')
    @include('web.partials.service')
    @include('web.partials.portfolio')
    @include('web.partials.about')
    @include('web.partials.berita-kegiatan')
    @include('web.partials.welcome-footer')
@endsection
@section('footer')
    @include('web.partials.footer')
@endsection

       <!-- Services -->
       <!-- Portfolio -->
        <!-- About/SP -->
        <!-- Berita Kegiatan -->