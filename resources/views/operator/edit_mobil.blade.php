@extends('operator.layout')

@section('title','Edit Mobil')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Mobil</h1>
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
                <h3 class="card-title">Masukan Data Mobil Terbaru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="/operators/update_mobil" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value="{{$mobil->id}}">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                      <input type="text" name="merk" class="form-control" id="inputEmail3" placeholder="Masukan Merk Mobil" value="{{$mobil->merk}}">
                    </div>
                  </div>
                  @if($errors->has('merk'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('merk')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Plat</label>
                    <div class="col-sm-10">
                      <input  value="{{$mobil->plat}}" type="text" class="form-control" id="inputPassword3" placeholder="Masukan Plat Mobil (Unik)" name="plat">
                    </div>
                  </div>
                  @if($errors->has('plat'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('plat')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Warna</label>
                    <div class="col-sm-10">
                      <input  value="{{$mobil->warna}}" type="text" class="form-control" id="inputPassword3" placeholder="Masukan Warna Mobil" name="warna">
                    </div>
                  </div>
                  @if($errors->has('warna'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('warna')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Foto Mobil</label>
                    <div class="col-sm-10">
                      <input  type="file" class="form-control" id="inputPassword3" placeholder="Masukan Warna Mobil" name="foto">
                    </div>
                  </div>
                  @if($errors->has('foto'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('foto')}} </div>
                  @endif
                </div>
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