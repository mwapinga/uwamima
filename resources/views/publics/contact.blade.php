@extends('layouts.main')

@section('content')

<!-- page title -->
<section class="page-title">
    <div class="container">
        <div class="content-box">
            <div class="title">Contact <span>Us</span></div>
            <div class="bread-crumb">
                <a href="{{ url('/') }}">Home &nbsp;</a> /&nbsp;<span>Contact Us</span>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- contact info -->
<section class="contact-info centred">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 contact-column">
                <div class="single-item">
                    <div class="title"><h3>ADDRESS</h3></div>
                    <div class="text">P.o.box 59  <br />Njombe</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 contact-column">
                <div class="single-item">
                    <div class="title"><h3>Phone Number</h3></div>
                    <div class="text">(+255) 744842713<br />(+255) 716507508 </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 contact-column">
                <div class="single-item hvr-grow-shadow">
                    <div class="title"><h3>Email</h3></div>
                    <div class="text">Uwamima@gmail.com.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact info end -->


<!-- contact section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-title centred">Contact form</div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 column">
                <div class="contact-area">
                        @if (\Session::has('success'))
                        <div class="alert alert-success">
                         <p>{{ \Session::get('success') }}</p>
                         </div><br />
                          @endif
                        {!! Form::open(['method'=>'POST','route'=> 'contact.store']) !!}
                        <div class="row" >
                           <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::label('name') !!}
                                    {!! Form::text('name', null, ['class'=>'validate','required','placeholder'=>'Your Name' ]) !!}
                                    @if ($errors->has('name'))
                                    <div class="alert alert-danger" >
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                                    </div>
                                 @endif
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::label('email') !!}
                                {!! Form::email('email', null, ['class'=>'validate','required','placeholder'=>'Your Email' ]) !!}
                                @if ($errors->has('email'))
                                <div class="alert alert-danger" >
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                                </div>
                             @endif
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::label('subject') !!}
                                {!! Form::text('subject', null, ['class'=>'validate','placeholder'=>'Your Subject' ]) !!}
                                @if ($errors->has('subject'))
                                <div class="alert alert-danger" >
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('subject') }}</strong>
                                 </span>
                                </div>
                             @endif
                          </div>

                           <div class="col-md-12 col-sm-12 col-xs-12">
                                    {!! Form::label('message') !!}
                                    {!! Form::textarea('message', null, ['class'=>'validate','required','placeholder'=>'Your Message']) !!}
                                    @if ($errors->has('message'))
                                <div class="alert alert-danger" >
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('message') }}</strong>
                                 </span>
                                </div>
                             @endif

                           </div>
                           <button type="submit" class="btn-one" >SEND YOUR MASSAGE</button>
                        </div>
                     {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 contact-column">
                <div class="google-map-area">
                    <div
                        class="google-map"
                        id="contact-google-map"
                        data-map-lat="40.086097"
                        data-map-lng="-105.939460"
                        data-icon-path="{{ asset('asset/images/resources/map-marker.png') }}"
                        data-map-title="Brooklyn, New York, United Kingdom"
                        data-map-zoom="12"
                        data-markers='{
                            "marker-1": [40.086097, -105.939460, "<h4>Branch Office</h4><p>77/99 London UK</p>","images/resources/map-marker.png"]
                        }'>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact section end -->
@stop
