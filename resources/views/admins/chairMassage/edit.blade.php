@extends('layouts.addmin')



@section('content')
  <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Edit Chair's Message</h4>
                                </div>
                                <div class="tab-inn">
         @include('includes.Errors')
             {!! Form::model($ChairM, ['method'=>'PATCH','route'=> ['chairm.update' , $ChairM->id ],'files'=>true]) !!}
             {!! Form::hidden('id', $ChairM->id) !!}

            <div class="row" >
                 <div class="input-field col s12">
                        {!! Form::label('name', 'Chair\'s Name ') !!}
                        {!! Form::text('name', null, ['class'=>'validate','required' ]) !!}
               </div>

               <div class="input-field col s12">
                        {!! Form::label('massage', 'Chair\'s Message') !!}
                        {!! Form::textarea('massage', null, ['class'=>'validate','required']) !!}
               </div>

            </div>
                  <div class="row">
                      <div class="file-field input-field col s12">
                          <div class="btn admin-upload-btn">
                              <span>File</span>
                {!! Form::file('photo_id', ['class'=>'required', 'multiple']) !!}
                          </div>
                  <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Chair image">
                  </div>
                      </div>
                  </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Update"></i>
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
