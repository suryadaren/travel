@extends('operator.layout')

@section('title','Riwayat Perjalanan')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Riwayat Perjalanan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <strong>Keberangkatan</strong>
                  <address>
                    Malang - Surabaya<br>
                    25 April 2020 | 14:00<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <strong>Data Mobil</strong>
                  <address>
                    Avanza<br>
                    Plat : N 1212 IK<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <strong>Data Sopir</strong>
                  <address>
                    Nama : Yadi<br>
                    Nomor KTP : 123123123121<br>
                    Nomor SIM : 12341235
                  </address>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-md-12">
                  <h5><strong>Data Penumpang : </strong></h5>
                  <br>
                </div>
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Nomor KTP</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Yudi Perdana</td>
                      <td>123132132</td>
                    </tr>
                    <tr>
                      <td>Eko Yulianto</td>
                      <td>123123121</td>
                    </tr>
                    <tr>
                      <td>Yuni Suci</td>
                      <td>123120930</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <div class="modal fade" id="verifikasi">
        <div class="modal-dialog">
          <div class="modal-content bg-default">
            <div class="modal-header">
              <h4 class="modal-title">Verifikasi Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda yakin ingin menghapus memverifikasi pembayaran ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <form name="form_verifikasi" action="/operators/verifikasi" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id">
              <input type="submit" class="btn btn-success" value="Ya">
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endsection

@section('js')
<script>
  function verifikasi(id){
    document.forms['form_verifikasi']['id'].value=id;
    $('#verifikasi').modal();
  }
</script>
@endsection