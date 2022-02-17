<div class="col-lg-4 col-md-6">
<div class="sidebar">
    <h3 class="sidebar-title">Search</h3>
    <div class="sidebar-item search-form">
    <form method="get" action="{{ url('/berita') }}">
        <input type="text"  name="q" id="q" placeholder="Cari {{ $q ?? '' }}">
        <button type="submit"><i class="bi bi-search"></i></button>
    </form>
    </div><!-- End sidebar search formn-->

    <h3 class="sidebar-title">Kategori</h3>
    <div class="sidebar-item categories">
    <ul>
        @forelse($category as $kategori)
        <li><a href="/kategori/{{ $kategori->slug }}">{{ $kategori->nama }} <span>
            @if($kategori->beritas->count() > 0)
            ({{ $kategori->beritas->count() }})
            @else {{ '(0)' }}
            @endif
            </span></a></li>
        @empty
        @endforelse
    </ul>
    </div><!-- End sidebar categories-->

    <h3 class="sidebar-title">Berita Terbaru</h3>
    <div class="sidebar-item recent-posts">
    @forelse($beritas as $berita)
    <div class="post-item clearfix">
        <img data-src="{{is_img_thumb($berita->image) }}" alt="{{ $berita->title }}" class="lazyload">
        <h4><a href="/berita/{{ $berita->slug }}">{{ Str::limit($berita->title, 30) }}</a></h4>
        <time datetime="2020-01-01">{{ format_date($berita->created_at)}}</time>
    </div>
    @empty @endforelse
    </div><!-- End sidebar recent posts-->

    <h3 class="sidebar-title">Tags</h3>
    <div class="sidebar-item tags">
    <ul>
        @forelse($beritas as $berita)
            @foreach($berita->tags as $tag)
            <li><a href="/tag/{{ $tag->slug }}">{{ $tag->name }}</a></li>
            @endforeach
        @empty 
        @endforelse
    </ul>
    </div><!-- End sidebar tags-->
</div><!-- End sidebar -->
</div><!-- End blog sidebar -->