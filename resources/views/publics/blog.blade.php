@extends('layouts.main')

@section('content')

<section class="page-title">
        <div class="container">
            <div class="content-box">
                <div class="title">Our <span>blog</span></div>
                <div class="bread-crumb">
                    <a href="{{ url('/') }}">Home &nbsp;</a> /&nbsp;<span>blog</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- blog classic -->
    <section class="blog-classic news-section blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-classic-content">

                        @foreach ($news as $new )
                        <div class="single-item">
                            <div class="img-box">
                                <a href="{{ url('/blg/'.$new->id) }}"><figure><img src="{{ asset('asset/images/'.$new->photo->photo_tag) }}" alt=""></figure></a>
                            </div>
                            <div class="lower-content">
                                <div class="meta">UWAMIMA</div>
                                <h5><a href="{{ url('/blg/'.$new->id) }}">{{ $new->header}}</a></h5>
                                <div class="text"><p>{{ str_limit($new->Body,300) }}.</p></div>
                                  <a href="{{ url('/blg/'.$new->id) }}"> <div class="meta">Read More</div> </a> 

                                <div class="button-content">By
                                        @foreach ($new->user->Role as $roles)
                                                    {{ $roles->name }}
                                                    @break
                                        @endforeach

                                    <span>{{ $new->created_at->diffForHumans() }}</span></div>
                                    <div class="meta">Share on Social</div>
                             <div class="addthis_inline_share_toolbox"></div>
                            </div>
                        </div>
                        @endforeach
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
                        <div class="sidebar-categories sidebar-wideget">
                            <div class="sidebar-title"><h4>Categories</h4></div>
                        </div>
                        <div class="sidebar-post sidebar-wideget">
                            <div class="sidebar-title"><h4>Recent Post</h4></div>
                            @foreach ($blg as $new )
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
