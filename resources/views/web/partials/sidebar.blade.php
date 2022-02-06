<div class="col-lg-4 col-md-6">
<div class="sidebar">
    <h3 class="sidebar-title">Search</h3>
    <div class="sidebar-item search-form">
    <form action="">
        <input type="text">
        <button type="submit"><i class="bi bi-search"></i></button>
    </form>
    </div><!-- End sidebar search formn-->

    <h3 class="sidebar-title">Kategori</h3>
    <div class="sidebar-item categories">
    <ul>
        <li><a href="#">Fraksi <span>(25)</span></a></li>
        <li><a href="#">Daerah <span>(12)</span></a></li>
        <li><a href="#">Internasional<span>(5)</span></a></li>
        <li><a href="#">Press Release<span>(22)</span></a></li>
        <li><a href="#">Opini<span>(8)</span></a></li>
        <li><a href="#">Vaksinasi <span>(14)</span></a></li>
    </ul>
    </div><!-- End sidebar categories-->

    <h3 class="sidebar-title">Berita Terbaru</h3>
    <div class="sidebar-item recent-posts">
    @forelse($beritas as $berita)
    <div class="post-item clearfix">
        <img src="{{is_img($berita->image) }}" alt="">
        <h4><a href="{{ route('detailBerita', $berita->slug) }}">{{ Str::limit($berita->title, 30) }}</a></h4>
        <time datetime="2020-01-01">{{ format_date($berita->created_at)}}</time>
    </div>
    @empty @endforelse
    </div><!-- End sidebar recent posts-->

    <h3 class="sidebar-title">Tags</h3>
    <div class="sidebar-item tags">
    <ul>
        <li><a href="#">App</a></li>
        <li><a href="#">IT</a></li>
        <li><a href="#">Business</a></li>
        <li><a href="#">Mac</a></li>
        <li><a href="#">Design</a></li>
        <li><a href="#">Office</a></li>
        <li><a href="#">Creative</a></li>
        <li><a href="#">Studio</a></li>
        <li><a href="#">Smart</a></li>
        <li><a href="#">Tips</a></li>
        <li><a href="#">Marketing</a></li>
    </ul>
    </div><!-- End sidebar tags-->
</div><!-- End sidebar -->
</div><!-- End blog sidebar -->