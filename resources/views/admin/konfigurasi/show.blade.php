@extends('adminlte::page')

@section('title', 'Konfigurasi Umum')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Konfigurasi</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      <li class="breadcrumb-item active">Konfigurasi Umum </li>
    </ol>
  </div>
</div>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('konfigurasi.edit', $cog->id)}}" class="btn btn-flat btn-info" > <i class="fa fa-pencil-o"></i> Edit Konfigurasi</a>
            </div>
            <div class="card-body">
            <h3 class="card-title"> {{ $cog->title}}</h3> <br>
            <img class="img-fluid img-thumbnail" src="{{ is_img($cog->logo) }}" alt="foto" width="300px">
            <table>
              <tr>
                <td>Judul Website</td>
                <td>:</td>
                <td>{!! $cog->website_title !!}</td>
              </tr>
              <tr>
                <td>Deskripsi Website</td>
                <td>:</td>
                <td>{!! $cog->website_description !!}</td>
              </tr>
            </table>
            </div>
        </div>
    </div>
</div>

@stop