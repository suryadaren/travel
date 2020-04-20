@extends('customer.layout')

@section('title','Pesanan')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pesanan</h1>
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
              <h3 class="card-title">Daftar Pesanan Anda</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Booking</th>
                  <th>Keberangkatan</th>
                  <th>Tanggal Berangkat</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($pemesanans as $pemesanan)
                  <tr>
                    <td>{{$pemesanan->id}}</td>
                    <td>{{$pemesanan->jadwal->kota_asal->nama}} - {{$pemesanan->jadwal->kota_tujuan->nama}}</td>
                    <td>{{$pemesanan->jadwal->tanggal_berangkat}} | {{$pemesanan->jadwal->jam_berangkat}}</td>
                    <td><small class="badge badge-warning"></i>{{$pemesanan->status}}</small></td>
                    <td>
                      <a href="/customers/lihat_pemesanan/{{$pemesanan->id}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
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