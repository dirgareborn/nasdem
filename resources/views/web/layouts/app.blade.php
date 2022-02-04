<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
</body>
</html>