@extends('adminlte::page')

@section('title', 'Edit Konfigurasi')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Edit Konfigurasi</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      <li class="breadcrumb-item active">Konfigurasi umum</li>
    </ol>
  </div>
</div>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('konfigurasi.update', $cog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                            <x-adminlte-input-file name="logo" id="logo" label="Logo" fgroup-class="col-md-6 col-6"/>
                            <x-adminlte-input name="website_title" id="website_title" label="Judul Website" value="{{ $cog->website_title }}" fgroup-class="col-md-6 col-6" />
                            <!-- @php
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
                            <x-adminlte-text-editor name="website_description" label="Deskripsi" 
                                 :config="$config" fgroup-class="col-md-12 col-12"  value="{{ $cog['website_description'] }}" />
                            <x-adminlte-text-editor name="visi" label="Visi" 
                                 :config="$config" fgroup-class="col-md-12 col-12"  value="{{ $cog['visi'] }}" />
                            <x-adminlte-text-editor name="misi" label="misi" 
                                 :config="$config" fgroup-class="col-md-12 col-12"  value="{{ $cog['misi'] }}" />
                             -->
                             <div class="form-group">
                            <label> Deskripsi Website </label>
                             <textarea class="form-control col-12 " name="website_description" id="website_description" cols="30" rows="10">
                                 {!! strip_tags($cog->website_description) !!}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label> Visi </label>
                                <textarea class="form-control col-12 " label="Visi" name="visi" id="visi" cols="30" rows="10">
                                    {!! strip_tags($cog->visi) !!}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label> Misi </label>
                                 <textarea class="form-control col-12 " name="misi" id="misi" cols="30" rows="10" fgroup-class="col-md-12 col-6">
                                 {!! strip_tags($cog->misi) !!}
                                 </textarea>
                            </div>
                            <div class="form-group">
                                <label> Google Maps </label>
                                 <textarea class="form-control col-12 " name="map" id="map" cols="30" rows="10" fgroup-class="col-md-12 col-6">
                                 {!! strip_tags($cog->map) !!}
                                 </textarea>
                            </div>
                            <div class="form-group">
                                <label> Video </label>
                                 <textarea class="form-control col-12 " name="video" id="video" cols="30" rows="10" fgroup-class="col-md-12 col-6">
                                 {!! strip_tags($cog->video) !!}
                                 </textarea>
                            </div>
                                 <x-adminlte-input name="address" id="address" label="Alamat" value="{{ $cog->address }}" fgroup-class="col-md-8 col-6" disable-feedback/>
                                 <x-adminlte-input name="pos_code" id="pos_code" label="Kode Pos" value="{{ $cog->pos_code }}" fgroup-class="col-md-4 col-6" disable-feedback/>
                                 <x-adminlte-input name="telepon" id="telepon" label="Telepon" value="{{ $cog->telepon }}" fgroup-class="col-md-6 col-3" disable-feedback/>
                                 <x-adminlte-input name="email" id="email" label="Email" value="{{ $cog->email }}" fgroup-class="col-md-6 col-3" disable-feedback/>
                                 <x-adminlte-input name="facebook" id="facebook" label="Facebook" value="{{ $cog->facebook }}" fgroup-class="col-md-6 col-3" disable-feedback/>
                                 <x-adminlte-input name="twitter" id="twitter" label="Twitter" value="{{ $cog->twitter }}" fgroup-class="col-md-6 col-3" disable-feedback/>
                                 <x-adminlte-input name="youtube" id="youtube" label="Youtube" value="{{ $cog->youtube }}" fgroup-class="col-md-6 col-3" disable-feedback/>
                                 <x-adminlte-input name="instagram" id="instagram" label="Instagram" value="{{ $cog->instagram }}" fgroup-class="col-md-6 col-3" disable-feedback/>
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