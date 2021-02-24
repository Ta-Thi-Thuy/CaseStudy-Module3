<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>



   <style>
       body{
           background: white!important;
       }
   </style>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->

    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/css/morris.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('backend/css/monthly.css')}}">
    <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('backend/js/morris.js')}}"></script>
</head>
<body>
<section id="container">
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{route('products.show')}}" class="logo">
                TQTSHOPP
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>

        <div class="top-nav clearfix">
            <ul class="nav pull-right top-menu">
                    @yield('search')

                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="">
                        <span style="font-size: 30px!important; text-align: center!important; width: 100px!important;" class="username"></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li>
                            <a href="{{route('logout')}}"><i class="fa fa-key"></i> Log Out</a>
                            <select  name="change-language" onchange="location = this.value;" title="Change Language">
                                <option value="{!! route('user.change-language', ['vi']) !!}"{{ (app()->getLocale() == 'vi') ? ' selected' : '' }} title="Change to Vietnamese">Vietnamese</option>
                                <option value="{!! route('user.change-language', ['en']) !!}"{{ (app()->getLocale() == 'en') ? ' selected' : '' }} title="Change to English">English</option>
                            </select> &nbsp;

                        </li>
                    </ul>
                </li>


            </ul>

        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside >
        <div  id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div  class="leftside-navigation">
                <ul  class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="{{route('welcome')}}">
                            <i class="fa fa-dashboard"></i>
                            <span> {!! __('language.Trang chủ') !!}</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{route('customers.list')}}">
                            <i class="fa fa-book"></i>
                            <span>{!! __('language.Danh sách khách hàng') !!}</span>
                        </a>

                    </li>

                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-th"></i>
                            <span>{!! __('language.Danh sách sản phẩm') !!}</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('products.list')}}">{!! __('language.Danh sách') !!}</a></li>
{{--                            <li><a href="responsive_table.html">Responsive Table</a></li>--}}
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="{{route('productline.list')}}">
                            <i class="fa fa-tasks"></i>
                            <span>{!! __('language.Dòng sản phẩm') !!}</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{route('orders.list')}}">
                            <i class="fa fa-book"></i>
                            <span>{!! __('language.Đặt hàng') !!}</span>
                        </a>

                    </li>
{{--                    <li class="sub-menu">--}}
{{--                        <a href="{{route('orderdetails.list')}}">--}}
{{--                            <i class="fa fa-book"></i>--}}
{{--                            <span>{!! __('language.Chi tiết đặt hàng') !!}</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>

        <!-- footer -->
        <div
            style=" text-align: center !important; margin-top: 100px !important; width: 100% !important;clear: both !important; "
            class="footer">
            <div class="wthree-copyright">
                <p>© 2020 TQTShop.WELCOME TO <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal">FACEBOOK</a></p>
            </div>
        </div>
        <!-- / footer -->
    </section>
    <!--main content end-->
</section>

<script src="{{ assert("backend/js/bootstrap.js") }}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]>
<script type="text/javascript" src="{{asset('backend/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->
<script>
    $(document).ready(function () {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function () {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function () {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function () {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth: true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity: 0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

            ],
            lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
</script>
<!-- calendar -->
<script type="text/javascript" src="{{asset('backend/js/monthly.js')}}"></script>
<script type="text/javascript">
    $(window).load(function () {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch (window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }

    });
</script>
<!-- //calendar -->
</body>
</html>
