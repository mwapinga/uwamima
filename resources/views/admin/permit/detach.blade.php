@extends('layouts.admin')



@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
<div class="middle-box text-center loginscreen">
  <div class="widgets-container">
   <a href="{{ URL::to('permission/' . $user->id . '/edit')}}" class="btn btn-block btn-info"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> ADD ROLE TO THE USER</a>  
   <br><br><br>

    <h3>EDIT PERMISSION FOR</h3>
    <p>{{ $user->name }} USER</p>
    <p>Existing Roles:: 
     
      @foreach ($user->Role as $element)
      <p><i class="alert-danger">{{ $element->name }}</i></p>

      @endforeach

     </p>
           {!! Form::open(['method'=>'POST','route'=> 'permit.detach']) !!} 

      <div class="form-group">
                <p>Remove Role</p>
                <div class="col-sm-14">
                  <select id="role_id" name="role_id" class="form-control bottom15{{ $errors->has('role_id') ? ' is-invalid' : '' }}">

                    @foreach ($role as $index => $roles)
                    <option value="{{ $roles->id }}" > {{ $roles->name }} :: {{ $roles->display_name }} </option>
                    @endforeach

                  </select>
                </div>        
           </div>
           {!! Form::hidden('id', $user->id, []) !!}
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
       {!! Form::submit('REMOVE ROLE', ['class'=>'btn btn-primary' ,'onclick'=>'return confirm(\'are you sure you want to make this changes?\');']) !!}
     </div>
     {!! Form::close() !!}
  </div>
</div>
 --}}
</div>
</div>
@stop
