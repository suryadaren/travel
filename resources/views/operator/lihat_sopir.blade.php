@extends('operator.layout')

@section('title','Sopir')
@section('css')
<style>
  td{
    padding-right: 20px
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
            <h1>Data Sopir</h1>
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
            <div class="col-12 col-sm-6 text-center">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
                <img src="/operator/dist/img/avatar5.png"  class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="/operator/dist/img/avatar5.png" alt="Product Image"></div>
                <div class="product-image-thumb active"><img src="/operator/dist/img/sim.jpg" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="/operator/dist/img/ktp.jpg" alt="Product Image"></div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Yadi Ar-rasyid</h3>

              <hr>
              <table>
                <tr>
                  <td><h5>Nomor KTP </h5></td>
                  <td><h5> : 1231231212312</h5></td>
                </tr>
                <tr>
                  <td><h5>Nomor SIM A </h5></td>
                  <td><h5> : 12312312312</h5></td>
                </tr>
                <tr>
                  <td><h5>Tanggal Lahir </h5></td>
                  <td><h5> : 25 desember 1998</h5></td>
                </tr>
                <tr>
                  <td><h5>Alamat </h5></td>
                  <td><h5> : Jl. Soekarno hatta, Kota Malang</h5></td>
                </tr>
              </table>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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