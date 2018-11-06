<!DOCTYPE html>
<html>
<head>
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
    <link href="{{ asset('assets/css/adminUIdemo.css') }}" rel="stylesheet">
    <title>Uwamima Dashboard Login</title>
</head>



    <body class="login">
         <div class="middle-box text-center loginscreen ">
        <div class="widgets-container">
            <h2>Welcome</h2>
            <p>UWAMIMA CONROL MANAGEMENT SYSTEM DASHBOARD </p>
            <p>Please Login </p>
           <form method="POST" action="{{ route('login') }}">
                        @csrf
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
                               <input id="password"  placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" required>
                               
                                @if ($errors->has('password'))
                                <div class="alert alert-danger" >
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    </div> 
                                @endif               </div>
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
                  <button class="btn aqua block full-width bottom15" type="submit">Login</button>
                <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a href="{{ url('/register') }}" class="btn btn-sm btn-white btn-block">Create an account</a>
                </form>
                <p class=" copyR"> <small>UWAMIMA All Rights Reserved &copy; 2018</small> </p>
        </div>
    </div>

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

</body>
</html>

