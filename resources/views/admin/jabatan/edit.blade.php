  <!-- medium modal -->
  <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <form action="{{ route('jabatan.store') }}" method="POST" >
                    @csrf
                        <x-adminlte-input name="nama_jabatan" id="nama_jabatan" label="Nama Jabatan" value="{{ $jabatan->nama_jabatan }}" fgroup-class="col-md-12 col-12"/>
                        <x-adminlte-select label="Atasan Langsung" name="parent_id" fgroup-class="col-md-12 col-12">
                            <option value="0"> Pilih Jatanan Atasan Langsung</option>
                            @foreach ($jabatans as $jabatan)
                            <option value="{{ $jabatan->id}}">{{$jabatan->nama_jabatan}}</option>
                            @endforeach
                        </x-adminlte-select>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
