@extends('backend.master')

@section('title')
    Trang chu
@endsection

@section('content')

    <div class="row">
        <div class="panel-body">
            <div class="col-md-12 w3ls-graph">
                <!--agileinfo-grap-->
                <div class="agileinfo-grap">
                    <div class="agileits-box">
                        <header class="agileits-box-header clearfix">
                            <h3>THỐNG KÊ KHÁCH QUAN</h3>
                            <div class="toolbar">


                            </div>
                        </header>
                        <div class="agileits-box-body clearfix">
                            <div id="hero-area"></div>
                        </div>
                    </div>
                </div>
                <!--//agileinfo-grap-->

            </div>
        </div>
    </div>
    <div class="agil-info-calendar">
        <!-- calendar -->
        <div class="col-md-6 agile-calendar">
            <div style="width: 1000px!important;" class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                    <span style="font-size: 20px!important;" class="panel-title"> LỊCH </span>
                </div>
                <!-- grids -->
                <div class="agile-calendar-grid">
                    <div class="page">
                        <div style="font-size: 20px!important;" class="w3l-calendar-left">
                            <div style="font-size: 15px!important;" class="calendar-heading">
                            </div>
                            <div class="monthly" id="mycalendar"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //calendar -->
        <div class="col-md-6 w3agile-notifications">

        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //tasks -->


@endsection
