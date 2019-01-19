@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">

    <div class="wrapper-content ">
        <div class="row">
      <div class="col-lg-20">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5> Added Type for {{ $prod->name }} Product </h5>
          </div>
          <!-- / ibox-title -->
          <div id="demo2" class="ibox-content collapse in">
            <div class="borderedTable">
              <div class="table-scrollable">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      @if(!count($prod->size))
                      <th> # </th>
                      <th> Category Name </th>
                      <th> Size Available </th>
                      @elseif(count($prod->size))
                      <th>Size for Products</th>
                      @endif
                      <th> Delete Options </th>
                    </tr>
                  </thead>
                  <tbody>
                     @if(!count($prod->size))
                      @foreach ($prod->category as $key => $cats)
                       <tr>
                      <td> {{ $key+1 }}</td>
                      <td> {{ ucfirst($cats->name) }} </td>
                      
                       <td> 
                          @foreach ($cats->size as $sizes)
                          <ul>
                          <li>  {{ $sizes->size  }} 
                            {!! Form::open(['method'=>'DELETE','route'=> ['product.size.delete',$sizes->id]]) !!}
                            {!! Form::hidden('category_id', $cats->id, []) !!}
                            {!! Form::submit('delete', ['class'=>'btn  btn-danger']) !!}
                            {!! Form::close() !!} </li>
                          </ul>

                          @endforeach
                           </td>
                             @if ($prod->name != $cats->name)
                             <div class="col-lg-1 top20">
                            {!! Form::open(['method'=>'POST','route'=> 'product.size.add']) !!}  
                             <div class="form-group">
                                    {!! Form::label('size', 'Add Size For '.$cats->name .' Type:') !!}
                                    {!! Form::hidden('product_id',$prod->id , []) !!}
                                    {!! Form::hidden('category_id', $cats->id, []) !!}
                                    {!! Form::text('size', null , ['class'=>'form-control']) !!}
                                 @if ($errors->has('size'))
                                   <div class="alert alert-danger" >
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('size') }}</strong>
                                    </span>
                                   </div>    
                                @endif
                             </div>  
                             <div>
                             <div class="form-group">
                               {!! Form::submit('Add Size', ['class'=>'btn btn-primary']) !!}
                             </div>
                             {!! Form::close() !!}
                             @endif
                      
                       <td>
                          @if(count($cats->size))
                          <p> Please Delete All size First</p>
                          @else
                            {!! Form::open(['method'=>'DELETE','route'=> ['product.category.delete',$cats->id]]) !!}
                            {!! Form::submit('Delete this Type', ['class'=>'btn  btn-danger']) !!}
                            {!! Form::close() !!}
                          @endif
                        </td>
                    </tr>
                    @endforeach
                     @elseif(count($prod->size))
                     <tr>
                           @foreach ($prod->size as $sizes)
                          <td>  {{ $sizes->size  }} </td>
                          <td>
                            {!! Form::open(['method'=>'DELETE','route'=> ['product.size.delete',$sizes->id]]) !!}
                            {!! Form::hidden('product_id', $prod->id, []) !!}
                            {!! Form::submit('delete', ['class'=>'btn  btn-danger']) !!}
                            {!! Form::close() !!} </td>
                          @endforeach
                      </tr>
                             <div class="col-lg-1 top20">
                            {!! Form::open(['method'=>'POST','route'=> 'product.size.add']) !!}  
                             <div class="form-group">
                                    {!! Form::label('size', 'Add Size For '.$prod->name .':') !!}
                                    {!! Form::hidden('product_id',$prod->id , []) !!}
                                    {!! Form::text('size', null , ['class'=>'form-control']) !!}
                                 @if ($errors->has('size'))
                                   <div class="alert alert-danger" >
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('size') }}</strong>
                                    </span>
                                   </div>    
                                @endif
                             </div>  
                             <div>
                             <div class="form-group">
                               {!! Form::submit('Add Size', ['class'=>'btn btn-primary']) !!}
                             </div>
                             {!! Form::close() !!}             
                     </tr>
                     @endif
                  </tbody>
                </table>
                <a href="{{ url('product') }}" class="btn btn-block btn-success" ><i class="glyphicon glyphicon-add" aria-hidden="true"></i> DONE </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @if(count($prod->category))
<button class="btn btn-block btn-warning" >DELETE ALL CATEGORY  TO DELETE {{ strtoupper($prod->name )}} PRODUCT </button>
  @elseif(count($prod->size))
<button class="btn btn-block btn-warning" >DELETE ALL  SIZE TO DELETE {{ strtoupper($prod->name )}} PRODUCT </button>
   @else
 {!! Form::open(['method'=>'DELETE','route'=> ['product.destroy',$prod->id]]) !!}
 {!! Form::submit('Delete Product', ['class'=>'btn  btnblock btn-danger']) !!}
 {!! Form::close() !!}
  @endif

   @if(!count($prod->size))
     <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-6">
        <ol class="breadcrumb">
          <li class="active"> <strong> Add Type  For  {{ $prod->name  }}  </strong> </li>
        </ol>
      </div>
    </div>
          <div class="col-lg-3 top20">
          <div class="widgets-container">
     {!! Form::open(['method'=>'POST','route'=> 'product.category.add'] ) !!}  
         <div class="form-group">
                {!! Form::label('name', 'Type Name:') !!}
                {!! Form::hidden('product_id',$prod->id , []) !!}
                {!! Form::text('name', null , ['class'=>'form-control']) !!}

             @if ($errors->has('name'))
               <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
               </div>    
            @endif
        
         </div>
         <div class="form-group">
           {!! Form::submit('Add Type', ['class'=>'btn btn-primary']) !!}
         </div>
         {!! Form::close() !!}
          </div>
        </div>
        @endif

</div>
</div>

@stop
