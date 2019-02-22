@extends('layouts.main')

@section('content')

    <!-- Main slider -->

                    <section class="main-slider slider-style-two">
                        <div class="container-fluid">
                            <ul class="main-slider-carousel owl-carousel owl-theme slide-nav">
                               @foreach ($slider as $slide )
                                        <li class="slider-wrapper">
                                            <div class="image"><img src="{{ asset('asset/images/'.$slide->photo->photo_tag) }}" alt=""></div>
                                            <div class="slider-caption">
                                                <div class="container">
                                                    <div class="tp-title">{{ $slide->tags1 }}</div>
                                                    <h1>{{ $slide->tags2 }}</h1>
                                                    <div class="text"></div>
                                                    <div class="button">
                                                        <a href="#" class="btn-one">Order Now </a>
                                                        <a href="{{ url('/contact') }}" class="btn-two"> Contact Us</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-overlay"></div>
                                        </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>

    <!-- main-slider end -->
    <section class="event-section">
            <div class="container">
                <div class="event-title centred">
                    <div class="sec-title"><h2>Chairman's Message</h2></div>
                </div>
                <div class="event-content">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12 event-column">
                            <div class="img-box">
                                <figure><img src="{{asset('asset/images/chair.jpg') }}" alt=""></figure>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 event-column">
                            <div class="event-side-content">
                                <div class="title-text">Mr. Mfugale </div>
                                <div class="text font_size_16">
                                        It high time now for modernizing the performance of small scale producers in order make them visional
                                        in exploitation of future opportunities of controlling the economy of this rapidly growing sector.
                                         The good news is that individual woodlots nowadays overweigh government held woodlot especially in
                                         Southern highlands of our country. “Welcome to our esteemed TGA website and explore any basic information
                                         on tree growing and forestry management scheme from seed to sawdust with the basic ingredient of post harvest
                                         that is the marketing of forestry products
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- about section -->
    <section class="about-section">
        <div class="container">
            <div class="top-content">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12 about-column">
                        <div class="left-content text-right">
                            <div class="top-title">              About Us</div>
                        </div>
                    </div>
            <div class="bottom-content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 about-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-leave"></i></div>
                            <div class="title">OUR MISSION</div>
                            <div class="text"><p>{{ $mission->facts  }}</p></div>
                        </div>
                         <div class="single-item">
                            <div class="icon-box"><i class="flaticon-energy"></i></div>
                            <div class="title">WHAT WE DO</div>
                            <div class="text"><p> {{ $wedo->facts  }} </p></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 about-column">
                         <div class="single-item">
                            <div class="icon-box"><i class="flaticon-technology"></i></div>
                            <div class="title">OUR VISION</div>
                            <div class="text"><p> {{ $vision->facts  }}</p></div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-weather"></i></div>
                            <div class="title">BACKGROUND</div>
                            <div class="text"><p> {{ $back->facts }} </p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- video-section -->
    <section class="video-section centred">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
                    <div class="top-title">Nunua Mbao na UWAMIMA</div>
                    <div class="title">Leo</div>
                    <div class="video-gallery">
                        <div class="overlay-gallery">
                            <div class="icon-holder">
                                <div class="icon">
                                    <a class="html5lightbox" title="Garden Video" href="https://youtu.be/yVb0mfmMV9w"><img src="{{ asset('asset/images/home/btnn.png') }}" alt="Play Button"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video section end -->

    <!-- testimonials section -->
    <section class="testimonials-section">
        <div class="testimonial-area">
            <div class="container">
                <div class="sec-title"><h2>Testamonial</h2></div>
                <div class="tit-text">What people Say about our Organisation </div></div>
                <div class="three-column-carousel">
                   @foreach ($test as $tests )

                    <div class="testimonials-content">
                        <div class="author-info">
                            <div class="author">
                                <h4>{{ $tests->name }}</h4>
                                <div class="author-title">{{ $tests->surname }}</div>
                            </div>
                            <div class="author-img"><figure><img src="{{ asset('asset/images/'.$tests->photo->photo_tag)  }}" alt=""></figure></div>
                        </div>
                        <div class="text">"{{ $tests->Testimonial }}"</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- team-portfolio end -->
    <section class="gallery-section">
            <div class="container-fluid">
                <div class="four-column-carousel">
                 @foreach ($port as $ports )
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="{{ asset('asset/images/'. $ports->photo->photo_tag ) }}" alt="">
                                <a  class="overlay">
                                    <div class="inner-box">
                                        <div class="content">
                                            <div class="text">Uwamima Matembwe</div>
                                            <span>{{ $ports->name }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End team-portfolio end -->




    <!-- news section -->
    <section class="news-section">
        <div class="container">
            <div class="news-title">
                <div class="sec-title"><h2>Latest News</h2></div>
                <div class="tit-text">UWAMIMA BLOG</div>
            </div>
            <div class="row">

                @foreach ($news as $new )
                <div class="col-md-4 col-sm-6 col-xs-12 news-column">
                        <div class="single-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <img src="{{ asset('asset/images/'.$new->photo->photo_tag) }}" alt="">
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="{{ url('/blg/'.$new->id) }}"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <div class="meta">UWAMIMA</div>
                                <h5><a href="{{ url('/blg/'.$new->id) }}">{{ $new->header }}</a></h5>
                                <div class="text"><p>{{ str_limit($new->Body) }}</p><br/></div>

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
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- news section end -->

@stop


