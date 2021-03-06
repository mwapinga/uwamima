@extends('layouts.admin')



@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
<div class="middle-box text-center loginscreen">
  <div class="widgets-container">
    
    <a href="{{ URL::to('/det/'.$user->id)}}" class="btn btn-block btn-info"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> REMOVE ROLE USER</a>  
   <br><br><br>
    <h3>EDIT PERMISSION FOR {{ $user->name }} USER</h3>
    <p>Existing Roles:: 
     
      @foreach ($user->Role as $element)
      <p><i class="alert-danger">{{ $element->name }}</i></p>
      @endforeach

     </p>

     {!! Form::model($user, ['method'=>'PATCH','route'=> ['permission.update' , $user->id ]]) !!}
            
             {!! Form::hidden('id', $user->id) !!}
      <div class="form-group">
                <p>ADD Role</p>
                <div class="col-sm-14">
                  <select id="role_id" name="role_id" class="form-control bottom15{{ $errors->has('role_id') ? ' is-invalid' : '' }}">

                    @foreach ( $role as $index => $roles)
                    <option value="{{ $roles->id }}" > {{ $roles->name }} :: {{ $roles->display_name }} </option>
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
                    <option value="0" >Not Active </option>
                    <option value="1"> Active </option>  
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

      @if ($user->id != Auth::user()->id)

     <a href="{{ URL::to('permission/'.$user->id )}}" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-delete" aria-hidden="true"></i> DELETE USER</a>     
      @endif
  </div>
</div>


</div>
</div>
@stop
