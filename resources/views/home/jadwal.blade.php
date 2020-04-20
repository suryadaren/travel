@extends('home.layout')

@section('title', ' Jadwal')

@section('content')

        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="dashboard" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            @if(count($jadwals) > 0)
                            <div class="dashboard-heading">
                                <p>Hi Customer, Silahkan pilih jadwal anda!</p>
                                <p>{{$tanggal}} | <span style="color: blue">{{$kota_asal->nama}} - {{$kota_tujuan->nama}}</span></p>
                            </div><!-- end dashboard-heading -->
                            <br>
                            <br>
                            <div class="col-xs-12 col-sm-12 col-md-12 dashboard-content wishlist">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                    @foreach($jadwals as $jadwal)

                                                    <?php 
                                                    $now = Carbon\Carbon::now()->subHours(4)->format('Y:m:d H:i:s');
                                                    $tanggal_berangkat = $jadwal->tanggal_berangkat." ".$jadwal->jam_berangkat;

                                                    $tanggal_berangkat = Carbon\Carbon::parse($tanggal_berangkat);
                                                    ?>

                                                    @if($tanggal_berangkat <= $now && $jadwal->status == "tersedia")
                                                        <tr class="list-content">
                                                            <td class="wishlist-img" style="width: 450px"><img src="{{Storage::url($jadwal->mobil->foto)}}" class="img-responsive" alt="wishlist-img" /></td>
                                                            <td class="list-text wishlist-text">
                                                                <h3>{{$jadwal->mobil->merk}}
                                                                </h3>
                                                                <br>
                                                                <p class="order"><strong>Jadwal Berangkat : </strong> {{$jadwal->jam_berangkat}}</p>
                                                                <p class="order"><strong>Estimasi Sampai : </strong> {{$jadwal->jam_sampai}}</p>
                                                                <p class="order"><strong>Kursi Tersedia : </strong> {{$jadwal->kursi_tersedia}}</p>
                                                                <p class="order"><strong>Sopir : </strong> {{$jadwal->sopir->nama}}</p>
                                                                <p class="order"><strong>Harga : </strong> Rp. {{$jadwal->harga_tiket}},-</p>
                                                            </td>
                                                            @if(auth()->guard('customer')->check())
                                                                @if($jumlah > $jadwal->kursi_tersedia)
                                                                <td class="wishlist-btn"><a onclick="kursi()" class="btn btn-danger">Pesan Sekarang!</a></td>
                                                                @else
                                                                <td class="wishlist-btn"><a href="/customers/pesan/{{$jadwal->id}}/{{$jumlah}}" class="btn btn-orange">Pesan Sekarang!</a></td>
                                                                @endif
                                                            @else
                                                            <td class="wishlist-btn"><a onclick="login()" class="btn btn-danger">Pesan Sekarang!</a></td>
                                                            @endif
                                                        </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                             </table>
                                        </div><!-- end table-responsive -->
                                    </div>
                            @else
                                <div class="dashboard-heading text-center" style="margin: 92px 0">
                                    <p>Hi Customer, Mohon Maaf Jadwal untuk tanggal ini sedang kosong!</p>
                                </div>
                            @endif
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->          
            </div><!-- end dashboard -->
        </section><!-- end innerpage-wrapper -->



        <div class="modal fade" id="login">
            <div class="modal-dialog">
              <div class="modal-content bg-default">
                <div class="modal-header">
                  <h4 class="modal-title">Peringatan!</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Harus melakukan login untuk melakukan pemesanan ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <a href="/login" class="btn btn-orange">Login</a>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
        <!-- /.modal-dialog -->
      </div>



        <div class="modal fade" id="kursi">
            <div class="modal-dialog">
              <div class="modal-content bg-default">
                <div class="modal-header">
                  <h4 class="modal-title">Peringatan!</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Tidak Dapat melakukan pemesanan, karena jumlah kursi tersedia kurang dari yang dibutuhkan</p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
        <!-- /.modal-dialog -->
      </div>
@endsection

@section('js')
<script>
    function login(){
        $('#login').modal();
    }
    function kursi(){
        $('#kursi').modal();
    }
</script>
@stop