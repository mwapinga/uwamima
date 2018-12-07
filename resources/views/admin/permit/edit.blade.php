@extends('layouts.admin')



@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
<div class="middle-box text-center loginscreen">
  <div class="widgets-container">
    <h3>EDIT PERMISSION FOR</h3>
    <p>{{ $user->name }} USER</p>

     {!! Form::model($user, ['method'=>'PATCH','action'=> ['permissionController@update' , $user->id ]]) !!}
            
             {!! Form::hidden('id', $user->id) !!}
      <div class="form-group">
                <p>Edit Role</p>
                <div class="col-sm-14">
                  <select id="role_id" name="role_id" class="form-control bottom15{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                    @foreach ( $role as $index => $roles)
                    <option value="{{ $index+1 }}" > {{ $roles->name }} </option>
                    @endforeach
                  </select>
                </div>        
                @if ($errors->has('role_id'))
                <div class="alert alert-danger" >
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('role_id') }}</strong>
                      </span>
                </div>           
                @endif 
  
           </div>
           <div class="form-group">
                <p>Edit Status</p>
                <div class="col-sm-14">
                  <select id="status" name="status" class="form-control bottom15{{ $errors->has('gender') ? ' is-invalid' : '' }}">    
                    <option value="1" >Active </option>
                    <option value="0"> Not Active </option>  
                  </select>
                </div>        
                @if ($errors->has('status'))
                <div class="alert alert-danger" >
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('status') }}</strong>
                      </span>
                </div>           
                @endif 
  
           </div>
      
         <div class="form-group">
            <p>Enter your Password To Confirm Updates</p>
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
       {!! Form::submit('EDIT PERMISSION', ['class'=>'btn btn-primary' ,'onclick'=>'return confirm(\'are you sure you want to make this changes?\');']) !!}

     </div>
     {!! Form::close() !!}
     <a href="{{ URL::to('permission/'.$user->id )}}" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-delete" aria-hidden="true"></i> DELETE USER</a>     
    <p class="top15"> <small>UWAMIMA All Rigths Reserved &copy; 2018</small> </p>
  </div>
</div>
</div>
</div>
@stop
