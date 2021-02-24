<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>TQTShop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">

<!--[if lt IE 9]>
    <script src="{{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <script src="{{asset('https://code.jquery.com/jquery-latest.js')}}"></script>

    <![endif]-->

</head>

<body>
<!-- Start Main Top -->
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="right-phone-box">
                    <p>Liên hệ với chúng tôi:- <a href="#"> 0912422002</a></p>
                </div>
                <div class="our-link">
                    <ul>@if(!\Illuminate\Support\Facades\Auth::guard('customer')->check())
                            <li><a href="{{route('showLogin')}}">
                                    <i class="fa fa-user s_color"></i> Đăng nhập</a>
                            </li>
                            <li><a href="{{route('showRegister')}}">
                                    <i class="fa fa-user s_color"></i> Đăng ký</a>
                            </li>
                        @else
                            <li><a href="{{route('customers.detail')}}">
                                    <i class="fa fa-user s_color"></i> Tài khoản</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="login-box">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <button style="font-size: 15px!important;color: #00bb00; width: 120px; " class="username">
                                ACTION
                            </button>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class="fa fa-cog"></i> Cài đặt</a></li>
                            <li><a href="{{route('frontend.logout')}}"><i class="fa fa-key"></i>Đăng xuất</a></li>
                        </ul>
                    </li>
                </div>
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->

<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img
                        src="{{asset('frontend/images/logo.png')}}" class="logo" alt=""></a>
            </div>


            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">

                    <li class="nav-item active"><a class="nav-link" href="{{route('products.show')}}">Trang chủ</a></li>

                    <li class="dropdown">

                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Danh mục</a>
                        <ul class="dropdown-menu">
                            <ul>
                                @foreach($productlines as $productline)
                                    <li><a style="color: black!important;background: white!important;"
                                           href="{{route('show.menu',$productline->id)}}">{{$productline->id}}</a></li>
                                @endforeach
                            </ul>
                        </ul>

                </ul>
            </div>
            <div class="attr-nav">
                <ul>
                    <li class="side-menu">
                        <a href="{{route('page.cart')}}">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">{{$count}}</span>
                            <p>Giỏ hàng</p>
                        </a>
                    </li>
                </ul>
            </div>
{{--            <div>--}}
                @yield('search')
            </div>

    </nav>
</header>

@yield('frontend-master')
<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('frontend/images/instagram-img-01.jpg')}}" alt=""/>
                <div class="hov-in">
                    <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal"><i
                            class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('frontend/images/instagram-img-02.jpg')}}" alt=""/>
                <div class="hov-in">
                    <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal"><i
                            class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('frontend/images/instagram-img-03.jpg')}}" alt=""/>
                <div class="hov-in">
                    <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal"><i
                            class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('frontend/images/instagram-img-04.jpg')}}" alt=""/>
                <div class="hov-in">
                    <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal"><i
                            class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('frontend/images/instagram-img-05.jpg')}}" alt=""/>
                <div class="hov-in">
                    <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal"><i
                            class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('frontend/images/instagram-img-06.jpg')}}" alt=""/>
                <div class="hov-in">
                    <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal"><i
                            class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('frontend/images/instagram-img-07.jpg')}}" alt=""/>
                <div class="hov-in">
                    <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal"><i
                            class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('frontend/images/instagram-img-08.jpg')}}" alt=""/>
                <div class="hov-in">
                    <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal"><i
                            class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('frontend/images/instagram-img-09.jpg')}}" alt=""/>
                <div class="hov-in">
                    <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal"><i
                            class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('frontend/images/instagram-img-05.jpg')}}" alt=""/>
                <div class="hov-in">
                    <a href="https://www.facebook.com/TQTShop-101588998577657/?ref=page_internal"><i
                            class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->


<!-- Start Footer  -->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Thời gian kinh doanh</h3>
                        <ul class="list-time">
                            <li>Thứ hai - Thứ sáu: 08.00am to 05.00pm</li>
                            <li>Thứ bảy: 10.00am to 08.00pm</li>
                            <li>Chủ nhật: <span>Đóng cửa.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget">
                        <h4>Giới thiệu về TQTShop</h4>
                        <p>TQTShop là một điểm đến của rất nhiều khách hàng vì sự tin tưởng và
                            tin dùng tất cả lương thực và thực phẩm đến từ TQTShop.</p>
                        <p>Chúng tôi sẽ nỗ lực và cố gắng mang đến cho khách hàng những sản phẩm
                            tốt nhất và giá cả hợp lý với mọi gia đình.</p>
                        <p>Cảm ơn quý khách đã đến và đặt niềm tin cho TQTShop.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link">
                        <h4>Thông tin</h4>
                        <ul>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Dịch vụ khách hàng</a></li>
                            <li><a href="#">Điều khoản và điền k</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Thông tin giao hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Liên hệ với chúng tôi</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Địa chỉ : TQTShop . Số 2002 <br> Khu đô thị Mon
                                    City
                                    ,<br> Mỹ Đình 2 - Hà Nội</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Số điện thoại: <a href="tel:+1-888705770">0912422002</a>
                                </p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:tqtshop2002@gmail.com">mailto:tqtshop2002@gmail.com</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">Cảm ơn quý khách!!! <a href="#">TQTShop</a>
        <a href="https://html.design/"></a></p>
</div>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('frontend/js/jquery.superslides.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-select.js')}}"></script>
<script src="{{asset('frontend/js/inewsticker.js')}}"></script>
<script src="{{asset('frontend/js/bootsnav.js.')}}"></script>
<script src="{{asset('frontend/js/images-loded.min.js')}}"></script>
<script src="{{asset('frontend/js/isotope.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/baguetteBox.min.js')}}"></script>
<script src="{{asset('frontend/js/form-validator.min.js')}}"></script>
<script src="{{asset('frontend/js/contact-form-script.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
</body>

</html>
