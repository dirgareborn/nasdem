@extends('adminlte::page')

@section('title', 'Tambah Berita')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Tambah Berita</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
                <a href="{{ route('berita.index')}}" class="btn btn-flat btn-info" > <i class="fa fa-tabel"></i> Daftar Berita</a>
            </div>
            <div class="card-body">
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                            <x-adminlte-input name="title" id="title" label="Judul Berita" placeholder="placeholder" fgroup-class="col-md-12 col-12" disable-feedback/>
                            <x-adminlte-input-file name="image" id="image" label="Gambar" fgroup-class="col-md-6 col-6"/>
                            <x-adminlte-select2 label="Status" name="is_active" fgroup-class="col-md-6 col-6">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </x-adminlte-select2> 
                            @php
                            $config = [
                                "height" => "100",
                                "toolbar" => [
                                    // [groupName, [list of button]]
                                    ['style', ['bold', 'italic', 'underline', 'clear']],
                                    ['font', ['strikethrough', 'superscript', 'subscript']],
                                    ['fontsize', ['fontsize']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['height', ['height']],
                                    ['table', ['table']],
                                    ['insert', ['link', 'picture', 'video']],
                                    ['view', ['fullscreen', 'codeview', 'help']],
                                ],
                            ]
                            @endphp
                            <x-adminlte-text-editor name="description" label="Deskripsi" label-class="text-danger"
                                placeholder="Write some text..." :config="$config" fgroup-class="col-md-12 col-12"/>
                            </div>
                            <button type="button" class="btn btn-secondary">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button> 
                    </form>
            </div>
        </div>
    </div>
</div>
@section('plugins.Summernote', true)
@stop