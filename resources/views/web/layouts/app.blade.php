<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="msapplication-TileColor" content="#ffc40d">
  <meta name="theme-color" content="#1a2035">

  <title>{{ $page_title }} {{ config('app.name', 'DPD Partai NasDem Gowa') }}</title>
  <meta content="{{ $page_description ?? 'Website Resmi DPD Partai NasDem Gowa'}}" name="description">
  <meta content="{{ $page_description ?? 'Website Resmi DPD Partai NasDem Gowa'}}" name="keywords">
  <link rel="canonical" href="{{ Request::url() }}">
  <meta itemprop="name" content="{{ $page_title ?? '' }}">
  <meta itemprop="description" content="{{ $page_description ?? 'Website Resmi DPD Partai NasDem Gowa' }}.">
  <meta itemprop="image" content="{{ is_img($page_image ?? '') }}">

  <meta property="og:locale" content="id_ID">
  <meta property="og:type" content="article">
  <meta property="og:url" content="{{ Request::url() }}">
  <meta property="og:site_name" content="{{ \URL::to('') }}">
  <meta property="og:title" content="{{ $page_title ?? '' }}">
  <meta property="og:description" content="{{ $page_description ?? 'Website Resmi DPD Partai NasDem Gowa' }}. ">
  <meta property="og:image" content="{{ is_logo($page_image ?? '') }}?auto=format&amp;fit=max&amp;w=1200">
  <meta property="og:image:alt" content="{{ is_logo($page_image ?? '') }}">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ $page_title ?? '' }}">
  <meta name="twitter:description" content="{{ $page_description ?? 'Website Resmi DPD Partai NasDem Gowa' }}. ">
  <meta name="twitter:image" content="{{ is_logo($page_image ?? '') }}?auto=format&amp;fit=max&amp;w=1200">
  <link rel="alternate" href="/feed.xml" type="application/atom+xml" data-title="{{ Request::url() }}">
  <meta name="facebook-domain-verification" content="w5e39xmuhdt35pjpezg5pkif7f501x" />
  <link rel="icon" type="image/png" href="{{ is_logo($konfigurasi->logo) }}"/>
  <link rel="mask-icon" href="{{ is_logo($konfigurasi->logo) }}" color="#5bbad5">
  <link rel="manifest" href="{{ asset('favicons/manifest.json') }}" />
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('web.assets._icon')
  @include('web.assets._css')
    @yield('css')
</head>
<body>
    @include('web.partials.navigation-menu')
        @yield('nav')
  <main id="main">
        @yield('content')
  </main>
      @include('web.partials.footer')
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      @include('web.assets._js')
@yield('js')
@stack('js')
<!-- @include('web.assets._toastr') -->
</body>
</html>