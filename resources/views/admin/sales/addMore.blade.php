@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">

@if($temp)
    <div class="wrapper-content ">
        <div class="row">
      <div class="col-lg-20">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5> Added Goods Details </h5>
          </div>
          <!-- / ibox-title -->
          <div id="demo2" class="ibox-content collapse in">
            <div class="borderedTable">
              <div class="table-scrollable">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> Product </th>
                      <th> Category </th>
                      <th>Size</th>
                      <th> Quantinty </th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($temp as $key => $tempos)
                       <tr>
                      <td> {{ $key+1 }}</td>
                      <td> {{ ucfirst($tempos->product->name) }} </td>
                      <td> {{ ucfirst($tempos->category->name) }} </td>
                      <td> {{ ucfirst($tempos->size->size) }} </td>
                      <td> {{ $tempos->quantity  }}</td>
                      <td> 
                       Tsh {{ number_format($tempos->price, 2) }}
                      </td>
                       <td>
                            {!! Form::open(['method'=>'DELETE','route'=> ['addmore.destroy',$tempos->id]]) !!}
                            {!! Form::submit('REMOVE', ['class'=>'btn  btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <a href="{{ url('uwadminsale/create') }}" class="btn btn-block btn-success" ><i class="glyphicon glyphicon-add" aria-hidden="true"></i> NEXT STEP </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif


            <div class="col-lg-12 top20">
               <ol class="breadcrumb">
            <li class="active"> <strong>Add Sales Goods Details </strong> </li>
             <label class="alert-danger">Select None for Non available data </label>
              </ol>
            <div class="widgets-container">

    {!! Form::open(['method'=>'POST','route'=> 'addmore.sale.saleinput']) !!}
           <div class="form-group col-xs-12 col-sm-2">
                <label>Product Name</label>
                <select id="product_id" name="product_id" class="form-control required bottom15{{ $errors->has('product_id') ? ' is-invalid' : '' }}">
                    @foreach($product as $index => $prods)
                    <option value="{{ $prods->id }}" > {{ $prods->name }} </option>
                    @endforeach
                  </select>

                @if ($errors->has('product_id'))
                <div class="alert alert-danger" >
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('product_id') }}</strong>
                    </span>
                      </div>
                @endif

             </div>

             <div class="form-group col-xs-12 col-sm-2">
             <label>Category Name</label>
             <select id="category_id" name="category_id" class="form-control", required>
                   @foreach($category as $index => $cats)
                    <option value="{{ $cats->id }}" > {{ $cats->name }} </option>
                 @endforeach
             </select>
                @if ($errors->has('category_id'))
                      <div class="alert alert-danger" >
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('category_id') }}</strong>
                    </span>
                   </div>
                @endif
                @if (\Session::has('success'))
                      <div class="alert alert-danger">
                      <p>{{ \Session::get('success') }}</p>
                        </div><br />
                 @endif

             </div>
             <div class="form-group col-xs-12 col-sm-2">
             <label>Size Value</label>
             <select id="size_id" name="size_id" class="form-control", required>
                   @foreach($size as  $sizes)
                    <option value="{{ $sizes->id }}" > {{ $sizes->size }} </option>
                   @endforeach
             </select>
                @if ($errors->has('size_id'))
                      <div class="alert alert-danger" >
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('size_id') }}</strong>
                    </span>
                   </div>
                @endif
                @if (\Session::has('success'))
                      <div class="alert alert-danger">
                      <p>{{ \Session::get('success') }}</p>
                        </div><br />
                 @endif

             </div>


              <div class="form-group col-xs-12 col-sm-2">
                    {!! Form::label('quantity', 'Quantity:') !!}
                    {!! Form::number('quantity', null, ['class'=>'form-control', 'required']) !!}

                @if ($errors->has('quantity'))
                    <div class="alert alert-danger" >
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('quantity') }}</strong>
                    </span>
                    </div>
                @endif
             </div>
             <div class="form-group col-xs-12 col-sm-2">
                {!! Form::label('price', 'Price Per Single Quantity:') !!}
                {!! Form::number('price', null, ['class'=>'form-control',  'required']) !!}

                           
            @if ($errors->has('price'))
                 <div class="alert alert-danger" >
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                 </div>
            @endif
         
         </div> 
              {!! Form::submit('Add Details', ['class'=>'btn btn-primary']) !!}</td>
            {!! Form::close() !!}

            <br><br><br><br>
     </div>
     </div>


</div>
</div>

@stop
