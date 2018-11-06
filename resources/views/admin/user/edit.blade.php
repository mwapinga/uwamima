@extends('layouts.admin')



@section('content')
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-sm-6">

     <div class="widgets-container">
    <h3>EDIT YOUR  INFO</h3>
    <p>Fill The Form Below</p>

      
      {!! Form::model($user, ['method'=>'PATCH','action'=> ['UserController@update' , $user->id ], 'files'=>true ] ) !!}
             {!! Form::hidden('id', $user->id) !!}

 
      <div class="form-group">

       {!! Form::label('name', 'Owner Name: (Both Names)') !!}
       {!! Form::text('name', null , ['class'=>'form-control']) !!}

        @if ($errors->has('name'))
         <div class="alert alert-danger"> 
           <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
          </div>
        @endif
        
      </div>
  
      <div class="form-group">
          
           {!! Form::label('username','Bussnes Name:') !!}
           {!! Form::text('username', null , ['class'=>'form-control']) !!}
        
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

           {!! Form::label('email','Your Email:') !!}
           {!! Form::email('email', null , ['class'=>'form-control']) !!}    
         @if ($errors->has('email'))
            <div class="alert alert-danger" >      
                <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('email') }}</strong>
             </span>
         </div>           
          @endif  
          
      </div>

      <div class="form-group">
            
          {!! Form::label('phone','Bussnes Name:') !!}
         {!! Form::text('phone', null , ['class'=>'form-control']) !!}     
         @if ($errors->has('phone'))
                 <div class="alert alert-danger" >     
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('phone') }}</strong>
                        </span>
               </div>          
          @endif   
         
      </div> 

       <div class="form-group">
          {!! Form::label('adress','Bussnes Name:') !!}
           {!! Form::text('adress', null , ['class'=>'form-control']) !!}
            
         @if ($errors->has('adress'))
      <div class="alert alert-danger" > 
                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('adress') }}</strong>
                  </span>
       </div>           
        @endif   
         
      </div> 

       <div class="form-group">
  {{--        <label><p>Enter A Password</p></label> --}}
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
{{--         <label><p>Confirm Password</p></label>
 --}}     <input id="password-confirm" placeholder="*Confirm Password" type="password" class="form-control" name="password_confirmation" required>
       </div>
      <div class="form-group">
      <button class="btn aqua block full-width m-b" type="submit">Submit</button>
    </div> 
   
    {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@stop