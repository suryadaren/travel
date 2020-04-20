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
                            Hi.<br /><br />
                            Mohon konfirmasi email Anda 
                            <br /><br />
                            Terimakasih telah bergabung dengan kami. Untuk memastikan bahwa ini adalah email Anda, mohon verifikasi email Anda melalui tombol dibawah ini.
                        </p>
                        <div style="display:block;padding:20px 0;text-align:center;">
                            <a href="{{$link}}" style="font-family: Arial, Helvetica, sans-serif; box-sizing: border-box;padding:12px 32px;color:#FFFFFF;text-decoration:none;background-color:#304FFE;border-radius:3px;">Verifikasi Email</a>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
@stop