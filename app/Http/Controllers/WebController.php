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

    public function VisiMisi()
    {
        $beritas = Berita::where('is_active',1)->latest()->paginate(5);
        return view('web.visi-misi', compact('beritas'));
    }

    public function berita()
    {
        $beritas = Berita::where('is_active',1)->latest()->paginate(5);
        return view('web.berita', compact('beritas'));
    }

    public function detailBerita($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        $beritas = Berita::latest()->limit(6)->get();
        return view('web._detailBerita', compact('berita','beritas'));
    }

    public function kegiatan()
    {
        $kegiatan = Kegiatan::latest()->paginate(10);
        return view('web.kegiatan', compact('kegiatan'));
    }

    public function detailKegiatan($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->first();
        return view('web.detail-kegiatan', compact('kegiatan'));
    }

    public function pengurus()
    {
        $pengurus = Pengurus::latest()->paginate(10);
        return view('web.pengurus-dpd', compact('pengurus'));
    }

    public function detailPengurus($slug)
    {
        $pengurus = Pengurus::where('slug', $slug)->first();
        return view('web.detail-pengurus', compact('pengurus'));
    }

    public function kontak()
    {
        $konfigurasi = Konfigurasi::first();
        return view('web.kontak', compact('konfigurasi'));
    }
}
