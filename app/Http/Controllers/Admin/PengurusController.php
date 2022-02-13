<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;
use App\Http\Requests\PengurusRequest;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    

    public function index(Pengurus $pengurus)
    {
        $page_title       = 'Pengurus DPD';
        $page_description = 'Data Pengurus';
        $pengurus = Pengurus::paginate(20);
        $jabatans = Jabatan::all();
        return view('admin.pengurus.index', compact('page_title', 'page_description','pengurus','jabatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Pengurus $pengurus)
    {
        $page_title       = 'Tambah';
        $page_description = 'Tambah Data Pengurus';
        $jabatans = Jabatan::pluck('nama_jabatan', 'id');
        return view('admin.pengurus.create', compact('page_title', 'jabatans', 'page_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PengurusRequest $request, Pengurus $pengurus)
    {
        try {
            $pengurus = new Pengurus($request->all());
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path     = Storage::putFile('public/pengurus/foto', $file);
                // $file->move(public_path('storage/uploads/pengurus/foto/'), $filename);
                $pengurus->foto = substr($path, 21);
            }
            $pengurus->status = 1;
            $pengurus->save();

            return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->route('pengurus.index')->with('error', 'Pengurus gagal disimpan!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Pegawai $pegawai
     * @return Response
     */
    public function edit($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        $jabatan = Jabatan::pluck('nama_jabatan', 'id');
        if ($pengurus->foto == '') {
            $pengurus->foto = 'http://placehold.it/120x150';
        }
        $page_title       = 'Ubah';
        $page_description = 'Ubah Pengurus: ' . ucwords(strtolower($pengurus->nama));
        
        return view('admin.pengurus.edit', compact('page_title', 'jabatan', 'page_description', 'pengurus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(PengurusRequest $request, Pengurus $pengurus, $id)
    {
        try {
            $pengurus = Pengurus::where('id', $id)->first();
            $input = $request->all();

            if ($request->hasFile('foto')){ 
                $file     = $request->file('foto');
                $path     = Storage::putFile('public/pengurus/foto', $file);
                Storage::delete('public/pengurus/foto/' . $pengurus->foto);
                $input['foto'] = substr($path,21);
            }

            $pengurus->update($input);

            return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil diperbaharui!');
        } catch (QueryException $e) {
            return back()->withInput()->with('error', 'Pengurus gagal disimpan!');
        }
    }

    /**
     * Show the specified resource from storage.
     *
     * @return Response
     */
    public function show($id){
        $pengurus = Pengurus::findOrFail($id);

        return view('admin.pengurus.show', compact('pengurus'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $pengurus = Pengurus::findOrFail($id);
            Storage::delete('public/pengurus/foto/' . $pengurus->foto);
            $pengurus->delete();
            return redirect()->back()->with('success', 'Pengurus sukses dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('error', 'Pengurus gagal dihapus!');
        }
    }
}
