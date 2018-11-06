<!DOCTYPE html>
<html>
<head>
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
    <title>Ebenezer Seminary Dashboard Reset password</title>
</head>
<body  style="background-color: #174545;" > 
   <section>              
      <div>
            <div class="log-in-pop">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <h1 style="padding: center; text-decoration-color:white;"> RESET PASSWORD</h1>
                <div class="log-in-pop-left">
                    <ul>
                        <h3>Welcome </h3>
                      {{--   <li><a href="{{ url('login/facebook') }}"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="{{ url('login/google') }}"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="{{ url('login/twitter') }}"><i class="fa fa-twitter"></i> Twitter</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <h4>Forgot password</h4>
                    <p>Lets us know your email so we can restore your account</p>
<form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf
                        <div>
                            <div class="input-field s12">
<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" class="validate" name="email" value="{{ old('email') }}" required>
                          @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                          @endif
                                <label>Email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Reset Password" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
        <div class="input-field s12"> <a href="{{ url('/login') }}" ">Are you a already member ? Login</a> | <a href="{{ url('/register') }}">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</body>
</html>
        <script src="{{ asset('asst/js/main.min.js') }}"></script>
    <script src="{{ asset('asst/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asst/js/materialize.min.js') }}"></script>
    <script src="{{ asset('asst/js/custom.js') }}"></script>
     <script src="{{ asset('asst/js/personal.js') }}"></script>
