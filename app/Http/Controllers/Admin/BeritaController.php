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
            $input['image'] = time().'.'.$image->extension();
         
            $destinationPath = public_path('/thumbnail');
            $img = Image::make($image->path());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['image']);
       
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['image']);

        //   \Storage::disk('spaces')->put('thumbs/'.$filename, (string)$thumb, 'public');
        //   \Storage::disk('spaces')->put('uploads/'.$filename, (string)$normal, 'public');
        //   \Storage::disk('spaces')->put('original/'.$filename, (string)$big, 'public');
        //   \Storage::disk('spaces')->put('800x800/'.$filename, (string)$_800x800, 'public');
        //   \Storage::disk('spaces')->put('400x400/'.$filename, (string)$_400x400, 'public');
            // $cat->image_icon = $filename;
            // $input['image'] = substr($path, 14) ;
            // $input->image = $input['image'] ;
            }

        // dd($input);
                
                $tags = explode(",", $request->tags);
                $berita = Berita::create($input);
                $berita->tag($tags);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Simpan Berita gagal!');
        }

        return redirect()->route('berita.index')->with('success', 'Berita berhasil disimpan!');
    }
    // public function store(BeritaRequest $request)
    // {
    
    // try {
                
    //             $input = $request->all();
    //             if ($request->hasFile('image')) {
    //                 $file = $request->file('image');
    //                 $path = Storage::putFile('public/berita', $file);
                    
    //                 $input['image'] = substr($path, 14) ;
    //             }
                
    //             $tags = explode(",", $request->tags);
    //             $berita = Berita::create($input);
    //             $berita->tag($tags);
    //     } catch (\Exception $e) {
    //         return back()->withInput()->with('error', 'Simpan Berita gagal!');
    //     }

    //     return redirect()->route('berita.index')->with('success', 'Berita berhasil disimpan!');
    // }

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
