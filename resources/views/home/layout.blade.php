<!doctype html>
<html lang="en">
    <head>
        <title>Travel Agency | Home @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="/home/images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href="/home/css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="/home/css/font-awesome.min.css">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="/home/css/style.css">
        <link rel="stylesheet" id="cpswitch" href="/home/css/orange.css">
        <link rel="stylesheet" href="/home/css/responsive.css">
        
        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="/home/css/flexslider.css" type="text/css" />
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="/home/css/datepicker.css">
        
        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="/home/css/magnific-popup.css">

        @yield('css')
    </head>
    
    
    <body id="flight-homepage">
    
        <!--====== LOADER =====-->
        <div class="loader"></div>
        
        
        

        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <a href="#" class="navbar-brand"><span><i class="fa fa-bus"></i>Travel</span> Agency</a>
                </div><!-- end navbar-header -->
                
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>			
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">My Pages</a>			
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</a>			
                        </li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->

		<div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
                <h2 id="web-name"><span><i class="fa fa-bus"></i></span>Travel Agency</h2>

                <div id="main-menu">
                	<div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div><!-- end close-btn -->
                    
                    <div class="list-group panel">
                    
                        <a href="#home-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home</a>
                        
                        <a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>My Pages</a>
                        
                        <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-user link-icon"></i></span>Login</a>
                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->
        
        @yield('content')
        
        
        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-w ftr-heading-mgn-2">

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                            <p>© 2020 <a href="#">TravelAgency</a>. All rights reserved.</p>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                            <ul class="list-unstyled list-inline">
                            	<li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
        
        
        <!-- Page Scripts Starts -->
        <script src="/home/js/jquery.min.js"></script>
        <script src="/home/js/bootstrap.min.js"></script>
        <script src="/home/js/jquery.flexslider.js"></script>
        <script src="/home/js/bootstrap-datepicker.js"></script>
        <script src="/home/js/custom-navigation.js"></script>
        <script src="/home/js/custom-flex.js"></script>
        <script src="/home/js/custom-date-picker.js"></script>
        <!-- Page Scripts Ends -->

        @yield('js')
        
    </body>
</html>