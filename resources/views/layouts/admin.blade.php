
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UWAMIMA ADMIN DASHBOARD</title>
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- slimscroll -->
    <link href="{{ asset('assets/css/jquery.slimscroll.css') }}" rel="stylesheet">
    <!-- project -->
    <link href="{{ asset('assets/css/project.css') }}" rel="stylesheet">
    <!-- flotCart css -->
    <link href="{{ asset('assets/css/flotCart.css') }}" rel="stylesheet">
    <!-- jvectormap -->
    <link href="{{ asset('assets/css/jqvmap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fixedHeader.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/ameffectsanimation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/page-header.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark-grey.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.media.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/adminUIdemo.css') }}" rel="stylesheet">s
    <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}" />    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ url('//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
    <script src="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}"></script> 

</head>

<body class="page-header-fixed ">
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="{{ url('/uwadmin') }}"> <img class="logo-default" alt="logo" src="{{ asset('assets/images/logo.png') }}"> </a>
            </div>
            <div class="library-menu"> <span class="one">-</span> <span class="two">-</span> <span class="three">-</span> </div><div class="top-nev-mobile-togal"><i class="glyphicon glyphicon-cog"></i></div>
            <!-- END LOGO -->
            <div class="top-menu">
<!--  TOP NAVIGATION MENU -->
                <div class="hor-menu  hor-menu-light hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <li class="mega-menu-dropdown mega-menu-full hover-initialized"> <a  href="{{ url('/uwadmin') }}"><h3>UWAMIMA CONROL MANAGEMENT SYSTEM DASHBOARD</h3> </a>
                </div>
                <!--  TOP NAVIGATION MENU -->
               
                <ul class="nav navbar-nav pull-right">
                   
                   
                    <!-- START USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user">
                        <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                         @if (Auth::user()->photo)
                              <img src="{{ asset('assets/images/'.Auth::user()->photo->photo_tag ) }}" alt="Photo"> 
                         @else 
                          <img src="{{ asset('assets/images/user.jpg' ) }}" alt="No Photo"> 
                         @endif
                        
                         <span class="username username-hide-on-mobile">  {{ Auth::user()->name }} 
                         </span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                            <a href="{{ URL::to('uwadminuser/'.Auth::user()->id )}}""> <i class="icon-user"></i> My Profile </a>

                            </li>
                            <li>

             <a class="ho-dr-con-last waves-effect" class="fa fa-sign-in" aria-hidden="true" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Log Out') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>



    <div class="clearfix"> </div>
    <div class="page-container">
        <!-- Start page sidebar wrapper -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar">
                <ul class="page-sidebar-menu  page-header-fixed ">
                    <br>
                    <li class="heading">
                        <h3 class="uppercase">Admin</h3>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="icon-user"></i> <span class="title">Manage User</span> <span class="arrow"></span> </a>
                        <ul class="sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ url('permission') }}">All User</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('permission') }}">Manage Permission</a></li>
                        </ul>
                    </li>

                   <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-long-arrow-left"></i> <span class="title">Manage Imports</span> <span class="arrow"></span> </a>
                        <ul class="sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ url('uwadminimport') }}">All Imports</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('addmore/create') }}">Add Import</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('report') }}">Imports Reports</a></li>
                        </ul>
                    </li>
                   <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-long-arrow-right"></i> <span class="title">Manage Exports</span> <span class="arrow"></span> </a>
                        <ul class="sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ url('uwadminexport') }}">All Exports</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/addmore') }}">Add Export</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('report/create') }}">Exports Reports</a></li>
                        </ul>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-exchange"></i> <span class="title">Manage Sales</span> <span class="arrow"></span> </a>
                        <ul class="sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ url('uwadminsale') }}">All Sales</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/sale') }}">Add Sale</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/salerep') }}">Sales Reports</a></li>
                        </ul>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-align-center"></i> <span class="title">Manage Orders</span> <span class="arrow"></span> </a>
                        <ul class="sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ url('uwadminorder') }}">All Oders</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('uwadminorder/create') }}">Add Oder</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('report/orders') }}">Oders Reports</a></li>
                        </ul>
                      </li>
                       <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-clone"></i> <span class="title">Manage Block</span> <span class="arrow"></span> </a>
                        <ul class="sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ url('uwablock') }}">All Blocks</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('uwablock/create') }}">Add Block</a></li>
                        </ul>
                      </li>
                <li class="heading">
                        <h3 class="uppercase">Layouts</h3>
                 </li>
                <li class="nav-item">
                    <a class="nav-link nav-toggle" href="javascript:;"> <i class="icon-layers"></i> <span class="title"> Slider</span> <span class="arrow"></span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-toggle" href="javascript:;"> <i class="icon-layers"></i> <span class="title"> Portfolio</span> <span class="arrow"></span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-toggle" href="javascript:;"> <i class="icon-layers"></i> <span class="title"> Testamony</span> <span class="arrow"></span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-toggle" href="javascript:;"> <i class="icon-layers"></i> <span class="title"> Orders</span> <span class="arrow"></span> </a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="icon-paper-plane"></i> <span class="title">Horizontal Menu</span> <span class="arrow"></span> </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="layout_menu_dark.html"> <span class="title">Dark Horizontal Menu </span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="layout_menu_light.html"> <span class="title">Light Horizontal Menu </span> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">Pages</h3>
                    </li>
                    <li> <a class="nav-link nav-toggle" href="javascript:;"><i class="fa fa-envelope"></i> <span class="title">Mailbox </span><span class="label label-warning pull-right">16/70</span></a>
                        <ul class="sub-menu">
                            <li class="nav-item"><a class="nav-link" href="mailbox.html">Inbox</a></li>
                            <li class="nav-item"><a class="nav-link" href="mail_detail.html">Email view</a></li>
                            <li class="nav-item"><a class="nav-link" href="mail_compose.html">Compose email</a></li>
                            <li class="nav-item"><a class="nav-link" href="email_template.html">Email templates</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calendar.html"> <i class="icon-calendar"></i> <span class="title">Calendar</span> </a>
                    </li>
               
                    <li class="nav-item">
                        <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-sitemap"></i> <span class="title">Multi Level Menu</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                            <li class="nav-item"> <a class="nav-link nav-toggle" href="javascript:;"> Item 1 <span class="arrow"></span> </a>
                                <ul class="sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="javascript:;"> Arrow Toggle <span class="arrow nav-toggle"></span> </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item"> <a class="nav-link" href="#"> Sample Link 1</a> </li>
                                            <li class="nav-item"> <a class="nav-link" href="#"> Sample Link 1</a> </li>
                                            <li class="nav-item"> <a class="nav-link" href="#"> Sample Link 1</a> </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> Sample Link 1</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> Sample Link 2</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> Sample Link 3</a> </li>
                                </ul>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="javascript:;"> Arrow Toggle <span class="arrow nav-toggle"></span> </a>
                                <ul class="sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="#"> Sample Link 1</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> Sample Link 1</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> Sample Link 1</a> </li>
                                </ul>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="#"> Item 3 </a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

                  @yield('content')
                <!-- start footer -->
               <div class="footer" style="position: fixed;">
                    <div class="pull-right">
                        <ul class="list-inline">
                            
                        </ul>
                    </div>
                    <div> <strong>Copyright</strong> UWAMIMA ORGANISATION &copy; @php
                       echo  date("Y") 
                    @endphp </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Go top -->
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    <!-- Go top -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/jasny-bootstrap.min.js') }}" charset="UTF-8"></script>

    <!--  morris Charts  -->
    <!-- dataTables-->
    <script type="text/javascript" src="{{asset('assets/js/vendor/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/dataTables.bootstrap.min.js') }}"></script>
    <!-- js for print and download -->
    <script type="text/javascript" src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/dataTables.fixedHeader.min.js') }}"></script>

    <script src="{{ asset('assets/js/vendor/chartJs/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard1.js') }}"></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{ asset('assets/js/vendor/jquery.slimscroll.js') }}"></script>
    <!-- pace js -->
    <script src="{{ asset('assets/js/vendor/pace/pace.min.js') }}"></script>
    <!-- Sparkline -->
  <script src="{{ asset('assets/js/vendor/jquery.sparkline.min.js') }}"></script>
<!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

   <script src="{{ asset('assets/js/adminUIdemo.js') }}"></script>



<script>
        var dataSet = [
            ["Jordan Belfort", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800"],
["Naomi Lapaglia", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750"],
["Auckland Straight Line Host", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000"],
["Donnie Azoff", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060"],
["Mark Hanna", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700"],
["Jean-Jacques Saurel", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000"],
["Patrick Denham", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500"],
["Teresa Petrillo", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900"],
["Brad", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500"],
["Max Belfort", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600"],
["Manny Riskin", "Office Manager", "London", "3814", "2008/12/19", "$90,560"],
["Aunt Emma", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000"],
["Chantalle", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600"],
["Nicky 'Rugrat' Koskoff", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500"],
["Captain Ted Beecham", "Regional Director", "London", "1965", "2010/03/17", "$385,750"],
["Leah Belfort", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500"],
["Toby Welch", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000"],
["Chester Ming", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500"],
["Alden 'Sea Otter' Kupferberg", "Software Engineer", "London", "2558", "2012/10/13", "$132,000"],
["Janet", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500"],
["Robbie ", "Development Lead", "New York", "1937", "2011/09/03", "$345,000"],
["Steve Madden", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000"],
["Kimmie Belzer", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450"],
["Hildy Azoff", "Sales Assistant", "Sidney", "3023", "2010/09/20", "$85,600"],
["Lucas Solomon", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000"],
["Honorary Samantha Stogel", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575"],
["Nolan Drager", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650"],
["Jenette Caldwell", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850"],
["Jennifer Acosta", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000"],
["Jennifer Chang", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000"],
["Jessica E. Summerville", "Integration Specialist", "Sidney", "2769", "2011/06/02", "$95,400"],
["Jonas Alexander", "Developer", "London", "6832", "2009/10/22", "$114,500"],
["Lael Greer", "Technical Author", "London", "3606", "2011/05/07", "$145,000"],
["Martena Mccray", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500"],
["Michael Bruce", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050"],
["Michael Silva", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675"]

        ];
        $(document).ready(function() {
            // Flexible table

            $('#example').DataTable();

            // Scroll Horizontal example

            var table = $('#example2').DataTable( {
                    responsive: true,
                    paging: false,
                     fixedHeader: {
                        headerOffset: 40
                    }
                } );
 
 
            // Check Click row

            var table = $('#example3').DataTable();
            $('#example3 tbody').on('click', 'tr', function() {
                var data = table.row(this).data();
                alert('You clicked on ' + data[0] + '\'s row');
            });


            // Javascript sourced data table

             $('#example4').DataTable({
                data: dataSet,
                columns: [{
                    title: "No."
                }, {
                    title: "Owner"
                }, {
                    title: "Product"
                }, {
                    title: "Type"
                }, {
                    title: "Date."
                }, {
                    title: "Amount"
                }, {
                    title: "Car T No."
                }, {
                    title: "Driver Name"
                }, {
                    title: "In Time"
                }, {
                    title: "Out Time"
                }, {
                    title: "Edit Option"
                }]
            });
            //addRow 
            var t = $('#example5').DataTable();
            var counter = 1;

            $('#addRow').on('click', function() {
                t.row.add([
                    counter + '.1',
                    counter + '.2',
                    counter + '.3',
                    counter + '.4',
                    counter + '.5'
                ]).draw(false);

                counter++;
            });




            // Individual column searching

            // Setup - add a text input to each footer cell
            $('#example6 tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<input class="form-control dataSearch" type="text" placeholder="Search ' + title + '" />');
            });

            // DataTable
            var table = $('#example6').DataTable();

            // Apply the search
            table.columns().every(function() {
                var that = this;

                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });


            // Advanced
            $('#example7').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    text: 'copy',
                    extend: "copy",
                    className: 'btn dark btn-outline'
                }, {
                    text: 'csv',
                    extend: "csv",
                    className: 'btn aqua btn-outline'
                }, {
                    text: 'excel',
                    extend: "excel",
                    className: 'btn aqua btn-outline'
                }, {
                    text: 'pdf',
                    extend: "pdf",
                    className: 'btn yellow  btn-outline'
                }, {
                    text: 'print',
                    extend: "print",
                    className: 'btn purple  btn-outline'
                }]
            });



        });
    </script>

</body>
</html>
