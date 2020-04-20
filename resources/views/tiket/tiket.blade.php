<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

  <table style="width: 100%">
    <tr>
      <td><strong>Keberangkatan</strong></td>
      <td><strong>Data Pemesan</strong></td>
      <td><b>Kode Boking : </b>{{$pemesanan->id}}</td>
    </tr>
    <tr>
      <td>{{$pemesanan->jadwal->kota_asal->nama}} - {{$pemesanan->jadwal->kota_tujuan->nama}}</td>
      <td>{{$pemesanan->customer->nama}}</td>
      <td><b>Tanggal pemesanan : </b> {{$pemesanan->created_at}}</td>
    </tr>
    <tr>
      <td>{{$pemesanan->jadwal->tanggal_berangkat}} | {{$pemesanan->jadwal->jam_berangkat}}</td>
      <td>Email : {{$pemesanan->customer->email}}</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Hp : {{$pemesanan->customer->nomor_telepon}}</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td><h5><strong>Data Penumpang</strong></h5></td>
      <td></td>
    </tr>
    <tr>
      <td>
        
      </td>
      <td>
        <table>
          <thead>
          <tr>
            <td><strong>Nama</strong></td>
            <td><strong>Nomor KTP</strong></td>
            <td><strong>Jenis Kelamin</strong></td>
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
      </td>
      <td>
        
      </td>
    </tr>
  </table>
</body>
</html>
