@extends('home.layout')

@section('content')

        <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-2">
            
            <div class="flexslider slider" id="slider-2">
                <ul class="slides">
                    
                    <li class="item-1 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(/home/images/flight-slider-1.jpg) 50% 15%; background-size:cover;height:100%;">
                        <div class="meta">         
                            <div class="container">
                                <h2>Best Booking Website</h2>
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    
                    <li class="item-2 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(/home/images/flight-slider-1.jpg) 50% 15%; background-size:cover;height:100%;">
                        <div class=" meta">         
                            <div class="container">
                                <h2>Best Booking Website</h2>
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-2 -->
                   
                </ul>
            </div><!-- end slider -->
            
            <div class="search-tabs" id="search-tabs-2" style="opacity: .7">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#flights" data-toggle="tab"><span><i class="fa fa-bus"></i></span><span class="st-text">Booking Ticket</span></a></li>
                            </ul>
        
                            <div class="tab-content">

                                <div id="flights" class="tab-pane in active">
                                    <form>
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                                <div class="row">
                                                
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="From" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="To" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                              
                                            </div><!-- end columns -->
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                                <div class="row">
                                                
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1" placeholder="Date" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>People</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
        
                                                </div><!-- end row -->                              
                                            </div><!-- end columns -->
                                            
                                            
                                            <div class=" text-right col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <a href="/jadwal" class="btn btn-orange">Search</a>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end flights -->
                                
                            </div><!-- end tab-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-tabs -->
            
        </section><!-- end flexslider-container -->
@endsection
