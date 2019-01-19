@extends('layouts.admin')


@section('content')
<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">

  <div class="col-lg-9">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Striped Table </h5>
                                    <div class="ibox-tools">
                                        <a data-target="#demo18" data-toggle="collapse" class="collapse-link"> <i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown"
                                            href="#"> <i class="fa fa-wrench"></i> </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#">Config option 1</a> </li>
                                            <li><a href="#">Config option 2</a> </li>
                                        </ul>
                                        <a class="close-link"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div id="demo18" class="ibox-content collapse in">
                                    <div >
                                        <div class="widgets-container">
                                            <p>Drag a event and drop into callendar.</p>
                                                              
                  <!-- Drag a event list-->
                    <div id='external-events'>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class='fc-event'>My Event 1</div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class='fc-event'>My Event 2</div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class='fc-event'>My Event 3</div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class='fc-event'>My Event 4</div>
                                                    </div>
                                                </div>
                                                <p>
                                                    <input type='checkbox' id='drop-remove' />
                                                    <label for='drop-remove'>Remove After Drop</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="widgets-container">
                                                              
                  <!-- Full Calendar -->
                    <div id='calendar'></div>
                                            <div style='clear:both'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End calendar box -->
</div>
</div>





@stop