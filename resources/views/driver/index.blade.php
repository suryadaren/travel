@extends('driver.layout')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Perjalanan Saat ini</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-12 col-md-12 align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  12 April 2020
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="lead"><b>Malang - Surabaya</b></h2>
                      <form class="form-horizontal">
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kota Terkini</label>
                            <div class="col-sm-10">
                              <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Masukan Nama Kota Pemberhentian terkini">
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-info float-right">Simpan</button>
                        </div>
                        <!-- /.card-footer -->
                      </form>
                      <br>
                      <h2 class="lead"><b>Riwayat Perjalanan Sekarang : </b></h2>

                      <div class="col-md-12">
                        <!-- The time line -->
                        <div class="timeline">
                          <!-- timeline time label -->
                          <div class="time-label">
                            <span class="bg-red">10 Feb. 2014 | 14:12</span>
                          </div>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <div>
                            
                            <div class="timeline-item">
                              <h3 class="timeline-header"><a href="#">Malang</a></h3>
                            </div>
                          </div>


                          <!-- timeline time label -->
                          <div class="time-label">
                            <span class="bg-red">10 Feb. 2014 | 15:30</span>
                          </div>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <div>
                            
                            <div class="timeline-item">
                              <h3 class="timeline-header">Sidoarjo</h3>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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