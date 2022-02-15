<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BeritaRequest;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;
use Intervention\Image\Facades\Image as Image;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas    = Berita::latest()->get()->toArray();
        return view('admin.berita.index')->with('beritas', $beritas);
    }

    public function create()
    {
        $categories = Kategori::whereSort('1')->orderby('nama', 'ASC')->get();
        return view('admin.berita.create', compact('categories'));
    }

    public function store(BeritaRequest $request)
    {
    
    try {
               
        $input = $request->all();
        // dd($input);
        if($request->hasfile('image')) {
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
            Storage::disk('public')->put('berita/'.$filename, (string) $normal->encode());
            Storage::disk('public')->put('berita/thumb/'.$filename, (string) $thumb->encode());
            Storage::disk('public')->put('berita/350x250/'.$filename, (string) $_350x250->encode());
            $input['image'] = $filename;
         }
            
            $tags = explode(",", $request->tags);
            $berita = Berita::create($input);
            $berita->tag($tags);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Simpan Berita gagal!');
        }

        return redirect()->route('berita.index')->with('success', 'Berita berhasil disimpan!');
    }

    public function edit($id)
    {
        $berita = Berita::whereSlug($id)->first();
        $categories = Kategori::whereSort('1')->orderby('nama', 'ASC')->get();
        return view('admin.berita.edit', compact('berita','categories'));
    }
  

    public function update(BeritaRequest $request, Berita $berita, $id)
    {
        try {
            $berita = Berita::find($id);
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

                Storage::delete('public/berita/' . $berita->getOriginal('image'));
                Storage::delete('public/berita/thumb/' . $berita->getOriginal('image'));
                Storage::delete('public/berita/350x250/' . $berita->getOriginal('image'));

                Storage::disk('public')->put('berita/'.$filename, (string) $normal->encode());
                Storage::disk('public')->put('berita/thumb/'.$filename, (string) $thumb->encode());
                Storage::disk('public')->put('berita/350x250/'.$filename, (string) $_350x250->encode());
                $input['image'] = $filename;
            }

            $berita->update($input);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Berita gagal diupdate!');
        }

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diubah!');
    }
      
    public function show($id)
    {
        $berita = Berita::whereSlug($id)->first();

        return view('admin.berita.show', compact('berita'));
    }
    public function destroy($id)
    {
        try {
            $berita = Berita::findOrFail($id);
            if ($berita->delete()) {
                Storage::delete('public/berita/' . $berita->getOriginal('image'));
                Storage::delete('public/berita/thumb/' . $berita->getOriginal('image'));
                Storage::delete('public/berita/350x250/' . $berita->getOriginal('image'));
            }
        } catch (\Exception $e) {
            return redirect()->route('berita.index')->with('error', 'Berita gagal dihapus!');
        }

        return redirect()->route('berita.index')->with('success', 'Berita sukses dihapus!');
    }
}
