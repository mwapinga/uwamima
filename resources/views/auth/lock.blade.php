<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminui-v1.0.bittyfox.com/default/dark-grey/lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jun 2017 10:50:00 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> key**UWAMIMA DASHBOARD</title>
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- slimscroll -->
  <link href="assets/css/jquery.slimscroll.css" rel="stylesheet">
  <!-- Fontes -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/simple-line-icons.css" rel="stylesheet">
  <!-- all buttons css -->
  <link href="assets/css/buttons.css" rel="stylesheet">
  <!-- animate css -->
<link href="assets/css/animate.css" rel="stylesheet">
<!-- top nev css -->
<link href="assets/css/page-header.css" rel="stylesheet">
<!-- adminui main css -->
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- dark grey theme css -->  
  <link href="assets/css/dark-grey.css" rel="stylesheet">
  <!-- media css for responsive  -->
  <link href="assets/css/main.media.css" rel="stylesheet">
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <!--[if lt IE 9]> <script src="dist/html5shiv.js"></script> <![endif]-->
</head>

<body class="login">
  <div class="logo">
    <a href="#"> <img src='assets/images/logo.png' alt=""> </a>
  </div>
  <div class="middle-box text-center loginscreen ">
    <div class="widgets-container">
      <div class="bottom20"> <img alt="image" class="img-circle circle-border" src="assets/images/user.jpg"> </div>
      <h3> No  Account </h3>
       @if (\Session::has('error'))
           <div class="alert alert-danger">
          <p>{{ \Session::get('error') }}</p>
          </div><br />
        @endif
      <p>Please Enter Your Email And the Key</p>
      <p>To Get Started</p>
            {!! Form::open(['method'=>'POST','action'=> 'hashkeyController@store']) !!}
                      <div class="form-group">
          <input id="email" type="email"  placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"     required autofocus >               
                                @if ($errors->has('email'))
                                <div class="alert alert-danger" >
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                </div>  
                                @endif             </div>
                <div class="form-group">
                               <input id="key"  placeholder="Key   *****************" type="text" class="form-control{{ $errors->has('key') ? ' is-invalid' : '' }}"  name="key" required>
                               
                                @if ($errors->has('key'))
                                <div class="alert alert-danger" >
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('key') }}</strong>
                                    </span>
                                    </div> 
                                @endif 
               </div>
                <button class="btn aqua block full-width bottom15" type="submit">Unlock Access</button>
                <p class="text-muted text-center"><small>Arleady Have an account?</small></p>
                <a href="{{ url('/login') }}" class="btn btn-sm btn-white btn-block">Login </a>
                {!! Form::close() !!}
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
</body>