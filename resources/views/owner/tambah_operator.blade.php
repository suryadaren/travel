@extends('owner.layout')

@section('title','Tambah Operator')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Operator</h1>
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
                <h3 class="card-title">Masukan Data Operator</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/owners/simpan_operator" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Masukan Nama">
                    </div>
                  </div>
                  @if($errors->has('nama'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('nama')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Masukan Email">
                    </div>
                  </div>
                  @if($errors->has('email'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('email')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Masukan Password">
                    </div>
                  </div>
                  @if($errors->has('password'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('password')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Masukan Nomor Telepon" name="nomor_telepon">
                    </div>
                  </div>
                  @if($errors->has('nomor_telepon'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('nomor_telepon')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Masukan Alamat" name="alamat">
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
                  @if($errors->has('foto'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('foto')}} </div>
                  @endif
                <!-- /.card-body -->
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