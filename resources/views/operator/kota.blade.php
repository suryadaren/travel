@extends('operator.layout')

@section('title','Kota')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kota</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Kota</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="/operators/tambah_kota" class="btn btn-primary">Tambah Kota</a>
              <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 50%">Kota</th>
                  <th style="width: 30%">Kode</th>
                  <th style="width: 20%">Action</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($kotas as $kota)
                	<tr>
                		<td>{{$kota->nama}}</td>
                		<td>{{$kota->kode}}</td>
                		<td>
                      <a href="/operators/edit_kota/{{$kota->id}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                      <a onclick="hapus('{{$kota->id}}')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                	</tr>
                	@endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <div class="modal fade" id="hapus">
        <div class="modal-dialog">
          <div class="modal-content bg-default">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda yakin ingin menghapus data kota ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <form name="form_hapus" action="/operators/hapus_kota" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id">
              <input type="submit" class="btn btn-danger" value="Ya">
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endsection

@section('js')

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  function hapus(id){
    document.forms['form_hapus']['id'].value=id;
    $('#hapus').modal();
  }
</script>
@endsection