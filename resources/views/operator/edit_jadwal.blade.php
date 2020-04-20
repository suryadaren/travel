@extends('operator.layout')

@section('title','Edit Jadwal Keberangkatan')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Jadwal Keberangkatan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Masukan Data Jadwal Keberangkatan Travel terbaru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/operators/update_jadwal" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="hidden" name="id" value="{{$jadwal->id}}">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kota Asal</label>
                    <div class="col-sm-10">
                      <select name="kota_asal" class="form-control" id="kota_asal">
                        <option value="{{$jadwal->kota_asal->id}}">{{$jadwal->kota_asal->nama}}</option>
                        @foreach($kota_asal as $kot)
                        <option value="{{$kot->id}}">{{$kot->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kota Tujuan</label>
                    <div class="col-sm-10">
                      <select name="kota_tujuan" class="form-control" id="kota_tujuan">
                        <option value="{{$jadwal->kota_tujuan->id}}">{{$jadwal->kota_tujuan->nama}}</option>
                        @foreach($kota_tujuan as $ko)
                        <option value="{{$ko->id}}">{{$ko->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Sopir</label>
                    <div class="col-sm-10">
                      <select name="sopir_id" class="form-control">
                        <option value="{{$jadwal->sopir->id}}">{{$jadwal->sopir->nama}}</option>
                        @foreach($sopir as $sop)
                        <option value="{{$sop->id}}">{{$sop->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobil</label>
                    <div class="col-sm-10">
                      <select name="mobil_id" class="form-control">
                        <option value="{{$jadwal->mobil->id}}">{{$jadwal->mobil->merk}}</option>
                        @foreach($mobil as $mob)
                        <option value="{{$mob->id}}">{{$mob->merk}} ({{$mob->plat}})</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <hr>
                  <label>Jadwal Berangkat</label>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" name="tanggal_berangkat" value="{{$jadwal->tanggal_berangkat->format('Y-m-d')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-10">
                      <input type="time" class="form-control" id="inputPassword3" name="jam_berangkat" value="{{$jadwal->jam_berangkat}}">
                    </div>
                  </div>
                  <hr>
                  <label>Estimiasi Sampai Tujuan</label>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" name="tanggal_sampai" value="{{$jadwal->tanggal_sampai->format('Y-m-d')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-10">
                      <input type="time" class="form-control" id="inputPassword3" name="jam_sampai" value="{{$jadwal->jam_sampai}}">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga tiket (Rp)</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="harga_tiket" name="harga_tiket" value="{{$jadwal->harga_tiket}}">
                    </div>
                  </div>
                  @if($errors->has('harga_tiket'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('harga_tiket')}} </div>
                  @endif
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">kursi tersedia</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="kursi_tersedia" value="{{$jadwal->kursi_tersedia}}">
                    </div>
                  </div>
                  @if($errors->has('kursi_tersedia'))
                    <div class="alert alert-danger" role="alert"> {{$errors->first('kursi_tersedia')}} </div>
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
<script>
  $(document).ready(function(){
    var id;
    $('#kota_asal').change(function(){
      id = $(this).val();
      $("#kota_tujuan option[value='"+id+"']").each(function() {
          $("#kota_tujuan option").prop('disabled', false);
          $(this).prop('disabled', 'disabled');
      });
    });
  });
</script>
<script type="text/javascript">
    
    var rupiahB = document.getElementById('harga_tiket');
    rupiahB.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiahB() untuk mengubah angka yang di ketik menjadi format angka
      rupiahB.value = formatRupiahB(this.value, '');
    });
 
    /* Fungsi formatRupiahB */
    function formatRupiahB(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiahB        = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
 
      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiahB += separator + ribuan.join('.');
      }
 
      rupiahB = split[1] != undefined ? rupiahB + ',' + split[1] : rupiahB;
      return prefix == undefined ? rupiahB : (rupiahB ? '' + rupiahB : '');
    }

  </script>
@endsection