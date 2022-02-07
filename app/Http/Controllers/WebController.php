<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Pengurus;
use App\Models\Konfigurasi;
use App\Models\Jabatan;


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

        $beritas = Berita::where('is_active',1)->latest()->paginate(5);
        return view('web.visi-misi', compact('beritas','page_title', 'page_description'));
    }

    public function berita()
    {
        $page_title = 'Berita';
        $page_description = 'Halaman Berita';

        $beritas = Berita::where('is_active',1)->latest()->paginate(5);
        return view('web.berita', compact('beritas','page_title', 'page_description'));
    }

    public function detailBerita($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        $page_title = $berita->title;
        $page_description = $berita->description;
        $page_image = $berita->image;
        $beritas = Berita::latest()->limit(6)->get();
        return view('web._detailBerita', compact('berita','beritas','page_image','page_title', 'page_description'));
    }

    public function kegiatan()
    {
        $page_title = 'Kegiatan';
        $page_description = 'Halaman Kegiatan';
        $kegiatan = Kegiatan::latest()->paginate(10);
        return view('web.kegiatan', compact('kegiatan','page_title', 'page_description'));
    }

    public function detailKegiatan($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->first();
        $page_title = $kegiatan->title;
        $page_description = $kegiatan->description;
        return view('web.detail-kegiatan', compact('kegiatan','page_title', 'page_description'));
    }

    public function pengurus()
    {
        $page_title = 'Pengurus';
        $page_description = 'Halaman Pengurus';
        $pengurus = Pengurus::latest()->paginate(10);
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
