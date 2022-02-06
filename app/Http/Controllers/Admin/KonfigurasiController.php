<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\KonfigurasiRequest;
use App\Models\Konfigurasi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class KonfigurasiController extends Controller
{
    public function index()
    {
        $beritas    = Berita::latest()->get()->toArray();
        return view('admin.konfigurasi.index')->with('beritas', $beritas);
    }

    
    public function edit($id)
    {
        $cog = Konfigurasi::find($id);
        return view('admin.konfigurasi.edit', compact('cog'));
    }
  

    public function update(KonfigurasiRequest $request, $id)
    {
        try {
            $cog = Konfigurasi::find($id);
            $input = $request->all();

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $path = Storage::putFile('public/berita', $file);

                Storage::delete('public/berita/' . $cog->getOriginal('image'));

                $input['logo'] = substr($path, 14) ;
            }

            $cog->update($input);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Konfigurasi gagal diupdate!');
        }

        return redirect()->route('konfigurasi.show', $id)->with('success', 'Konfigurasi berhasil diubah!');
    }
      
    public function show($id)
    {
        $cog = Konfigurasi::find($id);
        return view('admin.konfigurasi.show', compact('cog'));
    }
    
}
