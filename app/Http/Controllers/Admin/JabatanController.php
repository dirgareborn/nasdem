<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Exception;
class JabatanController extends Controller
{
    public function index()
    {
        $page_title       = 'Jabatan';
        $page_description = 'Data Jabatan';
        $jabatans = Jabatan::all();
        return view('data.jabatan.index', compact('jabatans', 'page_title', 'page_description'));
    }

    /**
    * Return datatable Data Pegawai.
    *
    * @param Request $request
    * @return DataTables
    */
    public function getJabatan(Request $request)
    {
        $query = DB::table('das_jabatan')
            ->select(['id','nama_jabatan']);

        return DataTables::of($query)
            ->addColumn('aksi', function ($row) {
                $edit_url   = route('data.jabatan.edit', $row->id);
                $delete_url = route('data.jabatan.destroy', $row->id);

                $data['edit_url']   = $edit_url;
                $data['delete_url'] = $delete_url;

                return view('forms.aksi', $data);
            })->make();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $page_title       = 'Tambah';
        $page_description = 'Tambah Data Jabatan';
        $jabatans = Jabatan::all();
        $parent_Jabatan = [];
        foreach ($jabatans as $jabatan) {
            $parent_Jabatan[$jabatan->id] = $jabatan->nama_jabatan;
        }
        return view('data.jabatan.create', compact('parent_Jabatan', 'page_title', 'page_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $Jabatan = $request->validate([
            'nama_jabatan' => 'required|max:50',
            'parent_id' => 'nullable',
            'sort' => 'required',
        ]);

        $Jabatan['parent_id'] = empty($Jabatan['parent_id']) ? 0 : $Jabatan['parent_id'];
        Jabatan::create($Jabatan);

        return redirect()->back()->with('success', 'Data Jabatan Sukses Tesimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $jabatan     = Jabatan::find($id);
        return response()->json([
            'status' => 'success',
            'data' => $jabatan
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $Jabatan = $request->validate([
            'nama_jabatan'  => 'required|max:50',
            'parent_id' => 'required',
            'sort' => 'required',
        ]);
        try{

            $Jabatan['parent_id'] = empty($Jabatan['parent_id']) ? 0 : $Jabatan['parent_id'];
            Jabatan::whereId($id)->update($Jabatan);
            
        }catch(Exception $e){
            return response()->json([
                'status'    => 'success',
                'message'   => 'Data Jabatan Gagal Terupdate',
            ]);
        }
        return response()->json([
            'status'    => 'error',
            'message'   => 'Data Jabatan Sukses Terupdate',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();
        return redirect()->back()->with('success', 'Data Jabatan Sukses Dihapus');
    }
}
