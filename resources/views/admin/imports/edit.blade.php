@extends('layouts.admin')



@section('content')

     <script src="{{ url('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js') }}"></script>  
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js') }}"></script>  
  </head>
@extends('layouts.admin')



@section('content')

<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">
   <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> EDIT IMPORT </h2>
        <ol class="breadcrumb">
          <li class="active"> <strong>Import  Form </strong> </li>
        </ol>
      </div>
    </div>

          <div class="col-lg-12 top20">
          <div class="widgets-container">
            <h5>Fill the form Below</h5>

         {!! Form::model($imp, ['method'=>'PATCH','action'=> ['importsController@update' , $imp->id ]]) !!}
             {!! Form::hidden('id', $imp->id) !!}
        
             <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('name', 'Owner Name:') !!}
                {!! Form::text('name', null , ['class'=>'form-control']) !!}
             @if ($errors->has('name'))
               <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
               </div>    
            @endif
        
         </div>

         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('product', 'Product Name:') !!}
                {!! Form::text('product', null, ['class'=>'form-control', 'placeholder'=>'Mbao /Nguzo /Mkaa']) !!}              
            @if ($errors->has('product'))
            <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('product') }}</strong>
                </span>
                  </div>
            @endif
        
         </div>
         <div class="form-group col-xs-12 col-sm-3">

                {!! Form::label('category', 'Category Name:') !!}
                {!! Form::text('category', null, ['class'=>'form-control', 'placeholder'=>'Mbao /Nguzo /Mkaa']) !!} 
            @if ($errors->has('category'))
                  <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
               </div>
            @endif

         </div>  

          <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('quantity', 'Quantity:') !!}
                {!! Form::number('quantity', null, ['class'=>'form-control']) !!}

            @if ($errors->has('quantity'))
                <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('quantity') }}</strong>
                </span>
                </div>
            @endif
         </div> 
                   <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('date', 'Date:') !!}
                {!! Form::date('date', null, ['class'=>'form-control']) !!}
            
            @if ($errors->has('date'))
              <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
                </div>
            @endif
          

         </div>

         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('drivername', 'Driver Name:') !!}
                {!! Form::text('drivername', null, ['class'=>'form-control', 'placeholder'=>'Fist and Second Name']) !!}

                           
            @if ($errors->has('drivername'))
                 <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('drivername') }}</strong>
                </span>
                 </div>
            @endif
         
         </div> 

         <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('carnumber', 'Car Number:') !!}
                {!! Form::text('carnumber', null, ['class'=>'form-control']) !!}


                      
            @if ($errors->has('carnumber'))
                <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('carnumber') }}</strong>
                </span>
                </div>
            @endif 
         </div> 
 
          <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('intime', 'In Time:') !!}
                {!! Form::time('intime', null, ['class'=>'form-control']) !!}

                           
            @if ($errors->has('intime'))
                <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('intime') }}</strong>
                </span>
                 </div>
            @endif
         
         </div>

          <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('outime', 'Out Time:') !!}
                {!! Form::time('outime', null, ['class'=>'form-control']) !!}

        
                           
            @if ($errors->has('outime'))
                 <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('outime') }}</strong>
                </span>
                 </div>
            @endif         
         </div>
           <BR><br><br>
           <BR><br><br><BR><br><br>
           <BR><br><BR><br><br><BR><br><br><BR><br><br><BR><br><br>
         <div class="form-group">
           {!! Form::submit('EDIT IMPORT', ['class'=>'btn btn-primary']) !!}
         </div>

         {!! Form::close() !!}
          </div>
        </div>
  </div>
</div>
                     <br >  <br >  <br >
                   {!! Form::open(['method'=>'DELETE','action'=> ['importsController@destroy',$impo->id]]) !!}  
                    {!! Form::submit('DELETE IMPORT', ['class'=>'btn  red btn-block']) !!}
                     {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script type="text/javascript">
    var path = "{{ url('/search') }}";
    $('#category').typeahead({
         minLength: 2,
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });

    var path = "{{ url('/search') }}";
    $('#product').typeahead({
         minLength: 2,
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
      var path = "{{ url('/search') }}";
    $('#name').typeahead({
         minLength: 2,
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

@stop