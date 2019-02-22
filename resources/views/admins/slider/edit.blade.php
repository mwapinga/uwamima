@extends('layouts.addmin')



@section('content')
  <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Edit Slider</h4>
                                </div>
                                <div class="tab-inn">
         @include('includes.Errors')
             {!! Form::model($slide, ['method'=>'PATCH','route'=> ['slide.update' , $slide->id],'files'=>true]) !!}
             {!! Form::hidden('id', $slide->id) !!}

            <div class="row" >

               <div class="input-field col s12">
                         {!! Form::label('name', 'Enter Tag 1  (max characters 15)') !!}
                        {!! Form::text('tags1', null, ['class'=>'validate','required']) !!}
               </div>

                <div class="input-field col s12">
                         {!! Form::label('name', 'Enter Tag 2  (max characters 15)') !!}
                        {!! Form::text('tags2', null, ['class'=>'validate','required']) !!}
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

                     <br >  <br >  <br >
                   {!! Form::open(['method'=>'DELETE','route'=> ['slide.destroy',$slide->id]]) !!}
                    {!! Form::submit('Delete slide', ['class'=>'btn btn-danger col-sm-6']) !!}
                     {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop
