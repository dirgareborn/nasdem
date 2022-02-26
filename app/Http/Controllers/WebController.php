<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Pengurus;
use App\Models\Konfigurasi;
use App\Models\Jabatan;
use App\Models\Kategori;
use App\Models\User;
use DB;
class WebController extends Controller
{
    public function beranda(){
        $page_title = 'Beranda';
        $page_description = 'Halaman Beranda';

        return view('index', compact('page_title', 'page_description'));
    }
    public function tentang(){
        $page_title = 'Tentang Kami';
        $page_description = 'Halaman Tentang Kami';

        return view('web.tentang', compact('page_title', 'page_description'));
    }

    public function privacyPolicy(){
        $page_title = 'Privacy Policy';
        $page_description = 'Halaman Privacy Policy';

        return view('web.privacy-policy', compact('page_title', 'page_description'));
    }

    public function VisiMisi()
    {
        $page_title = 'Visi Misi';
        $page_description = 'Halaman Visi Misi';

        $beritas = Berita::Active()->latest()->paginate(5);
        return view('web.visi-misi', compact('beritas','page_title', 'page_description'));
    }

    public function berita(Request $request)
    {
        $page_title = 'Berita';
        $page_description = 'Halaman Berita';

        $q = $request->get('q');
        $beritas = Berita::with('kategori','tagged','user')->Active()->where(function ($query) use ($q) {
            if ($q) {
                $query->where('title', 'like', '%'.$q.'%');
            }
        })->latest()->paginate(12);
        return view('web.index_berita', compact('q','beritas','page_title', 'page_description'));
    }
  
    public function getByCategory(Kategori $kategori, $slug)
    {
     
        $getId   = $kategori->CatId($slug);
        $beritas = Berita::with('tagged','user')->getByKategori($getId->id);
        $page_title = $getId->nama;
        $page_description = 'Halaman Berita';

        return view('web.berita', compact('beritas','page_title', 'page_description'));
    }
  
    public function getByTag($slug){
     
        $beritas = Berita::withAllTags($slug)->paginate(12);
        $page_title = $slug;
        $page_description = 'Berita Tag '.$slug;

        return view('web.berita', compact('beritas','page_title', 'page_description'));
    }

    public function detailBerita(Berita $berita, $slug)
    {
        $berita = $berita->Detail($slug);
        $page_title = $berita->title;
        $page_description = $berita->description;
        $page_image = $berita->image;
        $beritas = Berita::where('kategori_id',$berita->kategori_id)->latest()->take(6)->get();
        $category = Kategori::Sort(1)->with('beritas')->get();
        return view('web._detailBerita', compact('category','berita','beritas','page_image','page_title', 'page_description'));
    }

    public function kegiatan()
    {
        $page_title = 'Kegiatan';
        $page_description = 'Halaman Kegiatan';
        $kegiatans = Kegiatan::with('kategori')->latest()->paginate(10);
        $category = Kategori::with('kegiatan','kegiatanCount')->sort(2)->get();
        return view('web.kegiatan', compact('category','kegiatans','page_title', 'page_description'));
    }

    public function detailKegiatan($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->first()->load('kategori');
        $page_title = $kegiatan->title;
        $page_description = $kegiatan->description;
        $page_image = $kegiatan->image;
        return view('web._detailKegiatan', compact('kegiatan','page_title', 'page_description'));
    }

    public function pengurus()
    {
        $page_title = 'Pengurus';
        $page_description = 'Halaman Pengurus';
        $pengurus = Pengurus::Active()->with('jabatan')->orderBy('jabatan_id')->get();
        // show employees sort hierarki by job title
        $beritas = Berita::latest()->limit(6)->get();
        return view('web.pengurus-dpd', compact('pengurus','beritas','page_title', 'page_description'));
    }

    public function detailPengurus($slug)
    {

        $pengurus = Pengurus::where('slug', $slug)->first();
        $page_title = $pengurus->nama;
        $page_description = 'Halaman Pengurus';

        return view('web.detail-pengurus', compact('pengurus','page_title', 'page_description'));
    }

    public function kontak()
    {
        $page_title = 'Kontak';
        $page_description = 'Halaman Kontak';
        $konfigurasi = Konfigurasi::first();
        return view('web.kontak', compact('konfigurasi','page_title', 'page_description'));
    }
}
