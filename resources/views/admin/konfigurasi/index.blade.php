@extends('adminlte::page')

@section('title', 'Berita')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Berita</h1>
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
            <a href="{{ route('berita.create')}}" class="btn btn-flat btn-info" > <i class="fa fa-plus"></i> Tambah Berita</a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

            @php
                $heads = [
                    'No',
                    'Judul',
                    ['label' => 'Status', 'width' => 40],
                    ['label' => 'Aksi', 'no-export' => true, 'width' => 5],
                ];

                $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>';
                $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                  <i class="fa fa-lg fa-fw fa-trash"></i>
                              </button>';
                $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                  <i class="fa fa-lg fa-fw fa-eye"></i>
                              </button>';

                $config = [
                    'order' => [[1, 'asc']],
                    'columns' => [null, null, null, ['orderable' => false]],
                ];
                @endphp

                <x-adminlte-datatable id="table1" :heads="$heads">
                    @foreach($beritas as $key => $row)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $row['title']}}</td>
                            <td>
                            @if ($row['is_active'] == 0)
                                <span class="badge badge-danger">Tidak Aktif</span>
                            @else
                                <span class="badge badge-success">Aktif</span>
                            @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('berita.edit', $row['id'])}}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                        <i class="fa fa-lg fa-fw fa-pen"></i>
                                    </a>
                                    <a href="{{ route('berita.show', $row['id'])}}" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                        <i class="fa fa-lg fa-fw fa-eye"></i>
                        </tr>
                    @endforeach
                </x-adminlte-datatable>
            </div>
        </div>
    </div>
</div>
@section('plugins.DatatablesPlugin', true)
@stop