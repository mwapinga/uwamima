@extends('layouts.admin')



@section('content')
  <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Edit About Us Page</h4>
                                </div>
                                <div class="tab-inn">
                      @include('includes.Errors')
                      {!! Form::model($ab, ['method'=>'PATCH','action'=> ['adaboutController@update' , $ab->id ],'files'=>true]) !!}
                      {!! Form::hidden('id', $ab->id) !!}

                      <div class="row" >
                      <div class="input-field col s12">
                      {!! Form::label('about', 'Enter About Details') !!}
                      {!! Form::textarea('about', null, ['class'=>'validate','required' ]) !!}
                      </div>       
                      <div class="row">
                      <div class="input-field col s12">
                      {!! Form::label('status', 'Status:') !!}

                      {!! Form::select('status', [1=>'active',0=>'Not active'],0) !!}

                      </div>
                      </div>
                      <div class="row">
                      <div class="input-field col s12">
                      <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                      </div>
                      </div>
                      {!! Form::close() !!}
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop