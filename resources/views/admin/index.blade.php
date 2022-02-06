@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Dashboard</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
    </ol>
  </div>
</div>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Dashboard</h3>
                <div class="card-tools">
                <h5 class="pull-right">Selamat Datang &nbsp;
                    <strong>
                        {{ Auth::user()->name }}
                    </strong>    
                </h5>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-6">
                    <x-adminlte-small-box title="{{ $data['berita'] }}" text="Berita" icon="fas fa-chart-bar"
                    theme="info" url="{{ route('berita.index') }}" url-text="Lihat Semua Berita"/>
                    </div>
                    <div class="col-md-6 col-6">
                    <x-adminlte-small-box title="1000" text="Pengunjung Website" icon="fas fa-eye text-dark"
                    theme="teal" url="#" url-text="Lihat Detail"/>
                    </div>
                    <div class="col-md-6 col-6">
                    <x-adminlte-small-box title="{{ $data['pengurus'] }}" text="Pengurus DPD" icon="fas fa-user-plus text-teal"
                    theme="primary" url="{{ route('pengurus.index') }}" url-text="Lihat Semua Pengurus"/>
                    </div>
                    <div class="col-md-6 col-6">
                    <x-adminlte-small-box title="{{ $data['kegiatan'] }}" text="Kegiatan" icon="fas fa-medal text-dark"
                    theme="danger" url="{{ route('kegiatan.index') }}" url-text="Lihat Detail" id="sbUpdatable"/>
                    </div>
                   </div>
            </div>
        </div>
    </div>
</div>
@stop
@push('js')
<script>

    $(document).ready(function() {

        let sBox = new _AdminLTE_SmallBox('sbUpdatable');

        let updateBox = () =>
        {
            // Stop loading animation.
            sBox.toggleLoading();

            // Update data.
            let rep = Math.floor(1000 * Math.random());
            let idx = rep < 100 ? 0 : (rep > 500 ? 2 : 1);
            let text = 'Reputation - ' + ['Basic', 'Silver', 'Gold'][idx];
            let icon = 'fas fa-medal ' + ['text-primary', 'text-light', 'text-warning'][idx];
            let url = ['url1', 'url2', 'url3'][idx];

            let data = {text, title: rep, icon, url};
            sBox.update(data);
        };

        let startUpdateProcedure = () =>
        {
            // Simulate loading procedure.
            sBox.toggleLoading();

            // Wait and update the data.
            setTimeout(updateBox, 2000);
        };

        setInterval(startUpdateProcedure, 10000);
    })

</script>
@endpush
<!-- @include('admin.partials.footer') -->
