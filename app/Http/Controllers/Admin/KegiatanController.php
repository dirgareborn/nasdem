<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\KegiatanRequest;
use App\Models\Kegiatan;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan    = Kegiatan::latest()->get()->toArray();
        return view('admin.kegiatan.index')->with('kegiatan', $kegiatan);
    }

    public function create()
    {
        $categories = Kategori::whereSort('2')->orderby('nama', 'ASC')->get();
        return view('admin.kegiatan.create', compact('categories'));
    }

    public function store(KegiatanRequest $request)
    {
        try {
            $input = $request->all();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $filename = str_replace(' ','', time().'_'.$image->getClientOriginalName());
                $thumb = \Image::make($image)->resize(80, 50,
                function ($constraint) {
                    $constraint->aspectRatio();
                })->encode($extension);
                $_350x250 = \Image::make($image)->resize(350, 250,
                function ($constraint) {
                    $constraint->aspectRatio();
                })->encode($extension);
                $normal = \Image::make($image)->resize(800, 500,
                function ($constraint) {
                    $constraint->aspectRatio();
                })->encode($extension);

                Storage::disk('public')->put('kegiatan/'.$filename, (string) $normal->encode());
                Storage::disk('public')->put('kegiatan/thumb/'.$filename, (string) $thumb->encode());
                Storage::disk('public')->put('kegiatan/350x250/'.$filename, (string) $_350x250->encode());
            }

            Kegiatan::create($input);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Simpan Kegiatan gagal!');
        }

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil disimpan!');
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }
  

    public function update(KegiatanRequest $request, $id)
    {
        try {
            $kegiatan = Kegiatan::find($id);
            $input = $request->all();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $filename = str_replace(' ','', time().'_'.$image->getClientOriginalName());
                $thumb = \Image::make($image)->resize(80, 50,
                function ($constraint) {
                    $constraint->aspectRatio();
                })->encode($extension);
                $_350x250 = \Image::make($image)->resize(350, 250,
                function ($constraint) {
                    $constraint->aspectRatio();
                })->encode($extension);
                $normal = \Image::make($image)->resize(800, 500,
                function ($constraint) {
                    $constraint->aspectRatio();
                })->encode($extension);

                Storage::delete('public/kegiatan/' . $kegiatan->getOriginal('image'));
                Storage::delete('public/kegiatan/thumb/' . $kegiatan->getOriginal('image'));
                Storage::delete('public/kegiatan/350x250/' . $kegiatan->getOriginal('image'));

                Storage::disk('public')->put('kegiatan/'.$filename, (string) $normal->encode());
                Storage::disk('public')->put('kegiatan/thumb/'.$filename, (string) $thumb->encode());
                Storage::disk('public')->put('kegiatan/350x250/'.$filename, (string) $_350x250->encode());
                $input['image'] = $filename;
            }

            $kegiatan->update($input);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Kegiatan gagal diupdate!');
        }

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diubah!');
    }
      
    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.kegiatan.show', compact('kegiatan'));
    }
    public function destroy(Kegiatan $kegiatan)
    {
        try {
            if ($kegiatan->delete()) {
                Storage::delete('public/kegiatan/' . $kegiatan->getOriginal('image'));
                Storage::delete('public/kegiatan/thumb/' . $kegiatan->getOriginal('image'));
                Storage::delete('public/kegiatan/350x250/' . $kegiatan->getOriginal('image'));
            }
        } catch (\Exception $e) {
            return redirect()->route('kegiatan.index')->with('error', 'Kegiatan gagal dihapus!');
        }

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan sukses dihapus!');
    }
}
