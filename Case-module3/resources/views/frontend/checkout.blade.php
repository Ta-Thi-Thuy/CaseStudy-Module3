@extends('frontend.master')
@section('frontend-master')


    <!-- Start Side Menu -->
    <div class="side">
        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
        <li class="cart-box">
            <ul class="cart-list">
                <li>
                    <a href="#" class="photo"><img src="{{asset('frontend/')}}images/img-pro-01.jpg" class="cart-thumb"
                                                   alt=""/></a>
                    <h6><a href="#">Delica omtantur </a></h6>
                    <p>1x - <span class="price">$80.00</span></p>
                </li>
                <li>
                    <a href="#" class="photo"><img src="{{asset('frontend/')}}images/img-pro-02.jpg" class="cart-thumb"
                                                   alt=""/></a>
                    <h6><a href="#">Omnes ocurreret</a></h6>
                    <p>1x - <span class="price">$60.00</span></p>
                </li>
                <li>
                    <a href="#" class="photo"><img src="{{asset('frontend/')}}images/img-pro-03.jpg" class="cart-thumb"
                                                   alt=""/></a>
                    <h6><a href="#">Agam facilisis</a></h6>
                    <p>1x - <span class="price">$40.00</span></p>
                </li>
                <li class="total">
                    <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                    <span class="float-right"><strong>Total</strong>: $180.00</span>
                </li>
            </ul>
        </li>
    </div>
    <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
    </header>
    <!-- End Main Top -->


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->

    <div class="cart-box-main">
        <div class="container">
            @if(!\Illuminate\Support\Facades\Auth::guard('customer')->check())
                <div class="row new-account-login">
                    <div class="col-sm-6 col-lg-6 mb-3">
                        <div class="title-left">
                            <h3>Đăng nhập tài khoản</h3>
                        </div>
                        <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Đăng
                                nhập</a></h5>
                        <form action="{{route('login.checkout')}}" method="post" class="mt-3 collapse review-form-box"
                              id="formLogin">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="InputEmail" class="mb-0">Địa chỉ Email</label>
                                    <input type="email" name="email" class="form-control" id="InputEmail"
                                           placeholder="Enter Email"></div>

                                <div class="form-group col-md-6">
                                    <label for="InputPassword" class="mb-0">Mật Khẩu</label>
                                    <input type="password" name="password" class="form-control" id="InputPassword"
                                           placeholder="Password"></div>

                            </div>
                            <button type="submit" class="btn hvr-hover">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            @endif
            <form action="{{route('order')}}" method="post">
                @csrf
                <div class="row">
                    @if(\Illuminate\Support\Facades\Auth::guard('customer')->check())
                        @php
                            $customer= \Illuminate\Support\Facades\Auth::guard('customer')->user();
                        @endphp
                        <div class="col-sm-6 col-lg-6 mb-3">
                            <div class="checkout-address">
                                <div class="title-left">
                                    <h3>Thông tin của bạn</h3>
                                </div>
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">Tên khách hàng*</label>
                                            <input type="text" name="user" class="form-control" id="firstName"
                                                   placeholder="" value="{{$customer->user}}" required>
                                            <div class="invalid-feedback"> Valid first name is required.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username">Email *</label>
                                        <div class="input-group">
                                            <input type="text" name="email" class="form-control" id="username"
                                                   placeholder="" value="{{$customer->email}}" required>
                                            <div class="invalid-feedback" style="width: 100%;"> Your username is
                                                required.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Địa chỉ *</label>
                                        <input type="text" name="address" class="form-control" id="address"
                                               value="{{$customer->address}}" placeholder="" required>
                                        <div class="invalid-feedback"> Please enter your shipping address.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address2">Điện thoại *</label>
                                        <input type="text" name="phone" class="form-control" id="address2"
                                               value="{{$customer->phone}}" placeholder=""></div>
                                    <div class="row">
                                        <div class="col-md-5 mb-3">
                                        </div>
                                    </div>
                                    <hr class="mb-1">
                                </form>
                            </div>
                        </div>
                    @endif
                    <div class="col-sm-6 col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="odr-box">
                                    <div class="title-left">
                                        <h3>Giỏ hàng</h3>
                                    </div>
                                    <div class="rounded p-2 bg-light">
                                        @forelse(Cart::content() as $item)
                                            <div class="media mb-2 border-bottom">
                                                <div class="media-body"><a href=""> Sản phẩm: {{$item->name}}</a>
                                                    <div class="small text-muted">
                                                        Giá: {{number_format($item->options->voucher * $item->qty)}} đ
                                                        <span class="mx-2">|</span> Số lượng: {{$item->qty}} <span
                                                            class="mx-2">|</span> Tổng tiền
                                                        :{{number_format($item->options->voucher * $item->qty)}}đ
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <tr>
                                                Bạn chưa có sản phẩm nào.
                                            </tr>



                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="order-box">
                                    <div class="title-left">
                                        <h1>Đơn hàng của bạn</h1>
                                    </div>
                                    <div class="d-flex">
                                        <div class="ml-auto font-weight-bold">Tổng</div>
                                    </div>
                                    <hr class="my-1">
                                    <div class="d-flex">
                                        <h4>Tổng tiền</h4>
                                        <div class="ml-auto font-weight-bold"> {{$totalprice}} </div>
                                    </div>

                                    <hr class="my-1">

                                    <div class="d-flex">
                                        <h4>Phí ship</h4>
                                        <div class="ml-auto font-weight-bold"> Free</div>
                                    </div>
                                    <hr>
                                    <div class="d-flex gr-total">
                                        <h5>Thành tiền</h5>
                                        <div class="ml-auto h5"> {{$totalprice}} </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <button type="submit" id="edit-continue" name="op" value="ĐẶT MUA" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                ĐẶT MUA
                            </button>
                        </div>
            </form>
        </div>
    </div>

    </div>
    </div>

    <!-- End Cart -->

    <!-- End Instagram Feed  -->
@endsection

