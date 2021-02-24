@extends('frontend.master')
@section('frontend-master');




        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="{{asset('frontend/images/img-pro-01.jpg')}}" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="{{asset('frontend/images/img-pro-02.jpg')}}" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="{{asset('frontend/images/img-pro-03.jpg')}}" class="cart-thumb" alt="" /></a>
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

<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Giỏ hàng</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->
<form action="{{ route('cart.updateCart') }}" class="form-control" method="post" enctype="multipart/form-data">
    @csrf
<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $value)
                        <tr>
                            <td class="thumbnail-img">
                                <a href="#">
                                    <img src="{{asset ('storage/images/'.$value->options->img)}} " class="img-fluid" alt="">
                                </a>
                            </td>
                            <td class="name-pr">
                                <a href="#">
                                    {{$value->name}}
                                </a>
                            </td>
                            <td class="price-pr">
                                @if($value->discount != 0)
                                <del>
                                    {{number_format($value->price)}}đ
                                </del>
                                <p>
                                    {{number_format($value->options->voucher)}}
                                    đ
                                </p>
                                @else
                                    <p>
                                        {{number_format($value->price)}}đ
                                    </p>
                                    @endif
                            </td>
                            <td class="quantity-box"><input type="number" name="cart[{{$value->id}}]" value="{{$value->qty}}" size="4" value="1" min="0" step="1" class="c-input-text qty text"
                            </td>
                            <td class="total-pr">
                                <p>{{number_format($value->options->voucher * $value->qty)}} đ</p>
                            </td>
                            <td class="remove-pr">
                                <a href="{{route('delete.cart',$value->id)}}">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="row my-5">

            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <input name="updateCart" value="Cập nhật giỏ hàng" type="submit">
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Tóm tắt</h3>
                    <div class="d-flex">
                        <h4>Tổng tiền</h4>
                        <div class="ml-auto font-weight-bold">{{$total}} </div>
                    </div>
                    <hr class="my-1">
                    <div class="d-flex">
                        <h4>Phí ship</h4>
                        <div class="ml-auto font-weight-bold"> Free </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Thành tiền</h5>
                        <div class="ml-auto h5"> {{$total}} </div>
                    </div>
                    <hr> </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="{{route('page.checkout')}}" class="ml-auto btn hvr-hover">Thanh toán</a> </div>
        </div>

    </div>
</div>
</form>



@endsection
