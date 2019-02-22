@extends('layouts.main')

@section('content')

<!-- page title -->
<section class="page-title">
    <div class="container">
        <div class="content-box">
            <div class="title">Blog <span>News</span></div>
            <div class="bread-crumb">
                <a href="{{ url('/') }}">Home &nbsp;</a> /&nbsp;<span>Blog News</span>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- blog classic -->
<section class="blog-details news-section blog-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                <div class="blog-details-content">
                    <div class="content-style-one">
                        <div class="single-item">
                            <div class="img-box">
                                <figure><img src="{{ asset('asset/images/'.$blg->photo->photo_tag) }}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <div class="meta">UWAMIMA</div>
                                <h4>{{ $blg->header }}</h4>
                                <div class="quote centred">
                                    <div class="text">
                                        {{ $blg->Body }}
                                    </div>
                                    <h5>-By

                                            @foreach ($blg->user->Role as $roles)
                                            {{ $roles->name }}
                                            @break
                                            @endforeach
                                    </h5>
                                </div>

                            </div>
                        </div>
                        <div class="post-share-option">
                            <ul class="tag-post">
                                <li class="tag">{{ $blg->created_at->diffForHumans() }}</li>
                            </ul>
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div>
                    <div class="comment-area">
                        <div class="comment-title">COMMENTS({{ count($blg->comments) }})</div>

                       @foreach ($blg->comments as $comm )
                           @if($comm->status == 1)

                        <div class="single-comment">
                            <div class="comment-img"><figure><img src="{{  asset('asset/images/user.jpg') }}" alt=""></figure></div>
                            <div class="title">{{ $comm->name?$comm->name:'Anonymous' }}</div>
                            <div class="time">
                                <div class="text">{{ $comm->created_at->diffForHumans() }}</div>
                            </div>
                            <div class="text">
                                <p>{{ $comm->comment }}</p>
                            </div>
                        </div>
                        
                             @endif
                       @endforeach

    </div>
     <div class="comment-form">
                        <div class="comment-title">POST A COMMENT</div>
                        @if (\Session::has('success'))
                        <div class="alert alert-success">
                         <p>{{ \Session::get('success') }}</p>
                         </div><br />
                          @endif
                        {!! Form::open(['method'=>'POST','route'=> 'blg.store']) !!}
                            <div class="row">

                            {!! Form::hidden('blog_id', $blg->id) !!}

                             <div class="col-md-6 col-sm-6 col-xs-12">
                                            {!! Form::label('name') !!}
                                            {!! Form::text('name', null, ['class'=>'validate','placeholder'=>'Your Name' ]) !!}
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
                                    {!! Form::email('email', null, ['class'=>'validate','placeholder'=>'Your Email' ]) !!}
                                    @if ($errors->has('email'))
                                    <div class="alert alert-danger" >
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                                    </div>
                                 @endif
                              </div>

                              <div class="col-md-12 col-sm-12 col-xs-12">
                                    {!! Form::label('comment') !!}
                                    {!! Form::textarea('comment', null, ['class'=>'validate','required','placeholder'=>'Your comment']) !!}
                                    @if ($errors->has('comment'))
                                <div class="alert alert-danger" >
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('comment') }}</strong>
                                 </span>
                                </div>
                             @endif

                           </div>
                            </div>
                            <button type="submit" class="btn-one" data-loading-text="Please wait..."> COMMENT</button>
                        </form>
                    </div>
                </div>
 </div>
            <div class="col-md-3 col-sm-6 col-xs-12 sidebar-side">
                <div class="sidebar">
                    <div class="sidebar-search sidebar-wideget">
                        <div class="sidebar-title"><h4>Search</h4></div>
                        <div class="search-box">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-post sidebar-wideget">
                        <div class="sidebar-title"><h4>Recent Post</h4></div>
                        @foreach ($news as $new )
                        <div class="sinlge-post">
                            <div class="img-box"><a href="{{ url('/blg/'.$new->id) }}"><figure><img src="{{ asset('asset/images/'.$new->photo->photo_tag) }}" alt=""></figure></a></div>
                            <div class="post-title"><a href="{{ url('/blg/'.$new->id) }}">{{ $new->header }}</a></div>
                            <div class="text">{{ $new->created_at->diffForHumans() }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog classic end -->



@stop
