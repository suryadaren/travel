@extends('driver.layout')

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
              <h3 class="card-title">Daftar Jadwal Keberangkatan anda</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="/operators/tambah_jadwal" class="btn btn-primary">Tambah Jadwal</a>
              <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Asal</th>
                  <th>Tujuan</th>
                  <th>Mobil</th>
                  <th>Berangkat</th>
                  <th>Kursi Tersedia</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($jadwals as $jadwal)
                	<tr>
                    <td>{{$jadwal->kota_asal->nama}}</td>
                    <td>{{$jadwal->kota_tujuan->nama}}</td>
                    <td>{{$jadwal->mobil->merk}}</td>
                    <td>{{$jadwal->tanggal_berangkat}} {{$jadwal->jam_berangkat}}</td>
                    <td>{{$jadwal->kursi_tersedia}}</td>
                    <td><span class="badge badge-success">{{$jadwal->status}}</span></td>
                		<td>
                      <a href="/operators/lihat_jadwal/{{$jadwal->id}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
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