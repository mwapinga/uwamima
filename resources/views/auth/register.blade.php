<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminui-v1.0.bittyfox.com/default/dark-grey/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jun 2017 10:48:46 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>UWAMIMA REGISTER</title>
<!-- Bootstrap -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- icheck -->
<link href="{{ asset('assets/css/skins/all.css') }}" rel="stylesheet">
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
<div class="middle-box text-center loginscreen   ">
  <div class="widgets-container">
    <h3>Register to UWAMIMA</h3>
    <p>Create Account</p>
      <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
      <div class="form-group">
        <input id="name" type="text" placeholder="*names both first and second" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  name="name" value="{{ old('name') }}" required autofocus>
        
        @if ($errors->has('name'))
         <div class="alert alert-danger" > 
           <span class="invalid-feedback" role="alert">
                <strong>{{ $errors-></strong>first('name') }}</strong>
            </span>
          </div>
        @endif
        
      </div>

      <div class="form-group">
        <input id="username" type="text" placeholder="Bussness Username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
        
              @if ($errors->has('username'))
              <div class="alert alert-danger" >
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('username') }}</strong>
                  </span>
              </div>        
               @endif
  
      </div>
      <div class="form-group">
                <p>*Gender</p>
                <div class="col-sm-14">
                  <select id="gender" name="gender" placeholder="*Gender" class="form-control bottom15{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="account">
                    <option value="1" > Male</option>
                    <option value="0">Female</option>
                  </select>
                </div>
                
                @if ($errors->has('gender'))
                <div class="alert alert-danger" >
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                </div>           
                @endif 
  
      </div>


     <div class="form-group">
                         <p>*Born Date (mm/dd/yy)</p> 
                          {!! Form::date('date',null , ['class'=>'form-control','required']) !!}  
                                            
                         @if($errors->has('date'))
                           <div class="alert alert-danger" >
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('date') }}</strong>
                            </span>
                           </div>                     
                         @endif 
              

      </div>

      <div class="form-group">
            <input id="email" placeholder="*Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            
         @if ($errors->has('email'))
                 <div class="alert alert-danger" >      
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                     </span>
         </div>           
          @endif  
          
      </div>

      <div class="form-group">
            <input id="phone" type="phone" placeholder="*Phone Contact" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>
            
         @if ($errors->has('phone'))
                 <div class="alert alert-danger" >     
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('phone') }}</strong>
                        </span>
               </div>          
          @endif   
         
      </div> 

       <div class="form-group">
            <input id="adress" type="adress" placeholder="*Living Area " class="form-control{{ $errors->has('adress') ? ' is-invalid' : '' }}" name="adress" value="{{ old('adress') }}" required>
            
         @if ($errors->has('adress'))
      <div class="alert alert-danger" > 
                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('adress') }}</strong>
                  </span>
       </div>           
        @endif   
         
      </div> 

       <div class="form-group">
            <input id="password" placeholder="*Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" required>
           
            @if ($errors->has('password'))
           <div class="alert alert-danger" >     
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('password') }}</strong>
                     </span>
            </div>         
             @endif

       </div>
       <div class="form-group">
     <input id="password-confirm" placeholder="*Confirm Password" type="password" class="form-control" name="password_confirmation" required>
       </div>

      <div class="form-group">
        <p>* Mandatory Field </p>
      <button class="btn aqua block full-width m-b" type="submit">Register</button>
      <p class="text-muted text-center"><small>Already have an account?</small></p>
      <a href="{{ url('/login') }}" class="btn btn-sm btn-white btn-block">Login</a>
    </form>
    <p class="top15"> <small>UWAMIMA All Rigths Reserved &copy; 2018</small> </p>
  </div>
</div>
</body>
<!-- Go top -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/vendor/jquery.min.js"></script>
<!-- icheck -->
<script src="assets/js/vendor/icheck.js"></script>
<!-- bootstrap js -->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<!-- pace js -->
<script src="assets/js/vendor/pace/pace.min.js"></script>
<!-- Sparkline -->
<script src="assets/js/vendor/jquery.sparkline.min.js"></script>
<!-- main js -->
<script src="{{ asset('ssets/js/main.js') }}"></script>

    <!-- slimscroll js -->
    <script type="text/javascript" src="{{ url('assets/js/vendor/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('assets/js/vendor/moment.js') }}"></script>
<!-- main js -->
    <script src="{{ url('assets/js/main.js') }}"></script>

</html>
