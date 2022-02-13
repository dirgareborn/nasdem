  <!-- medium modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="editBody">
                    <form id="form-edit">
                    <x-adminlte-input type="text" name="id2" id="id2" value=""/>
                        <x-adminlte-input name="nama_jabatan2" id="nama_jabatan2"  label="Nama Jabatan" fgroup-class="col-md-12 col-12"/>
                        <x-adminlte-select label="Atasan Langsung" id="parent_id2" name="parent_id2" fgroup-class="col-md-12 col-12">
                            <option value="0"> Pilih Jatanan Atasan Langsung</option>
                            @foreach ($jabatans as $jabatan)
                            <option value="{{ $jabatan->id}}">{{$jabatan->nama_jabatan}}</option>
                            @endforeach
                        </x-adminlte-select>
                    <x-adminlte-input name="sort2" label="Urutan Tampil" placeholder="urutan tampil" type="number"
                    fgroup-class="col-md-12 col-12" min=1 max=30>
                    </x-adminlte-input>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" >Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
