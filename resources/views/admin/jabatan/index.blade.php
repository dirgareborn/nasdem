
<!-- Modal -->
<div class="modal fade" id="indexJabatan" tabindex="-1" role="dialog" aria-labelledby="indexJabatanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="indexJabatanLabel">Jabatan Pengurus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <table class="table table-bordered table-responsive-lg table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Jabatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jabatans as $key => $jabatan)
                        <tr>
                            <td scope="row">{{ $key + 1 }}</td>
                            <td>{{ $jabatan->nama_jabatan }}</td>
                            <td>
                                <form action="{{ route('jabatan.destroy', $jabatan->id) }}" method="POST">
                                    <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#mediumModal"
                                        data-attr="{{ route('jabatan.edit', $jabatan->id) }}">
                                        <i class="fas fa-edit text-gray-300"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
@section('js')
    <script> $('#indexJabatan').on('shown.bs.modal', function () {
    $('#title').trigger('focus')
    }); 
    
    // display a modal (medium modal)
    $(document).on('click', '#mediumButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            });
            $("#indexJabatan").modal('hide');
        });
   
    </script>
@stop