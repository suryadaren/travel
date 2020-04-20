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
              <div class="col-12">
                <img src="{{Storage::url($sopir->foto)}}"  class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$sopir->nama}}</h3>

              <hr>
              <table>
                <tr>
                  <td><h5>Email </h5></td>
                  <td><h5> : {{$sopir->email}}</h5></td>
                </tr>
                <tr>
                  <td><h5>Nomor Telepon </h5></td>
                  <td><h5> : {{$sopir->nomor_telepon}}</h5></td>
                </tr>
                <tr>
                  <td><h5>Alamat </h5></td>
                  <td><h5> : {{$sopir->alamat}}</h5></td>
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
