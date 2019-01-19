<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminui-v1.0.bittyfox.com/default/dark-grey/lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jun 2017 10:50:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UWAMIMA DASHBOARD</title>
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
    <link href="{{ asset('assets/css/buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/page-header.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark-grey.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.media.css') }}" rel="stylesheet">
    
</head>
<body class="login">
    <div class="logo">
        <a href="index.html"> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </a>
    </div>
    <div class="middle-box text-center loginscreen ">
        <div class="widgets-container">
            <div class="bottom20"> <img alt="image" class="img-circle circle-border" src="{{ url('assets/images/user.jpg') }}"> </div>
            <h3> {{ Auth::user()->name }} </h3>
            <p>Ooops We are Sorry That Your Account is Not Activated Please Be Patient as Our Team is Working on </p>
            <form class="top15" action="http://adminui-v1.0.bittyfox.com/default/dark-grey/index.html">
                <div class="form-group">
                  <h2>You will be Activated Soon</h2>
                </div>
            
            <button class="btn yellow btn-block btn-outline sbold uppercase"> <a href="{{ url('/') }}">Go To HomePage</a> </button>
              
                 {!! Form::open(['method'=>'POST','route' => 'logout']) !!} 
            
                 {!! Form::submit('LOGOUT ', ['class'=>'btn btn-primary']) !!}
                 {!! Form::close() !!}


            <div> <strong>Copyright</strong> UWAMIMA ORGANISATION &copy; @php
                       echo  date("Y") 
                    @endphp </div>
                </div>
        </div>

    </div>
</body>



</html>