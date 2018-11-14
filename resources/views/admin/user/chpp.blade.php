@extends('layouts.admin')



@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
<div class="middle-box text-center loginscreen   ">
  <div class="widgets-container">
    <h3>EDIT PERMISSION FOR</h3>

       {!! Form::open(['method'=>'DELETE','action'=> ['UserController@destroy',Auth::user()->id]]) !!}    
         <div class="form-group">
            <p>Enter Your Old Password</p>
            <input id="old_password" placeholder="*Old_password" type="password" class="form-control"  name="old_password" required>  
            @if ($errors->has('old_password'))
            <div class="alert alert-danger" >     
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('old_password') }}</strong>
                     </span>
            </div>         
             @endif

             @if (\Session::has('success'))
            <div class="alert alert-danger">
          <p>{{ \Session::get('success') }}</p>
            </div><br />
            @endif
      </div>
        <div class="form-group">
            <p>Enter New Password</p>
            <input id="password" placeholder="*New Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" required>  
            @if ($errors->has('password'))
            <div class="alert alert-danger" >     
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('password') }}</strong>
                     </span>
            </div>         
             @endif
        </div>
        <div class="form-group">
          <p>Confirm New Password</p>
        <input id="password-confirm" placeholder="*Confirm Password" type="password" class="form-control" name="password_confirmation" required>
        @if ($errors->has('password-confirm'))
            <div class="alert alert-danger" >     
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('password-confirm') }}</strong>
                     </span>
            </div>         
         @endif
       </div>

      <div class="form-group">
       {!! Form::submit('CHANGE PASSWORD', ['class'=>'btn btn-primary','onclick'=>'return confirm(\'are you sure you want to Change Password?\');']) !!}

     </div>
     {!! Form::close() !!}
     
    <p class="top15"> <small>UWAMIMA All Rigths Reserved &copy; 2018</small> </p>
  </div>
</div>
</div>
</div>
@stop
