@extends('operator.layout')

@section('title','Jadwal')
@section('css')
<style>
  td{
    padding-right: 20px
  }
  tr{
    border-bottom: 1px solid black;
  }
</style>
@endsection
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

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img src="{{Storage::url($jadwal->mobil->foto)}}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$jadwal->mobil->merk}} ({{$jadwal->mobil->plat}})</h3>

              <hr>
              <table>
                <tr>
                  <td><h5>Status </h5></td>
                  <td><h5> : <span class="badge badge-success">{{$jadwal->status}}</span></h5></td>
                </tr> 
                <tr>
                  <td><h5>Kota Asal </h5></td>
                  <td><h5> : {{$jadwal->kota_asal->nama}}</h5></td>
                </tr>
                <tr>
                  <td><h5>Kota Tujuan </h5></td>
                  <td><h5> : {{$jadwal->kota_tujuan->nama}}</h5></td>
                </tr>
                <tr>
                  <td><h5>Sopir </h5></td>
                  <td><h5> : {{$jadwal->sopir->nama}}</h5></td>
                </tr>
                <tr>
                  <td><h5>Jadwal Berangkat </h5></td>
                  <td><h5> : {{$jadwal->tanggal_berangkat}} {{$jadwal->jam_berangkat}}</h5></td>
                </tr>
                <tr>
                  <td><h5>Estimasi Sampai Tujuan</h5></td>
                  <td><h5> : {{$jadwal->tanggal_sampai}} {{$jadwal->jam_sampai}}</h5></td>
                </tr>
                <tr>
                  <td><h5>Harga Tiket </h5></td>
                  <td><h5> : Rp. {{$jadwal->harga_tiket}},-</h5></td>
                </tr>
                <tr>
                  <td><h5>Jumlah Kursi Tersedia </h5></td>
                  <td><h5> : {{$jadwal->kursi_tersedia}}</h5></td>
                </tr>
              </table>
              @if($jadwal->status == "tersedia")
                <br>
                <br>
                <label>Klik Tombol Dibawah jika travel berangkat</label>
                <a onclick="berangkat('{{$jadwal->id}}')" class="btn btn-primary btn-block">Travel Berangkat Sekarang</a>
              @endif
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

    <div class="modal fade" id="berangkat">
      <div class="modal-dialog">
        <div class="modal-content bg-default">
          <div class="modal-header">
            <h4 class="modal-title">Confirmation</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah Travel ini akan berangkat ?</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            <form name="form_berangkat" action="/operators/travel_berangkat" method="post">
              {{csrf_field()}}
              <input type="hidden" name="id">
            <input type="submit" class="btn btn-primary" value="Ya">
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
  function berangkat(id){
    document.forms['form_berangkat']['id'].value=id;
    $('#berangkat').modal();
  }
</script>
@endsection