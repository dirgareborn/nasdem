<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BeritaRequest;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas    = Berita::latest()->get()->toArray();
        return view('admin.berita.index')->with('beritas', $beritas);
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(BeritaRequest $request)
    {
        try {
            $input = $request->all();
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $path = Storage::putFile('public/berita', $file);

                $input['image'] = substr($path, 14) ;
            }

            Berita::create($input);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Simpan Berita gagal!');
        }

        return redirect()->route('berita.index')->with('success', 'Berita berhasil disimpan!');
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.edit', compact('berita'));
    }
  

    public function update(BeritaRequest $request, Berita $berita, $id)
    {
        try {
            $berita = Berita::find($id);
            $input = $request->all();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $path = Storage::putFile('public/berita', $file);

                Storage::delete('public/berita/' . $berita->getOriginal('image'));

                $input['image'] = substr($path, 14) ;
            }

            $berita->update($input);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Berita gagal diupdate!');
        }

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diubah!');
    }
      
    public function show($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.show', compact('berita'));
    }
    public function destroy(Berita $berita)
    {
        try {
            if ($berita->delete()) {
                Storage::delete('public/berita/' . $artikel->getOriginal('image'));
            }
        } catch (\Exception $e) {
            return redirect()->route('berita.index')->with('error', 'Artikel gagal dihapus!');
        }

        return redirect()->route('berita.index')->with('success', 'Artikel sukses dihapus!');
    }
}
