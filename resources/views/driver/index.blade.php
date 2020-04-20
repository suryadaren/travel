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
                  {{$jadwal->tanggal_berangkat}} | {{$jadwal->jam_berangkat}}
                  @if($jadwal->status == "dalam perjalanan")
                  <div class="float-right">
                    <button class="btn btn-warning float-right" onclick="sampai_tujuan('{{$jadwal->id}}')">Telah Sampai Tujuan</button>
                  </div>
                  @endif
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="lead"><b>{{$jadwal->kota_asal->nama}} - {{$jadwal->kota_tujuan->nama}}</b></h2>

                      @if($jadwal->status == "dalam perjalanan")
                      <form class="form-horizontal" action="/drivers/update_kota_terkini" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$jadwal->id}}">
                        <div class="card-body">
                          <br>
                          <br>
                          <label>Masukan nama kota/daerah anda berada saat ini!</label>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kota/daerah Terkini</label>
                            <div class="col-sm-10">
                              <input type="text" required name="nama" class="form-control" id="inputEmail3" placeholder="Masukan Nama Kota Pemberhentian terkini">
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-info float-right">Simpan</button>
                        </div>
                        <!-- /.card-footer -->
                      </form>
                      @endif
                      <br>
                      <h2 class="lead"><b>Riwayat Perjalanan Sekarang : </b></h2>

                      <div class="col-md-12">
                        <!-- The time line -->
                        <div class="timeline">

                          @foreach($jadwal->riwayat_posisi_travels as $terkini)
                          
                          <!-- timeline time label -->
                          <div class="time-label">
                            <span class="bg-red">{{$terkini->created_at}}</span>
                          </div>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <div>
                            
                            <div class="timeline-item">
                              <h3 class="timeline-header">{{$terkini->nama_kota}}</h3>
                            </div>
                          </div>
                          @endforeach

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


  <div class="modal fade" id="sampai_tujuan">
        <div class="modal-dialog">
          <div class="modal-content bg-default">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda telah sampai tujuan ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              
              <form action="/drivers/sampai_tujuan" name="form_sampai_tujuan" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id">
                <input type="submit" class="btn btn-primary" value="Ya">
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
<script>
  function sampai_tujuan(id){
    document.forms['form_sampai_tujuan']['id'].value=id;
    $('#sampai_tujuan').modal();
  }
</script>
@endsection