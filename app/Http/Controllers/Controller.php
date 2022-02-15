<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Konfigurasi;
use App\Models\Kategori;    
use View;
use Route;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $konfigurasi;

    public function __construct()
    {
        if(Route::currentRouteName() !== 'kegiatan'){
            $this->category = Kategori::Sort(1)->get()->load('beritas');
        }else{
            $this->category = Kategori::Sort(2)->get()->load('kegiatan');
        }
        $this->konfigurasi = Konfigurasi::first();
        View::share([
            'konfigurasi' => $this->konfigurasi,
            'category' => $this->category,
        ]);

    }
}
