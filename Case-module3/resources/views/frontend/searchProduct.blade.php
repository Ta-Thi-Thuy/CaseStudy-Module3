@extends('frontend.master')
@section('search')
    <li>
        <form action="{{route('p.search')}}" method="post">
            @csrf
            <input type="text" name="search" class="form-control search" placeholder=" Search...">
        </form>
    </li>
@endsection


@section('frontend-master')

    <div class="products-box">
        <div class="container">
            <div class="row special-list">
                @foreach($p as $key => $product)
                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                @if($product->voucher != 0)
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
                                               data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>

                                    </ul>

                                </div>
                            </div>
                            <div class="why-text">
                                <h4>{{$product->productName}}</h4>
                                @if($product->voucher != 0)
                                    <del>
                                        {{number_format($product->price)}}
                                        đ
                                    </del>
                                    <br/>
                                    <h5>
                                        {{($product->price * (1 - $product->voucher/100))}}đ
                                    </h5>
                                @else
                                    <h5>
                                        {{number_format($product->price)}}đ
                                    </h5>
                                @endif
                            </div>

                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

@endsection

