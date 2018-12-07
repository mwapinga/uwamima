@extends('layouts.admin')



@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
 <div class="middle-box text-center loginscreen   ">
  <div class="widgets-container">
    <h3>EDIT PERMISSION FOR</h3>
    <p>{{ $users->name }} USER</p>   
                 {!! Form::open(['method'=>'DELETE','action'=> ['permissionController@destroy',$users->id]]) !!} 
                     <div class="form-group">
                    <p>Enter your Password To Delete This User</p>
                    <input id="password" placeholder="*Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" required>  
                    @if ($errors->has('password'))
                    <div class="alert alert-danger" >     
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('password') }}</strong>
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
                     {!! Form::submit('DELETE USER', ['class'=>'btn red btn','onclick'=>'return confirm(\'are you sure you want to delete this User?\');']) !!}

                  </div>
                     {!! Form::close() !!}
                
     
    <p class="top15"> <small>UWAMIMA All Rigths Reserved &copy; 2018</small> </p>
  </div>
</div>
</div>
</div>
@stop
