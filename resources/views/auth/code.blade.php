<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminui-v1.0.bittyfox.com/default/dark-grey/lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jun 2017 10:50:00 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login UWAMIMA DASHBOARD</title>
  <!-- Bootstrap -->
  <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- slimscroll -->
  <link href="{{ url('assets/css/jquery.slimscroll.css') }}" rel="stylesheet">
  <!-- Fontes -->
  <link href="{{ url('assets/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/simple-line-icons.css') }}" rel="stylesheet">
  <!-- all buttons css -->
  <link href="{{ url('assets/css/buttons.css') }}" rel="stylesheet">
  <!-- animate css -->
<link href="{{ url('assets/css/animate.css') }}" rel="stylesheet">
<!-- top nev css -->
<link href="{{ url('assets/css/page-header.css') }}" rel="stylesheet">
<!-- adminui main css -->
  <link href="{{ url('assets/css/main.css') }}" rel="stylesheet">
  <!-- dark grey theme css -->  
  <link href="{{ url('assets/css/dark-grey.css') }}" rel="stylesheet">
  <!-- media css for responsive  -->
  <link href="{{ url('assets/css/main.media.css') }}" rel="stylesheet">
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <!--[if lt IE 9]> <script src="dist/html5shiv.js"></script> <![endif]-->
</head>

<body class="login">
  <div class="logo">
    <a href="#"> <img src="{{ url('assets/images/logo.png') }}" alt=""> </a>
  </div>
  <div class="middle-box text-center loginscreen ">
    <div class="widgets-container">
      <div class="bottom20"> <img alt="image" class="img-circle circle-border" src="{{ url('assets/images/user.jpg') }}"> </div>
          <p>No Account</p>
          <h2>Welcome To UWAMIMA</h2>
            <h4>Please Enter Email and Code <br ><br>That We sent to your email</h4>
          {!! Form::open(['method'=>'POST','action'=> 'hashkeyController@code']) !!} 
                <div class="form-group">
                      <div class="form-group">
    <input id="email" type="email"  placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  required autofocus >               
                                @if ($errors->has('email'))
                                <div class="alert alert-danger" >
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                </div>  
                                @endif             </div>
                <div class="form-group">
                               <input id="code"  placeholder="Enter a Code" type="password" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}"  name="code" required>
                               
                                @if ($errors->has('code'))
                                <div class="alert alert-danger" >
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                    </div> 
                                @endif              
                 </div>
                  {{-- 
                       <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        
                  <button class="btn aqua block full-width bottom15" type="submit">Submit</button>
                  {!! Form::close() !!}
                   <p class="text-muted text-center"><small>Already have an account?</small></p>
                   <a href="{{ url('/login') }}" class="btn btn-sm btn-white btn-block">Login</a>
                </form>
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

