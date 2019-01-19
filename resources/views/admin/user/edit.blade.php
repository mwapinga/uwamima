@extends('layouts.admin')



@section('content')
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-sm-10">

     <div class="widgets-container">
    <h3>EDIT YOUR  INFO</h3>
    <p>Fill The Form Below</p>

      
     {!! Form::model(Auth::user(), ['method'=>'PATCH','route'=> ['uwadminuser.update' , Auth::user()->id ]]) !!}
            
      {!! Form::hidden('id', Auth::user()->id) !!}
      
      <div class="form-group">
       {!! Form::label('name', 'Your Name: (Both Names)') !!}
       {!! Form::text('name', null , ['class'=>'form-control','required']) !!}

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
           {!! Form::text('username', null , ['class'=>'form-control','required']) !!}
        
              @if ($errors->has('username'))
              <div class="alert alert-danger" >
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('username') }}</strong>
                  </span>
              </div>        
               @endif
  
      </div>
      <div class="form-group">
               <label>*Gender</label>
                <div class="col-sm-14">
                  <select id="gender" name="gender" placeholder="*Gender" class="form-control bottom15{{ $errors->has('gender') ? ' is-invalid' : '' }}" value="{{ old('gender') }}" required  >
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
                    {!! Form::date('borndate',null , ['class'=>'form-control','required']) !!}  
                                            
                         @if($errors->has('borndate'))
                           <div class="alert alert-danger" >
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('borndate') }}</strong>
                            </span>
                           </div>                     
                         @endif             

      </div>
       <div class="form-group">
                   <label>Phone Contact</label> 
                    {!! Form::text('phone',null , ['class'=>'form-control','required']) !!}  
                                            
                         @if($errors->has('phone'))
                           <div class="alert alert-danger" >
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                           </div>                     
                 @endif             

      </div>


       <div class="form-group">
          {!! Form::label('adress','Living Area :') !!}
           {!! Form::text('adress', null , ['class'=>'form-control', 'required']) !!}
            
         @if ($errors->has('adress'))
      <div class="alert alert-danger" > 
                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('adress') }}</strong>
                  </span>
       </div>           
        @endif   
         
      </div> 
      <div class="form-group">
       {!! Form::submit('SUBMIT ', ['class'=>'btn btn-primary']) !!}
     </div>
    {!! Form::close() !!}
        <a href="{{ URL::to('uwadminuser')}}" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i>CHANGE PASSWORD</a>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
@stop