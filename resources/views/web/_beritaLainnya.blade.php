<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
        <div class="section-title-left">
            <h2 class="text-title">Berita Lainnya</h2>
        </div>

        @forelse($beritas as $berita)
          <div class="col-lg-4 col-md-6 py-2">
              <img src="{{is_img($berita->image) }}" alt="{{ $berita->title }}" style="max-height:200px; width:100%;">
            <div class="box">
              <span> {{ Str::limit($berita->title, 30) }}</span>
              <div class="btn-wrap">
                <a href="{{ route('detailBerita', $berita->slug) }}" class="btn btn-sm flat btn-danger">Selengkapnya</a>
              </div>
            </div>
          </div>
          @empty
        @endforelse

        </div>
      </div>
    </section><!-- End Pricing Section -->