<!-- Modal -->
<div class="modal fade" id="indexJabatan" tabindex="-1"  role="dialog" aria-labelledby="indexJabatanLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="indexJabatanLabel">Jabatan Pengurus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        @php
                $heads = [
                    ['label' => 'No', 'width' => 5],
                    ['label' => 'Nama Jabatan', 'width'  => 80],
                    ['label' => 'Aksi', 'width' => 5],
                ];
                @endphp
        <x-adminlte-datatable id="table1" :heads="$heads" striped hoverable bordered with-buttons compressed>
                    @foreach ($jabatans as $key => $jabatan)
                        <tr>
                            <td scope="row">{{ $key + 1 }}</td>
                            <td>{{ $jabatan->nama_jabatan }}</td>
                            <td>
                            <div class="btn-group">
                                <form action="{{ route('jabatan.destroy', $jabatan->id) }}" method="POST">
                                    <a class="text-secondary editButton" 
                                        data-attr="{{ route('jabatan.edit', $jabatan->id) }}">
                                        <i class="fas fa-edit text-gray-300"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash text-danger"></i>
                                    </button>
                                </form>
</div>
                            </td>
                        </tr>
                    @endforeach
                </x-adminlte-datatable>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createJabatan">Tambah</button>
      </div>
    </div>
  </div>
</div>

@include('admin.jabatan.edit')
@push('js')
    <script> 
    $('#indexJabatan').on('shown.bs.modal', function () {
    $('#title').trigger('focus')
    }); 
    
    $(document).on('click', '.editButton', function(event) {
      event.preventDefault();
      var id = $(this).data('id');  
      var url = $(this).attr('data-attr');
      $.ajax({
        url: url,
        type: "GET",
        data: { id: id },
        dataType: "JSON",
        success: function(data) {
          console.log(data);
            $('#form-edit').attr('action', url);
            $('#id2').val(data.data.id);
            $('#nama_jabatan2').val(data.data.nama_jabatan);
            $('#parent_id2').val(data.data.parent_id);
            $('#sort2').val(data.data.sort);
            $("#indexJabatan").modal('hide');
            $('#editModal').modal('show');
                }
            });
          });
    </script>
@endpush