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
                      <th> Quantinty </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($temp as $key => $tempos)
                       <tr>
                      <td> {{ $key+1 }}</td>
                      <td> {{ ucfirst($tempos->product->name) }} </td>
                      <td> {{ ucfirst($tempos->category->name) }} </td>
                      <td> {{ $tempos->quantity  }}</td>
                       <td>
                            {!! Form::open(['method'=>'DELETE','action'=> ['tempoController@destroy',$tempos->id]]) !!}
                            {!! Form::submit('REMOVE', ['class'=>'btn  btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <a href="{{ url('uwadminimport/create') }}" class="btn btn-block btn-success" ><i class="glyphicon glyphicon-add" aria-hidden="true"></i> NEXT STEP </a>
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
            <li class="active"> <strong>Add Imports Goods Details </strong> </li>
              </ol>
            <div class="widgets-container">

    {!! Form::open(['method'=>'POST','action'=> 'tempoController@store']) !!}
           <div class="form-group col-xs-12 col-sm-3">
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

             <div class="form-group col-xs-12 col-sm-3">
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


              <div class="form-group col-xs-12 col-sm-3">
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
             <br>
              {!! Form::submit('Add Details', ['class'=>'btn btn-primary']) !!}</td>
            {!! Form::close() !!}
     </div>
     </div>


</div>
</div>

@stop