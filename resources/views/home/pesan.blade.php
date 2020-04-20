@extends('home.layout')

@section('title', ' Pesan Tiket')

@section('content')

        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                            <div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3>Data Penumpang</h3>
                                    <p>Silahkan Masukan Data Penumpang!</p>
                                    <form action="/customers/informasi_pemesanan" method="get">
                                        {{csrf_field()}}
                                        <input type="hidden" name="jadwal_id" value="{{$jadwal->id}}">

                                        @for($i = 1; $i <= $jumlah ; $i++)

                                        <label>Penumpang {{$i}}</label> 
                                        <div class="form-group">
                                             <input type="text" name="nama_penumpang[]" class="form-control" placeholder="Nama Penumpang"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
                                        <div class="form-group">
                                             <input type="text" name="nomor_ktp[]" class="form-control" placeholder="Nomor KTP"  required/>
                                             <span><i class="fa fa-id-card"></i></span>
                                        </div>
                                        <div class="form-group">
                                             <select name="jenis_kelamin[]" class="form-control">
                                                 <option value="laki-laki">Laki-laki</option>
                                                 <option value="perempuan">perempuan</option>
                                             </select>
                                        </div>
                                        
                                        @endfor

                                        <button class="btn btn-orange btn-block">Simpan</button>
                                    </form>
                                </div><!-- end custom-form -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end registration -->
        </section><!-- end innerpage-wrapper -->
@endsection
