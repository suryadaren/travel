@extends('operator.layout')

@section('title','Edit Kota')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Kota</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Masukan Data Kota Terbaru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/operators/update_kota" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value="{{$kota->id}}">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kota</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="inputEmail3" value="{{$kota->nama}}">
                    </div>
                  </div>
                  @if($errors->has('nama'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('nama')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kode Kota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="kode" value="{{$kota->kode}}">
                    </div>
                  </div>
                  @if($errors->has('kode'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('kode')}} </div>
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