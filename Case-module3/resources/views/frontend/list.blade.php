@extends('frontend.index')

@section('search')
    <li>

        <form action="{{route('p.search')}}"  method="post">
            @csrf
            <input type="text" name="search" class="form-control search" placeholder=" Search...">
        </form>
    </li>
@endsection

@section('product')
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Danh sách sản phẩm</h1>
                    </div>
                </div>
            </div>

            <div class="row special-list">
    @foreach($products as $key => $product)
        <div class="col-lg-3 col-md-6 special-grid best-seller">
            <div class="products-single fix">
                <div class="box-img-hover">
                    @if($product->voucher != 0)
                        <div class="type-lb">
                            <p class="sale">Sale {{$product->voucher}} %</p>
                        </div>
                        <div class="type-lb">
                            <p class="sale">Sale {{$product->voucher}} %</p>
                        </div>
                    @else
                    @endif
                    <img src="{{asset ('storage/images/'.$product->img)}} " class="img-fluid" alt=""
                         style="height: 200px">
                    <div class="mask-icon">
                        <ul>
                            <li><a href="{{route('products.detail',$product->id)}}" data-toggle="tooltip"
                                   data-placement="right" title="Chi tiết"><i class="fas fa-eye"></i></a></li>


                        </ul>
                        <a class="cart" href="{{route('cart.addToCart',$product->id)}}">Thêm vào giỏ hàng</a>
                    </div>
                </div>
                <div class="why-text">
                    @if($product->voucher != 0)
                        <h4>{{$product->productName}}</h4>
                        <del>
                            {{number_format($product->price)}}
                            đ
                        </del>
                        <br/>
                        <h5>
                            {{number_format($product->price * (1 - $product->voucher/100))}}đ
                        </h5>
                    @else
                        <del>

                        </del>
                    <br/>
                        <br/>

                        <h5>
                            {{number_format($product->price)}}đ
                        </h5>
                    @endif
                </div>
            </div>

        </div>
    @endforeach
    </div>
        <div style="float: right;">{{ $products->links("pagination::bootstrap-4") }}</div>

        </div>
        </div>

@endsection

@section('productline')
    <div id="slides-shop" class="cover-slides">

        <ul class="slides-container">
    @foreach($productlines as $productline)
        <li class="text-center">
            <img src="{{asset('storage/images/' . $productline->img)}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to
                            see any changes in performance over time.</p>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
@endsection


@section('productlines')
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Các dòng sản phẩm</h1>
                    </div>

                </div>
            </div>

            <div class="row">

    @foreach($pl as $productline)
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="shop-cat-box">
                <img class="img-fluid" src="{{asset('storage/images/' . $productline->img)}}" alt=""
                     style="height: 300px"/>
                <a class="btn hvr-hover"
                   href="{{route('productline.detail',$productline->id)}}">{{$productline->id}}</a>
            </div>
        </div>
    @endforeach
            </div>
                        <div style="float: right;">{{ $pl->links("pagination::bootstrap-4") }}</div>
        </div>

    </div>

@endsection
