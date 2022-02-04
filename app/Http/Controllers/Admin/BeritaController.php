<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BeritaRequest;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Pagination\Paginator;

class BeritaController extends Controller
{
    public function index()
    {
        $getBerita    = Berita::latest();
        return view('admin.berita.index');
    }

    public function getDataArtikel(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Artikel::all())
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $data['show_web'] = route('berita.detail', $row->slug);

                    if (! Sentinel::guest()) {
                        $data['edit_url']   = route('informasi.artikel.edit', $row->id);
                        $data['delete_url'] = route('informasi.artikel.destroy', $row->id);
                    }

                    return view('forms.aksi', $data);
                })
                ->editColumn('status', function ($row) {
                    if ($row->status == 0) {
                        return '<span class="label label-danger">Tidak Aktif</span>';
                    } else {
                        return '<span class="label label-success">Aktif</span>';
                    }
                })
                ->rawColumns(['status'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('informasi.artikel.create');
    }

    public function store(ArtikelRequest $request)
    {
        try {
            $input = $request->all();
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $path = Storage::putFile('public/artikel', $file);

                $input['gambar'] = substr($path, 15) ;
            }

            Artikel::create($input);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Simpan artikel gagal!');
        }

        return redirect()->route('informasi.artikel.index')->with('success', 'Artikel berhasil disimpan!');
    }

    public function edit(Artikel $artikel)
    {
        return view('informasi.artikel.edit', compact('artikel'));
    }

    public function update(ArtikelRequest $request, Artikel $artikel)
    {
        try {
            $input = $request->all();

            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $path = Storage::putFile('public/artikel', $file);

                Storage::delete('public/artikel/' . $artikel->getOriginal('gambar'));

                $input['gambar'] = substr($path, 15) ;
            }

            $artikel->update($input);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Artikel gagal dihapus!');
        }

        return redirect()->route('informasi.artikel.index')->with('success', 'Artikel berhasil diubah!');
    }

    public function destroy(Artikel $artikel)
    {
        try {
            if ($artikel->delete()) {
                Storage::delete('public/artikel/' . $artikel->getOriginal('gambar'));
            }
        } catch (\Exception $e) {
            return redirect()->route('informasi.artikel.index')->with('error', 'Artikel gagal dihapus!');
        }

        return redirect()->route('informasi.artikel.index')->with('success', 'Artikel sukses dihapus!');
    }
}
