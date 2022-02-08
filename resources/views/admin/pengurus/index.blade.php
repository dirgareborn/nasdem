@extends('adminlte::page')

@section('title', 'Pengurus')

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
            @php
                $heads = [
                    ['label' => 'No', 'width' => 5],
                    'Nama',
                    ['label' => 'Jabatan', 'width' => 40],
                    ['label' => 'Aksi', 'width' => 5],
                ];
                $config = [
                    'order' => [[1, 'asc']],
                    'columns' => [null, null, null, ['orderable' => false]],
                ];
                @endphp
            <x-adminlte-datatable id="table2" :heads="$heads" striped hoverable bordered with-buttons compressed>
                        @foreach ($pengurus as $key => $row)
                    <tr>
                    <td>{{ $key +1 }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->jabatan->nama_jabatan }}</td>
                    <td>
                    <form action="{{ route('pengurus.destroy', $row->id) }}" method="POST">
                    <div class="btn-group"> 
                                    <a href="{{ route('pengurus.show', $row->id) }}" class="btn btn-sm btn-default text-primary mx-1 shadow"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('pengurus.edit', $row->id) }}" class="btn btn-sm btn-default  text-teal mx-1 shadow"><i class="fa fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <x-adminlte-button class="btn-default btn-sm text-danger mx-1 shadow" type="submit" label="" theme="danger" icon="fas  fa-trash"/>
                                </div>
                    </form>
                    </td>
                    </tr>
                    @endforeach
                </x-adminlte-datatable>
            </div>
        </div>
    </div>
</div>
@include('admin.jabatan.form')
@include('admin.jabatan.index')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)
@stop
