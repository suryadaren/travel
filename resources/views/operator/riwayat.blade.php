@extends('operator.layout')

@section('title','Riwayat Perjalanan')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Riwayat Perjalanan</h1>
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
              <h3 class="card-title">Daftar Riwayat Perjalanan Driver</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Keberangkatan</th>
                  <th>Mobil</th>
                  <th>Plat Mobil</th>
                  <th>Sopir</th>
                  <th>Tanggal Berangkat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($jadwals as $jadwal)
                  <tr>
                    <td>{{$jadwal->kota_asal->nama}} - {{$jadwal->kota_tujuan->nama}}</td>
                    <td>{{$jadwal->mobil->merk}}</td>
                    <td>{{$jadwal->mobil->plat}}</td>
                    <td>{{$jadwal->sopir->nama}}</td>
                    <td>{{$jadwal->tanggal_berangkat}} {{$jadwal->jam_berangkat}}</td>
                    <td>
                      <a href="/operators/lihat_riwayat/{{$jadwal->id}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
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