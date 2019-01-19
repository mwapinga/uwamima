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
                            <a href="index-2.html"><figure><img src="{{ asset('asset/images/home/logo1.png') }}" alt=""></figure></a>
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
                                        <li><a href="about.html">About</a>
                                        </li>
                                        <li><a href="service.html">Services</a>
                                        </li>
                                        <li><a href="gallery.html">Gallery</a>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="team-page.html">Our Team</a></li>
                                                <li><a href="error-page.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>


                                    <!-- mobile menu -->
                                    <ul class="mobile-menu clearfix">
                                        <li class="current dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Home Page One</a></li>
                                                <li><a href="index-two.html">Home Page Two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a>
                                        </li>
                                        <li><a href="service.html">Services</a>
                                        </li>
                                        <li><a href="gallery.html">Gallery</a>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="team-page.html">Our Team</a></li>
                                                <li><a href="error-page.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <ul class="header-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
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
                    <li><a href="#">About</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Us</a></li>
                  <li class="fa fa-user" > <a href="{{ route('login') }}">Admin Login</a></li>
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
            <div class="copyright">Copyright © 2018 <a href="#">Benxi</a>. All Rights Reserved</div>
        </div>
    </footer>
    <!-- main-footer-area end -->


    
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>


<!--jquery js -->


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

<!-- End of .page_wrapper -->
</body>

<!-- Mirrored from azim.commonsupport.com/Benxi/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 05:48:08 GMT -->
</html>
