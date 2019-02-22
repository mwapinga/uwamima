<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>UWAMIMA ORGANISATION</title>

<!-- Stylesheets -->
<link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">
<link rel="icon" href="{{ asset('asset/images/favicon.png') }}" type="image/x-icon">

    <link href="{{ asset('assets1/css/vendors.css') }}" rel="stylesheet">
    <!-- Main CSS -->
    <link href="{{ asset('assets1/css/style.css') }}" rel="stylesheet">

</head>

<!-- page wrapper -->
<body class="page-wrapper">

    <!-- .preloader -->
    <div class="preloader"></div>


    <!-- main header area -->
    <header class="main-header header-style-two">
        <!-- main-menu -->
        <div class="theme_menu stricky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="logo-box">
                            <a href="{{ url('/') }}"><figure><img src="{{ asset('asset/images/home/logo1.png') }}" alt=""></figure></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="menu-area">
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li><a href="{{ url('About') }}">About Us</a>
                                        </li>
                                        <li><a href="{{ url('/blg') }}">Our Blog </li>
                                      {{--  <li><a href="{{ url('/shop') }}">Shop</a>
                                            </li> --}}
                                        <li><a href="{{ url('/contact') }}">Contact Us</a>
                                        </li>
                                      {{--   <li><a href="{{ Url('/reportz') }}">ORG Report</a>
                                        </li> --}}
                                    </ul>


                                    <!-- mobile menu -->
                                    <ul class="mobile-menu clearfix">
                                        <li ><a href="{{ url('/') }}">Home</a>

                                        </li>
                                        <li><a href="{{ url('About Us') }}">About Us</a>
                                        </li>
                                        <li><a href="{{ url('/blg') }}">Our Blog</a>
                                        </li>
                                        {{-- <li><a href="{{ url('/shop') }}">Shop</a>
                                        </li> --}}
                                        <li><a href="{{ Url('/contact') }}">Contact Us</a>
                                        </li>
                                        {{-- <li><a href="{{ Url('/reportz') }}">ORG Report</a>
                                        </li> --}}
                                    </ul>
                                </div> 
                            </nav>
                        </div>
                    </div>
                </div>
           </div>
        </div>

    </header>




            @yield('content')
         <footer class="main-footer-area footer-style-two">
        <div class="container">
            <div class="footer-top centred sec-pad">
           {{--      <div class="footer-logo"><a href="{{ url('/') }}"><figure><img src="{{ asset('asset/images/footer/footer-logo2.png') }}" alt=""></figure></a></div> --}}
                <ul class="footer-menu">
                    <li class="fa fa-home"><a href="{{ url('/') }}" class="active">Home</a></li>
                    <li><a href="{{ url('About') }}">About Us</a></li>
                    <li><a href="{{ url('/blg') }}">Our Blog</a></li>
                    {{-- <li><a href="{{ url('/shop') }}">Shop</a></li> --}}
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                   {{--  <li><a href="{{ Url('/reportz') }}">ORG Report</a></li> --}}

                  {{-- <li class="fa fa-user" > <a href="{{ route('login') }}">Admin Login</a></li> --}}
                </ul>
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="copyright">Copyright © @php echo  date("Y") @endphp  || UWAMIMA Developed By JOHTECH
                johtech255@gmail.com  <br> All Rights Reserved</div>
        </div>
    </footer>
    <!-- main-footer-area end -->



<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>


<!--jquery js -->

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c639ffdedcd5975"></script>
<script type="text/javascript" src="{{ asset('asset/js/jquery-2.1.4.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('asset/js/wow.js') }}"></script>
<script src="{{ asset('asset/js/validation.js') }}"></script>
<script src="{{ asset('asset/js/isotope.js') }}"></script>
<script src="{{ asset('asset/js/jquery.fancybox.pack.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('asset/js/html5lightbox/html5lightbox.js') }}"></script>
<script src="{{ asset('asset/js/jquery.countdown.js') }}"></script>

<script src="{{ asset('asset/js/script.js') }}"></script>

     {{-- shop js --}}
 <script src="{{ asset('assets1/js/vendors.js') }}"></script>
    
    <!-- Active JS -->
    <script src="{{ asset('assets1/js/active.js') }}"></script>

<!-- End of .page_wrapper -->
</body>

</html>
