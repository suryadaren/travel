@extends('home.layout')

@section('title', ' Bayar')

@section('content')

        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        
                            <div class="dashboard-heading">
                                <p>Hi Customer, This is your detail reservations!</p>
                                <p>Please Input bank account detail and transfer your payment!</p>
                            </div><!-- end dashboard-heading -->

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-side">
                            <div class="traveler-info">
                                    <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Booking Information :</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Username</td>
                                                    <td>Bimo</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>bimo@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Telephone</td>
                                                    <td>087654567654</td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td>Jl. sooehat, malang jatim</td>
                                                </tr>
                                                <tr>
                                                    <td>Passenger 1</td>
                                                    <td>cristiano ronaldo</td>
                                                </tr>
                                                <tr>
                                                    <td>Passenger 2</td>
                                                    <td>David Beckham</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- end table-responsive -->
                            </div><!-- end traveler-info -->
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-side">

                            <div class="traveler-info">
                                    <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Please Transfer To :</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>Tour travel id</td>
                                                </tr>
                                                <tr>
                                                    <td>Account Number</td>
                                                    <td>12312312312</td>
                                                </tr>
                                                <tr>
                                                    <td>Bank</td>
                                                    <td>MANDIRI</td>
                                                </tr>
                                                <tr>
                                                    <td>Subtotal</td>
                                                    <td>Rp. 250.000,-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- end table-responsive -->
                            </div><!-- end traveler-info -->

                            <div class="traveler-info">
                                    <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Please Input Your Bank's Detail :</h3>
                                    <div class="table-responsive">
                                    <div class="custom-form custom-form-fields">
                                        <form>
                                                
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                 <input type="text" class="form-control" placeholder="Name"  required/>
                                            </div>
            
                                            <div class="form-group">
                                                <label for="">Account Number</label>
                                                 <input type="text" class="form-control" placeholder="Account Number"  required/>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Bank</label>
                                                 <input type="text" class="form-control" placeholder="Bank"  required/>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Transfer Photo</label>
                                                 <input type="file" class="form-control" placeholder="Bank"  required/>
                                            </div>
                                            <a class="btn btn-orange btn-block" href="/thankyou">Confirm</a>
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
