@extends('home.layout')

@section('title', ' Bayar')

@section('content')

        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        
                            <div class="dashboard-heading">
                                <p>Hi {{auth()->guard('customer')->user()->nama}}, ini adalah detail pemesanan anda!</p>
                                <p>Silahkan masukan data bank anda untuk pembayaran!</p>
                            </div><!-- end dashboard-heading -->

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-side">
                            <div class="traveler-info">
                                    <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Informasi Pemesanan :</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>{{auth()->guard('customer')->user()->nama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>{{auth()->guard('customer')->user()->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Telepon</td>
                                                    <td>{{auth()->guard('customer')->user()->nomor_telepon}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>{{auth()->guard('customer')->user()->alamat}}</td>
                                                </tr>
                                                <?php $hitung = 1; ?>
                                                @for($i = 0; $i < $jumlah_penumpang; $i++)
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>penumpang {{$hitung}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>{{$nama_penumpang[$i]}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KTP</td>
                                                    <td>{{$nomor_ktp[$i]}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis kelamin</td>
                                                    <td>{{$jenis_kelamin[$i]}}</td>
                                                </tr>
                                                <?php 
                                                    $hitung++ 
                                                ?>
                                                @endfor
                                            </tbody>
                                        </table>
                                    </div><!-- end table-responsive -->
                            </div><!-- end traveler-info -->
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-side">

                            <div class="traveler-info">
                                    <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Silahkan Transfer ke :</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Nama pemilik akun</td>
                                                    <td>Tour travel id</td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Rekening</td>
                                                    <td>12312312312</td>
                                                </tr>
                                                <tr>
                                                    <td>Bank</td>
                                                    <td>MANDIRI</td>
                                                </tr>
                                                <tr>
                                                    <td>Subtotal</td>
                                                    <td>Rp. {{$total}},-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- end table-responsive -->
                            </div><!-- end traveler-info -->

                            <div class="traveler-info">
                                    <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Silahkan masukan data bank anda :</h3>
                                    <div class="table-responsive">
                                    <div class="custom-form custom-form-fields">
                                        <form action="/customers/buat_pemesanan" method="post">
                                            <input type="hidden" name="jadwal_id" value="{{$jadwal_id}}">
                                            <input type="hidden" name="harga" value="{{$total}}">
                                            @for($i = 0; $i < $jumlah_penumpang; $i++)
                                                <input type="hidden" name="nama_penumpang[]" value="{{$nama_penumpang[$i]}}">
                                                <input type="hidden" name="nomor_ktp[]" value="{{$nomor_ktp[$i]}}">
                                                <input type="hidden" name="jenis_kelamin[]" value="{{$jenis_kelamin[$i]}}">
                                            @endfor
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="">Nama Pemilik Akun</label>
                                                 <input type="text" class="form-control" name="nama_pemilik" placeholder="Name"  required/>
                                            </div>
            
                                            <div class="form-group">
                                                <label for="">Nomor Rekening</label>
                                                 <input type="text" class="form-control" name="nomor_rekening" placeholder="Account Number"  required/>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Bank</label>
                                                 <input type="text" name="nama_bank" class="form-control" placeholder="Bank"  required/>
                                            </div>

                                            <input type="submit" class="btn btn-orange btn-block" value="Selesai">
                                        </form>
                                    </div>
                                    </div><!-- end table-responsive -->
                            </div><!-- end traveler-info -->
                        </div>

                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end registration -->
        </section><!-- end innerpage-wrapper -->
@endsection
