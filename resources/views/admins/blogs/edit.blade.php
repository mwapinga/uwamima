@extends('layouts.addmin')



@section('content')
  <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Edit Post</h4>
                                </div>
                                <div class="tab-inn">
         @include('includes.Errors')
             {!! Form::model($blog, ['method'=>'PATCH','route'=> ['blog.update' , $blog->id ],'files'=>true]) !!}
             {!! Form::hidden('id', $blog->id) !!}

            <div class="row" >
               <div class="input-field col s12">
                        {!! Form::label('header', 'Enter Header  (max characters 50)') !!}
                        {!! Form::text('header', null, ['class'=>'validate','required' ]) !!}
               </div>

               <div class="input-field col s12">
                        {!! Form::label('Body', 'Enter Body (max characters 500)') !!}
                        {!! Form::textarea('Body', null, ['class'=>'validate', 'required']) !!}
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
                   {!! Form::open(['method'=>'DELETE','route'=> ['blog.destroy',$blog->id]]) !!}
                    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6']) !!}
                     {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop
