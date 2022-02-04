    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>@yield('title')</h2>
          <ol>
          <li class="{{ $breadcrumbs->isEmpty() ? 'is-active' : '' }}"><a href="/">Home</a></li>
        @foreach ($breadcrumbs as $key => $url)
            <li class="{{ $loop->last ? 'is-active' : '' }}">
                <a href="{{ url($url) }}">
                    @if (! $loop->last)
                        {{ ucfirst($key) }}
                    @else
                        @yield ('title')
                    @endif
                </a>
            </li>
        @endforeach
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->