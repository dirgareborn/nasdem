@extends('adminlte::page')

@section('title', 'Berita')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>DataTables</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Berita</li>
    </ol>
  </div>
</div>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title"></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-flat btn-info" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i>
                </button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <x-adminlte-input name="title" id="title" label="Judul Berita" placeholder="placeholder" fgroup-class="col-md-12 col-12" disable-feedback/>
            <x-adminlte-textarea name="taBasic" label="Deskripsi"  placeholder="Insert description..." fgroup-class="col-md-12 col-12" />
            <x-adminlte-input-file name="image" id="image" label="Gambar" fgroup-class="col-md-12 col-12" disable-feedback/>
            <x-adminlte-select2 label="Status" name="is_active" fgroup-class="col-md-12 col-12">
                <option>Aktif</option>
                <option disabled>Tidak Aktif</option>
            </x-adminlte-select2>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <script> $('#exampleModal').on('shown.bs.modal', function () {
  $('#title').trigger('focus')
}) </script>
@stop