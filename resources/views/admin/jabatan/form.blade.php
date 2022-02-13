

<!-- Modal -->
<div class="modal fade" id="createJabatan" tabindex="-1" role="dialog" aria-labelledby="createJabatanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createJabatanLabel">Jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('jabatan.store') }}" method="POST" >
      <div class="modal-body">
        <div class="row">
            @csrf
            <x-adminlte-input name="nama_jabatan" id="nama_jabatan" label="Nama Jabatan" placeholder="Nama jabatan" fgroup-class="col-md-12 col-12" disable-feedback/>
            <x-adminlte-select label="Atasan Langsung" name="parent_id" fgroup-class="col-md-12 col-12">
                <option value="0"> Pilih Jatanan Atasan Langsung</option>
                @foreach ($jabatans as $jabatan)
                <option value="{{ $jabatan->id}}">{{$jabatan->nama_jabatan}}</option>
                @endforeach
            </x-adminlte-select>
            <x-adminlte-input name="sort" label="Urutan Tampil" placeholder="urutan tampil" type="number"
              fgroup-class="col-md-12 col-12" min=1 max=30>
            </x-adminlte-input>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
    </div>
  </div>
</div>

@section('js')
<script>
        $('#createJabatan').on('shown.bs.modal', function () {
            $('#nama_jabatan').trigger('focus')
        }) ;

         $(".btn").click(function(){
            $("#indexJabatan").modal('hide');
        });
        
        $("#mediumButton").click(function(){
            $("#indexJabatan").modal('hide');
        });
</script>
@stop