@extends('operator.layout')

@section('title','Mobil')
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
            <h1>Data Mobil</h1>
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
                <img src="{{Storage::url($mobil->foto)}}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$mobil->merk}}</h3>

              <hr>
              <table>
                <tr>
                  <td><h5>Warna </h5></td>
                  <td><h5> : {{$mobil->warna}}</h5></td>
                </tr>
                <tr>
                  <td><h5>Nomo Plat </h5></td>
                  <td><h5> : {{$mobil->plat}}</h5></td>
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