@extends('layouts.main')

@section('content')

  <!-- Start Breadcrumbs -->
      <section class="breadcrumbs overlay">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h2>About Us</h2>
                      <ul class="bread-list">
                          <li><a href="#">About<i class="fa fa-align-justify"></i></a></li>
                          <li class="active"><a href="#">Ebenezer</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
      <!--/ End Breadcrumbs -->

      <!-- About US -->
      <section class="about-us section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-12">
                 <h2 style="text-decoration-color:#00B16A" >Our Location Welcome Today</h2>
                      <div class="#">
                        <div class="mapouter"><div class="gmap_canvas">
                        <iframe width="700" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=Iringa%20Ebenezer%20Seminary&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe><a href="https://www.pureblack.de">webdesign agenturen</a>
                        </div><style>.mapouter{text-align:right;height:600px;width:700px;}.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:700px;}
                        </style></div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-12">
                      <div class="about-text">

                              @if($abt)
                              <pre>  <h1>ABOUT EBENEZER</h1>   <strong>{{ $abt[0]->about }}</strong> </pre>
                              @endif
                          <div class="button">
                              <a href="#stf" class="btn">Our Staff</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--/ End About US -->

                          <!-- start mission vision values -->
                          @if ($fact)
                 <div class="fun-facts overlay" data-stellar-background-ratio="0.5">
                      <div class="container">
                          <div class="row">
                              @foreach ($fact as $facts)


                              <div class="col-lg-4 col-md-7 col-7">
                                  <!-- Single Fact -->
                                  <div class="single-fact">
                                      <span><i class="fa fa-paper-plane"></i></span>
                                      <div class="number"><span> {{ $facts->name}} </span></div>
                                      <p>{{$facts->detail}} </p>
                                  </div>
                                  <!--/ End Single Fact -->
                              </div>
                              @endforeach
                          </div>
                      </div>
                  </div>
                 @endif
                            <!-- end mission vision values -->


                  <!-- staff start -->
                  <section id="stf" class="team section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2>Our Awesome <span>Staffs</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                <!-- staff loop start -->
                            @foreach($stafs as $staf)
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-team">
                                   <img src="{{ URL::asset('images/'.$staf->photo->photo_tag) }}" alt="">
                                    <div class="team-hover">
                                        <h4>{{ $staf->name }} {{ $staf->surname }}<span>{{ $staf->post }}</span></h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          <!-- staff loop end -->
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ End staff -->




      @stop
