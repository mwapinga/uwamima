@extends('layouts.addmin')



@section('content')
  <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Add Slider</h4>
                                </div>
                                <div class="tab-inn">
                                     @include('includes.Errors')
            {!! Form::open(['method'=>'POST','route'=> 'slide.store','files'=>true]) !!}


            <div class="row" >

               <div class="input-field col s12">
                         {!! Form::label('tags1', 'Enter Tag 1  (max characters 150)') !!}
                        {!! Form::text('tags1', null, ['class'=>'validate','required' ]) !!}
               </div>

                <div class="input-field col s12">
                         {!! Form::label('tags2', 'Enter Tag 2  (max characters 150)') !!}
                        {!! Form::text('tags2', null, ['class'=>'validate','required' ]) !!}
               </div>

            </div>
                  <div class="row">
                      <div class="file-field input-field col s12">
                          <div class="btn admin-upload-btn">
                              <span>File</span>
                {!! Form::file('photo_id', ['class'=>'required', 'multiple']) !!}
                          </div>
                  <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Slider image">
                  </div>
                      </div>
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
