@extends('owner.layout')

@section('title','Edit Operator')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Operator</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Masukan Data Operator terbaru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/owners/update_operator" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value="{{$operator->id}}">
                
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" value="{{$operator->nama}}" name="nama" class="form-control" id="inputEmail3" placeholder="Masukan Nama">
                    </div>
                  </div>
                  @if($errors->has('nama'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('nama')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Masukan Nomor Telepon" value="{{$operator->nomor_telepon}}" name="nomor_telepon">
                    </div>
                  </div>
                  @if($errors->has('nomor_telepon'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('nomor_telepon')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Masukan Alamat" value="{{$operator->alamat}}" name="alamat">
                    </div>
                  </div>
                  @if($errors->has('alamat'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('alamat')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="inputPassword3" placeholder="Masukan Foto" name="foto">
                    </div>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
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