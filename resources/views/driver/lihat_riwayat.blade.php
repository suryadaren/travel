@extends('driver.layout')

@section('title','Riwayat Perjalanan')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Riwayat Perjalanan Anda</h1>
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
                    {{$jadwal->kota_asal->nama}} - {{$jadwal->kota_tujuan->nama}}<br>
                    {{$jadwal->tanggal_berangkat}} | {{$jadwal->jam_berangkat}}<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <strong>Data Mobil</strong>
                  <address>
                    {{$jadwal->mobil->merk}}<br>
                    Plat : {{$jadwal->mobil->plat}}<br>
                    Warna : {{$jadwal->mobil->warna}}<br>
                  </address>
                </div>
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
                    @foreach($jadwal->pemesanans as $pemesanan)
                      @foreach($pemesanan->penumpangs as $penumpang)
                        <tr>
                          <td>{{$penumpang->nama}}</td>
                          <td>{{$penumpang->nomor_ktp}}</td>
                          <td>{{$penumpang->jenis_kelamin}}</td>
                        </tr>
                      @endforeach
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>



              <!-- Table row -->
              <div class="row">
                <div class="col-md-12">
                  <h5><strong>Data Pemberhentian : </strong></h5>
                  <br>
                </div>
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
@endsection
