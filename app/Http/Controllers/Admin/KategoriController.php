<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use Str;

class KategoriController extends Controller
{
    public function index()
    {
        $page_title       = 'Kategori';
        $page_description = 'Data Kategori';
        $categories = Kategori::all();
        return view('admin.kategori.index', compact('categories', 'page_title', 'page_description'));
    }

    public function create()
    {
        $page_title       = 'Tambah';
        $page_description = 'Tambah Data Kategori';
        return view('admin.kategori.create', compact('page_title', 'page_description'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|unique:kategoris,nama',
        ]);
        if ($validated) {
            $kategori = new Kategori;
            $kategori->nama = $request->nama;
            $kategori->sort = $request->sort;
            $kategori->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Kategori berhasil ditambahkan'
            ], 200);
        }else{
            return response()->json([
                'status' => true,
                'message' => 'Nama Kategori Sudah Ada'
            ], 422);
        }
    }

    public function edit($id)
    {

        $kategori = Kategori::find($id);
        return response()->json([
            'status' => 'success',
            'data' => $kategori
        ], 200);
        
    }

    public function update(Request $request, $id)
    {

        $kategori = Kategori::find($id);
        $kategori->nama = $request->nama;
        $kategori->sort = $request->sort;
        $kategori->slug = Str::slug($request->nama);
        $kategori->update();
        return response()->json($kategori);

    }

    public function destroy($id)
    {
        $category = Kategori::find($id);
        $category->delete();

        return redirect()->route('kategori.index')->with('success', 'Data Kategori berhasil dihapus');
    }
    
}
