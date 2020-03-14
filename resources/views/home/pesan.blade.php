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
                                    <h3>Customer Data</h3>
                                    <p>Input Customer Data Please!</p>
                                    <form>
                                            
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Username"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input type="email" class="form-control" placeholder="Email"  required/>
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Telephone"  required/>
                                             <span><i class="fa fa-phone"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Address"  required/>
                                             <span><i class="fa fa-address-card"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Passenger 1"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Passenger 2"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
                                        
                                        <!-- <button class="btn btn-orange btn-block">Submit</button> -->
                                        <a href="/bayar" class="btn btn-orange btn-block">Submit</a>
                                    </form>
                                </div><!-- end custom-form -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end registration -->
        </section><!-- end innerpage-wrapper -->
@endsection
