@extends('operator.layout')

@section('title','Pemesanan')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pemesanan</h1>
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
                    {{$pemesanan->jadwal->kota_asal->nama}} - {{$pemesanan->jadwal->kota_tujuan->nama}}<br>
                    {{$pemesanan->jadwal->tanggal_berangkat}} | {{$pemesanan->jadwal->jam_berangkat}}<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <strong>Data Pemesan</strong>
                  <address>
                    {{$pemesanan->customer->nama}}<br>
                    Email : {{$pemesanan->customer->email}}<br>
                    Hp : {{$pemesanan->customer->nomor_telepon}}<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <strong>Ticket</strong>
                  <b>Kode Boking : </b>{{$pemesanan->id}}<br>
                  <b>Status : </b> <small class="badge badge-warning"></i>{{$pemesanan->status}}</small><br>
                  <b>Tanggal pemesanan : </b> {{$pemesanan->created_at}}<br>
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
                      <th>Jenis Kelamin</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($pemesanan->penumpangs as $penumpang)
                        <tr>
                          <td>{{$penumpang->nama}}</td>
                          <td>{{$penumpang->nomor_ktp}}</td>
                          <td>{{$penumpang->jenis_kelamin}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-12">
                  <br>
                  <h5><strong>Foto Bukti Transfer : </strong></h5>
                  <img src="{{Storage::url($pemesanan->bukti_pembayaran)}}" width="500px" alt="bukti transfer">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              @if($pemesanan->status == "menunggu verifikasi pembayaran")
              <!-- this row will not appear when printing -->
                <div class="row no-print" style="margin: 20px 0">
                  <div class="col-12">
                    <p><strong>Silahkan Verifikasi pembayaran jika pembayaran telah diterima</strong></p>
                    <button type="button" onclick="verifikasi('{{$pemesanan->id}}')" class="btn btn-success float-left"><i class="fas fa-check"></i> Verifikasi Pembayaran
                    </button>
                  </div>
                </div>
              @endif
            </div>
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
              <p>Apakah anda yakin ingin memverifikasi pembayaran ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <form name="form_verifikasi" action="/operators/verifikasi_pembayaran" method="post">
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