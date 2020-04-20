<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Travel Agency | Register Form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/home/images/favicon.png" type="image/x-icon">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/operator/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/operator/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/operator/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/operator/index2.html"><b>Register</b> form</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masukan data anda!</p>

      
              <form action="/simpan_register" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-md-12">

                    <div class="form-group-inner mb-3">
                      <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                      @if($errors->has('email'))
                        <div class="alert alert-danger" role="alert"> {{$errors->first('email')}} </div>
                      @endif
                    </div>


                    <div class="form-group-inner mb-3">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                      @if($errors->has('password'))
                        <div class="alert alert-danger" role="alert"> {{$errors->first('password')}} </div>
                      @endif
                    </div>

                    <div class="form-group-inner mb-3">
                      <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{old('nama')}}">
                      @if($errors->has('nama'))
                        <div class="alert alert-danger" role="alert"> {{$errors->first('nama')}} </div>
                      @endif
                    </div>

                    <div class="form-group-inner mb-3">
                      <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon" value="{{old('nomor_telepon')}}">
                      @if($errors->has('nomor_telepon'))
                        <div class="alert alert-danger" role="alert"> {{$errors->first('nomor_telepon')}} </div>
                      @endif
                    </div>

                    <div class="form-group-inner mb-3">
                      <input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{old('alamat')}}">
                      @if($errors->has('alamat'))
                        <div class="alert alert-danger" role="alert"> {{$errors->first('alamat')}} </div>
                      @endif
                    </div>

                    <div class="form-group-inner mb-3">
                      <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih File Foto</label>
                      </div>
                      @if($errors->has('foto'))
                        <div class="alert alert-danger" role="alert"> {{$errors->first('foto')}} </div>
                      @endif
                    </div>

                  </div>


                  <div class="col-md-12">
                    <input type="submit" class="btn btn-primary" style="width: 100%" value="SIMPAN">
                  </div>
                  <!-- /.col -->
                </div>
              </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/operator/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/operator/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/operator/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  @if(Session::has('message'))
    var type="{{Session::get('alert-type','success')}}"
  
    switch(type){
      case 'success':
       toastr.info("{{ Session::get('message') }}");
       break;
    case 'error':
      toastr.error("{{ Session::get('message') }}");
      break;
    }
  @endif
</script>

</body>
</html>
