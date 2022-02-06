@extends('adminlte::page')

@section('title', 'Berita')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Pengurus DPD</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      <li class="breadcrumb-item active">Pengurus DPD</li>
    </ol>
  </div>
</div>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('pengurus.create')}}" class="btn btn-flat btn-info" > <i class="fa fa-plus"></i> Tambah Pengurus</a>
            <h3 class="card-title"></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-flat btn-primary" data-toggle="modal" data-target="#indexJabatan">
                <i class="fa fa-table"></i> Jabatan
                </button>
                <button type="button" class="btn btn-flat btn-danger" data-toggle="modal" data-target="#createJabatan">
                <i class="fa fa-plus"></i> Tambah Jabatan
                </button>
            </div>
            </div>
            <!-- /.card-header -->
         
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengurus as $key => $pengurus)
                    <tr>
                    <td>{{ $key +1 }}</td>
                    <td>{{ $pengurus->nama }}</td>
                    <td>{{ $pengurus->jabatan->nama_jabatan }}</td>
                    <td>
                    <form action="{{ route('pengurus.destroy', $pengurus->id) }}" method="POST">
                        <a href="{{ route('pengurus.show', $pengurus->id) }}" class="btn btn-sm btn-flat btn-info"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('pengurus.edit', $pengurus->id) }}" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-edit"></i></a>
                        @csrf
                                    @method('DELETE')
                        <x-adminlte-button class="btn-flat btn-sm" type="submit" label="" theme="danger" icon="fas  fa-trash"/>
                    </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('admin.jabatan.form')
@include('admin.jabatan.index')
@stop
@section('js')

@stop