<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Konfigurasi;
use View;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $konfigurasi;

    public function __construct()
    {
        $this->konfigurasi = Konfigurasi::first();
        View::share([
            'konfigurasi' => $this->konfigurasi,
        ]);

    }
}
