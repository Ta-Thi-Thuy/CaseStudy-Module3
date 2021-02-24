@extends('frontend.master')
@section('frontend-master')

    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame">
                        <img class="img-fluid" src="{{asset('storage/images/' . $productline->img)}}" alt="" style="height: 500px"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top"> <span>{{$productline->id}}</span></h2>
                    <p style="color: black;font-size: 20px">
                        {{$productline->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="products-box">
        <div class="container">
            <div class="row special-list">
            @foreach($product as $key => $val)
            <div class="col-lg-3 col-md-6 special-grid best-seller">
            <div class="products-single fix">
                <div class="box-img-hover">
                    @if($val->voucher != 0)
                        <div class="type-lb">
                            <p class="sale">Sale {{$val->voucher}} %</p>
                        </div>
                    @else
                    @endif
                    <img src="{{asset ('storage/images/'.$val->img)}} " class="img-fluid" alt="" style="height: 200px">
                    <div class="mask-icon">
                        <ul>
                            <li><a href="{{route('products.detail',$val->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>

                        </ul>
                        <a class="cart" href="{{route('cart.addToCart',$val->id)}}">Thêm vào giỏ hàng</a>
                    </div>
                </div>
                <div class="why-text">
                    <h4>{{$val->productName}}</h4>
                    @if($val->voucher != 0)
                        <del>
                            {{number_format($val->price)}}
                            đ
                        </del>
                        <br/>
                        <h5>
                            {{number_format($val->price * (1 - $val->voucher/100))}}đ
                        </h5>
                    @else
                        <h5>
                            {{number_format($val->price)}}đ
                        </h5>
                    @endif
                </div>

            </div>
        </div>

    @endforeach

    </div>
        </div>
        <div style="top: 100px;float: right;">{{ $product->links( "pagination::bootstrap-4") }}</div>
    </div>

@endsection
