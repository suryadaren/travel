@extends('email.layout')

@section('title', $subject)

@section('content')
	
<table width="100%" style="font-size:12px;" cellspacing="0">

                    <!-- Email Body -->
    <tr>
        <td class="body" width="100%" cellpadding="0" cellspacing="0" style="font-family: Arial, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; border-bottom: 1px solid #EDEFF2; border-top: 1px solid #EDEFF2; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family: Arial, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; margin: 0 auto; padding: 0; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
                <!-- Body content -->
                <tr>
                    <td class="content-cell" style="font-family: Arial, Helvetica, sans-serif; box-sizing: border-box; padding: 35px">
                        <p style="font-family: Arial, Helvetica, sans-serif; box-sizing: border-box; color: #242729; font-size: 14px; line-height: 1.5em; margin-top: 0; text-align: left;">
                            Hi Operator<br /><br />
                            Pemesanan tiket baru oleh customer untuk data di bawah ini, silahkan konfirmasi pembayaran di sistem jika telah diterima. 
                            <br /><br />
                            <p>Data Pemesanan</p>
                            <table>
                                <tr>
                                    <td>Kode Transaksi</td>
                                    <td>: {{$pemesanan->id}}</td>
                                </tr>
                                <tr>
                                    <td>Kota Asal</td>
                                    <td> : {{$pemesanan->jadwal->kota_asal->nama}}</td>
                                </tr>
                                <tr>
                                    <td>Kota Tujuan</td>
                                    <td> : {{$pemesanan->jadwal->kota_tujuan->nama}}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td> : {{$pemesanan->jadwal->tanggal_berangkat}} {{$pemesanan->jadwal->jam_berangkat}}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Penumpang</td>
                                    <td> : {{$pemesanan->jumlah_penumpang}} orang</td>
                                </tr>
                            </table>
                            <br>
                            <p>Data Pembayaran</p>
                            <table>
                                <tr>
                                    <td>Nama Bank</td>
                                    <td>: {{$pemesanan->nama_bank}}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Rekening</td>
                                    <td> : {{$pemesanan->nomor_rekening}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Pemilik</td>
                                    <td> : {{$pemesanan->nama_pemilik}}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah pembayaran</td>
                                    <td> : Rp. {{$pemesanan->harga}},-</td>
                                </tr>
                            </table>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
@stop