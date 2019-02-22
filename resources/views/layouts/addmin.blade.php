
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UWAMIMA-Admin</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">

    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">

    <!-- GOOGLE FONT -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link href=" {{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700') }} " rel="stylesheet">
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
    <script src="{{ url('https://code.jquery.com/jquery-1.12.4.js') }}"></script>
     <script src="{{ url('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('ast/css/font-awesome.min.css') }}">

    <link href="{{ asset('asst/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('asst/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('asst/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('asst/css/style-mob.css') }}" rel="stylesheet" />

</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">

              <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 mob-hide">
                    <a href="{{ url('/addmin') }}"><h2></h2></a>
            </div>
            <!--== NOTIFICATION ==-->
<div class="col-md-2 tab-hide">
       <div class="top-not-cen">

          </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
         <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'>{{ Auth::user()->name  }}
             @if (Auth::user()->photo)
             <img src="{{ asset('assets/images/'.Auth::user()->photo->photo_tag ) }}" alt="Photo">
            @else
            <img src="{{ asset('assets/images/user.jpg' ) }}" alt="No Photo">
             @endif


                   <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
<ul id='top-menu' class='dropdown-content top-menu-sty'>
<li><a href="{{ url('user/'.Auth::user()->id) }}" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i> Profile</a>
</li>
<li class="divider"></li>
<li>

           <a class="ho-dr-con-last waves-effect" class="fa fa-sign-in" aria-hidden="true" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
</li>
</ul>
              </div>
            </div>
          </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">

                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="{{ url('/uwadmin') }}" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i>ADMIN HOME</a>
                        </li>
                          <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Blog</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ url('blog') }}">All Posts</a>
                                    </li>
                                    <li><a href="{{ url('blog/create') }}">Create New Post</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{--  <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ url('event') }}">All Events</a>
                                    </li>
                                    <li><a href="{{ url('event/create') }}">Create New Events</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Slider</a>
                         <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ url('slide') }}">All Slide</a>
                                    </li>
                                    <li><a href="{{ url('slide/create') }}">Add New Slides</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{ url('portfolio') }}">Portifolio Panel</a></li>
                        <li><a href="{{ url('rep') }}">Org.. Report</a></li>
                        <li><a href="{{ url('testimonial') }}">Testimonnial Panel</a></li>
                        <li><a href="{{ url('/chairm') }}">Chair's Message </a></li>
                        <li><a href="{{ url('/commentz') }}">Manage Comments</a></li>   


                            <br ><br ><br ><br ><br ><br ><br ><br ><br ><br >
                            <br ><br ><br ><br ><br ><br ><br ><br >

                </div>
            </div>

            <div class="sb2-2">
                <div class="sb2-2-2">
                </div>

                  @yield('content')

    <script src="{{ asset('asst/js/main.min.js') }}"></script>
    <script src="{{ asset('asst/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asst/js/materialize.min.js') }}"></script>
    <script src="{{ asset('asst/js/custom.js') }}"></script>
     <script src="{{ asset('asst/js/personal.js') }}"></script>

</body>

</html>
