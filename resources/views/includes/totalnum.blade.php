 <div class="row wrapper border-bottom page-heading">
                    <div class="col-lg-12">
                        <h2>PRODUCT INSTOCK </h2>
                        <ol class="breadcrumb">
                            <li> <h3>Please Try To Fix Product with  Leakage </h3> </li>
                            <li class="active"> <strong>They have Negative means The Export Was greater than Import </strong> </li>
                        </ol>
                    </div>
                </div>


<div class="row">
    <div class="col-lg-12top15">

    <!-- begin col-3 -->
    <div class="col-lg-4">
        <div class="widget dark-grey-bg box-shadow ">
            <div class="row">
                <div class="col-xs-4 text-center">
                    <i class="fa fa-microchip fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span><h3>Total Charcoal Instock</h3></span>

                    <h2 class="font-bold">{{ number_format($totalnumCharcoal,2) }}</h2>
                </div>
                <div class="stats-desc">
                                    @if($totalnumCharcoal < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                  </div>
            </div>
        </div>
    </div>
    <!-- begin col-3 -->
    <div class="col-lg-4">
        <div class="widget dark-grey-bg box-shadow ">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-bar-chart fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span><h3>Total Electric Poles Instock</h3></span>

                    <h2 class="font-bold">{{ number_format($totalnumPolE,2) }}</h2>
                </div>
                <div class="stats-desc">
                                    @if($totalnumPolE < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                  </div>
            </div>
        </div>
    </div>
    <!-- begin col-3 -->
    <div class="col-lg-4">
        <div class="widget dark-grey-bg box-shadow ">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-bar-chart fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span><h3>Total Building Poles Instock</h3></span>
                    <h2 class="font-bold">{{ number_format($totalnumPolB,2) }}</h2>
                </div>
                  <div class="stats-desc">
                                    @if($totalnumPolB < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                  </div>
            </div>
        </div>
    </div>
    <!-- begin col-3 -->
  </div>
</div>
      <div>
        <h1 class="centre">TOTAL MBAO INSTOCK</h1> 
        <hr>
      </div>
<div class="row">
    <h2>PINES</h2>
    <div class="col-lg-12top15">
        <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x4</h2></div>
                                <div class="stats-number">{{ number_format($TotalPain1x4,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($TotalPain1x4 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
            <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x6</h2></div>
                                <div class="stats-number">{{ number_format($TotalPain1x6,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($TotalPain1x6 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>

            <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x8</h2></div>
                                <div class="stats-number">{{ number_format($TotalPain1x8,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($TotalPain1x8 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
              <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x10</h2></div>
                                <div class="stats-number">{{ number_format($TotalPain1x10,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($TotalPain1x10 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
              <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x2</h2></div>
                                <div class="stats-number">{{ number_format($TotalPain2x2,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($TotalPain2x2 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x3</h2></div>
                                <div class="stats-number">{{ number_format($TotalPain2x3,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($TotalPain2x3 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x4</h2></div>
                                <div class="stats-number">{{ number_format($TotalPain2x4,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($TotalPain2x4 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                          <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x6</h2></div>
                                <div class="stats-number">{{ number_format($TotalPain2x6,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($TotalPain2x6 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                                       
  </div>
</div>
 <hr>  

<div class="row">
    <h2>GREVELLIA</h2>
    <div class="col-lg-12top15">
        <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x4</h2></div>
                                <div class="stats-number">{{ number_format($Totalgrevelia1x4,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totalgrevelia1x4 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
            <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x6</h2></div>
                                <div class="stats-number">{{ number_format($Totalgrevelia1x6,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totalgrevelia1x6 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>

            <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x8</h2></div>
                                <div class="stats-number">{{ number_format($Totalgrevelia1x8,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totalgrevelia1x8 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
              <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x10</h2></div>
                                <div class="stats-number">{{ number_format($Totalgrevelia1x10,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totalgrevelia1x10 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
              <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x2</h2></div>
                                <div class="stats-number">{{ number_format($Totalgrevelia2x2,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totalgrevelia2x2 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x3</h2></div>
                                <div class="stats-number">{{ number_format($Totalgrevelia2x3,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totalgrevelia2x3 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x4</h2></div>
                                <div class="stats-number">{{ number_format($Totalgrevelia2x4,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totalgrevelia2x4 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                          <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x6</h2></div>
                                <div class="stats-number">{{ number_format($Totalgrevelia2x6,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totalgrevelia2x6 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                                         
  </div>
</div>
<hr> 
<div class="row">
    <h2>EUCALYPTUS</h2>
    <div class="col-lg-12top15">
        <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x4</h2></div>
                                <div class="stats-number">{{ number_format($Totaleucalyptes1x4,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totaleucalyptes1x4 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
            <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x6</h2></div>
                                <div class="stats-number">{{ number_format($Totaleucalyptes1x6,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totaleucalyptes1x6 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>

            <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x8</h2></div>
                                <div class="stats-number">{{ number_format($Totaleucalyptes1x8,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totaleucalyptes1x8 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
              <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>1x10</h2></div>
                                <div class="stats-number">{{ number_format($Totaleucalyptes1x10,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totaleucalyptes1x10 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
              <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x2</h2></div>
                                <div class="stats-number">{{ number_format($Totaleucalyptes2x2,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totaleucalyptes2x2 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x3</h2></div>
                                <div class="stats-number">{{ number_format($Totaleucalyptes2x3,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totaleucalyptes2x3 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x4</h2></div>
                                <div class="stats-number">{{ number_format($Totaleucalyptes2x4,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totaleucalyptes2x4 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                          <div class="col-md-1 col-sm-6 mtop15">
                            <div class="widget widget-stats black-bg">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-align-right"></i></div>
                                <div class="stats-title"><h2>2x6</h2></div>
                                <div class="stats-number">{{ number_format($Totaleucalyptes2x6,2) }}</div>
                                <div class="stats-progress progress">
                                    <div style="width: 54.9%;" class="progress-bar"></div>
                                  </div>
                                  <div class="stats-desc">
                                    @if($Totaleucalyptes2x6 < 0)
                                    <label class="alert alert-danger"> Leakage</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                                      
  </div>
</div>
   <hr> 