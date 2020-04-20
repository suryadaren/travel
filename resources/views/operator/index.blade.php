@extends('operator.layout')

@section('title','Operator Pages')

@section('content')



  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Data</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Profil</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                      <div class="card-body box-profile">
                        <div class="text-center">
                          <img class="profile-user-img img-fluid img-circle"
                               src="{{Storage::url($user->foto)}}"
                               alt="img">
                        </div>
                        <br>

                        <ul class="list-group list-group-unbordered mb-3">
                          <li class="list-group-item">
                            <b>Nama</b> <a class="float-right">{{$user->nama}}</a>
                          </li>
                          <li class="list-group-item">
                            <b>Email</b> <a class="float-right">{{$user->email}}</a>
                          </li>
                          <li class="list-group-item">
                            <b>Nomor Telepon</b> <a class="float-right">{{$user->nomor_telepon}}</a>
                          </li>
                          <li class="list-group-item">
                            <b>alamat</b> <a class="float-right">{{$user->alamat}}</a>
                          </li>
                        </ul>
                      </div>
                      <!-- /.card-body -->
                  </div>

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="/operators/edit_profil" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                      <input type="hidden" name="_method" value="put">
                      <input type="hidden" name="id" value="{{$user->id}}">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="inputName">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama" value="{{$user->nama}}" class="form-control" id="inputName">
                        </div>
                      </div>
                        @if($errors->has('nama'))
                          <div class="alert alert-danger" role="alert"> {{$errors->first('nama')}} </div>
                        @endif
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                          <input type="text" name="nomor_telepon" value="{{$user->nomor_telepon}}" class="form-control" id="inputName">
                        </div>
                      </div>
                        @if($errors->has('nomor_telepon'))
                          <div class="alert alert-danger" role="alert"> {{$errors->first('nomor_telepon')}} </div>
                        @endif
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" name="alamat" value="{{$user->alamat}}" class="form-control" id="inputName">
                        </div>
                      </div>
                        @if($errors->has('alamat'))
                          <div class="alert alert-danger" role="alert"> {{$errors->first('alamat')}} </div>
                        @endif
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                          <input type="file" name="foto" class="form-control" id="inputName">
                        </div>
                      </div>
                        @if($errors->has('foto'))
                          <div class="alert alert-danger" role="alert"> {{$errors->first('foto')}} </div>
                        @endif
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>

@stop