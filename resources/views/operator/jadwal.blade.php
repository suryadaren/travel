@extends('operator.layout')

@section('title','Jadwal Keberangkatan')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Jadwal Keberangkatan</h1>
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
              <h3 class="card-title">Daftar Jadwal Keberangkatan travel</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="/operators/tambah_jadwal" class="btn btn-primary">Tambah Jadwal</a>
              <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Mobil</th>
                  <th>Plat Mobil</th>
                  <th>Sopir</th>
                  <th>Tanggal Berangkat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@for($i=0;$i<100;$i++)
                	<tr>
                    <td>Avanza</td>
                		<td>N 1243 OP</td>
                		<td>Yadi</td>
                		<td>24 maret 2020 12:00</td>
                		<td>
                      <a href="/operators/edit_jadwal/1" class="btn btn-warning">Edit</a>
                      <a onclick="hapus('1')" class="btn btn-danger">Hapus</a>
                    </td>
                	</tr>
                	@endfor
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
@endsection