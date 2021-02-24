@extends('frontend.master')
@section('frontend-master')
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">


                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        @foreach($product as $val)
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    @if($val->voucher != 0)
                                                        <div class="type-lb">
                                                            <p class="sale">Sale {{$val->voucher}} %</p>
                                                        </div>
                                                    @else
                                                    @endif
                                                    <img class="img-fluid" src="{{asset('storage/images/' . $val->img)}}" alt="" style="height: 200px"/>
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
                                                            {{($val->price * (1 - $val->voucher/100))}}đ
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Dòng sản phẩm</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                @foreach($productlines  as $val)
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="{{route('show.menu',$val->id)}}"> {{$val->id}}
                                    </a>

                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="filter-price-left">
                            <div class="price-box-slider">
                                <div id="slider-range"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
