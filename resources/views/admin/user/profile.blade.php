@extends('adminlte::page')

@section('title', 'Profil User')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Profil User</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      <li class="breadcrumb-item active">Profil User</li>
    </ol>
  </div>
</div>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form action="{{ route('profil.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                            <x-adminlte-input name="name" id="name" label="User Name" value="{{ $user->name}}" fgroup-class="col-md-6 col-6" />
                            <x-adminlte-input name="email" id="email" label="Email" value="{{ $user->email}}" fgroup-class="col-md-6 col-6" />
                            <x-adminlte-input name="password" id="password" label="Ubah Password" fgroup-class="col-md-6 col-6" disable-feedback/>
                            <!-- <x-adminlte-input name="new-password" id="new-password" label="Password Baru" fgroup-class="col-md-6 col-6" disable-feedback/>
                            <x-adminlte-input name="new-password-confirm" id="new-password-confirm" label="Konfirmasi Password" fgroup-class="col-md-6 col-6" disable-feedback/> -->
                            <button type="button" class="btn btn-secondary">Batal</button>
                            <button type="submit" class="btn btn-primary">Update</button> 
                    </form>
            </div>
        </div>
    </div>
</div>
@stop