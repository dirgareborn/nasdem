<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'berita' => \App\Models\Berita::all()->count(),
            'kegiatan' => \App\Models\Kegiatan::all()->count(),
            'pengurus' => \App\Models\Pengurus::all()->count(),
        ];
        
        // dd($data['berita']);
        return view('Admin.index')->withData($data);
    }
}
