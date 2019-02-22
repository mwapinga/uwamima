@extends('layouts.main')

@section('content')

<!-- page title -->
<section class="page-title">
    <div class="container">
        <div class="content-box">
            <div class="title">About <span>Us</span></div>
            <div class="bread-crumb">
                <a href="{{ url('/') }}">Home &nbsp;</a> /&nbsp;<span>About us</span>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- welcome section -->
<section class="welcome-section">
    <div class="container">
        <div class="welcome-title centred">
            <div class="title-top">UWAMIMA</div>
            <div class="title">(Umoja Wa Wapanda Miti Matembwe)</div>
            <div class="title-text font_size_16">{{ $back->facts }}</div>
        </div>
    </div>
</section>



<!-- service section -->
<section class="service-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 service-column">
                <div class="tab-content-area">
                    <ul class="nav nav-pills nav-justified">
                        <li><a data-toggle="pill" href="#menu1"><i class="flaticon-nature-1"></i> OUR MISSION</a></li>
                        <li><a data-toggle="pill" href="#menu2"><i class="flaticon-leave"></i> WHAT WE DO</a></li>
                        <li class="active"><a data-toggle="pill" href="#menu3"><i class="flaticon-technology"></i> OUR VISION</a></li>
                        <li><a data-toggle="pill" href="#menu4"><i class="flaticon-weather"></i> OUR OBJECTIVES</a></li>
                        <li><a data-toggle="pill" href="#menu5"><i class="flaticon-nature"></i>  OUR ACTIVITIES</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade">
                            <div class="service-content">
                                <div class="service-title">OUR MISSION</div>
                                <div class="content-text">
                                    <div class="img-box"><figure><img src="{{ asset('asset/images/service/1.png') }}" alt=""></figure></div>
                                    <p>{{ $mission->facts }}</p>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="service-content">
                                <div class="service-title">WHAT WE DO</div>
                                <div class="content-text">
                                    <div class="img-box"><figure><img src="{{ asset('asset/images/service/1.png') }}" alt=""></figure></div>
                                    <p> {{ $wedo->facts }}</p>
                                </div>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade in active">
                            <div class="service-content">
                                <div class="service-title">OUR VISION</div>
                                <div class="content-text">
                                    <div class="img-box"><figure><img src="{{ asset('asset/images/service/1.png') }}" alt=""></figure></div>
                                    <p>{{ $vision->facts }}</p>
                                </div>
                            </div>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            <div class="service-content">
                                <div class="service-title">OUR OBJECTIVES</div>
                                <div class="content-text">
                                    <div class="img-box"><figure><img src="{{ asset('asset/images/service/1.png') }}" alt=""></figure></div>
                                    <p>The Main Objective that are considered in our Organisation</p>
                                </div>
                                <ul class="list-content">
                                    <li>To facilitate exchange of experiences and information and encourage networking among UWAMIMA members.</li>
                                    <li>To provide an opportunity for joint lobbying capacity on forest policies, laws and regulations from a farm forestry perspective.</li>
                                    <li>Capacity building for members and awareness creation on trees growing best practices especially shifting to modern farming through the use of improved seeds technology.</li>
                                    <li>To promote farm forestry, to increase the number of trees at household level and the conservation and sustainable utilization of forests in Tanzania.</li>
                                    <li>To promote commercialization of woodlots in order to increase income levels and improve rural livelihoods.</li>
                                    <li>To promote and defend the rights and common Interests of tree growers.</li>
                                    <li>To advocate for periodic valuation and monitoring of forest resources.</li>
                                    <li>To solicit financial support from financial agencies and donors for both community and small holder projects.</li>
                                    <li>We are not politically affiliated.</li>
                                </ul>
                            </div>
                        </div>
                        <div id="menu5" class="tab-pane fade">
                            <div class="service-content">
                                <div class="service-title">OUR ACTIVITIES</div>
                                <div class="content-text">
                                    <div class="img-box"><figure><img src="{{ asset('asset/images/service/1.png') }}" alt=""></figure></div>
                                    <p>The best activities that are being carried out by UWAMIMA</p>
                                </div>
                                <ul class="list-content">
                                    <li>Commercial Trees nursery rising</li>
                                    <li>Forest products market centre operations</li>
                                    <li>Avocado fruits seedlings rising.</li>
                                    <li>Farming trees {woodlots} and avocado farms.</li>
                                    <li>Good husbandry of bees.</li>
                                    <li>Consultancy services on forestry based issue through Para professionals to members and non members.</li>
                                    <li>To provide trainings based on other income generating activities to make sure our members are financial strong when waiting their woodlots to mature.</li>
                                    <li>Training of our members on various skills based on forestry from seeds to sawdust to enhance the value chain of their produces</li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service section end -->



@stop
