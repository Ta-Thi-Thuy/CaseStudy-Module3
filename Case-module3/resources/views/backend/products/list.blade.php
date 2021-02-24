@extends('backend.master')
@section('search')
    <li>
        <form action="{{ route('product.search')}}" method="post">
            @csrf
            <input type="text" name="keyword" class="form-control search" placeholder=" Search...">
        </form>
    </li>
@endsection

@section('title')
    Danh sách sản phẩm
@endsection
@section('content')
    <style>
        td {
            color: black !important;
            text-align: center !important;
        }

        th {
            color: black !important;
            text-align: center !important;
        }

    </style>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Sản Phẩm</h1>
            </div>
            <a class="btn btn-primary" href="{{route('products.create')}}">Thêm
                mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Dòng sản phẩm</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>

                    <th scope="col">Số lượng giảm giá</th>
                    <th scope="col">Hình ảnh</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $key => $product)
                    <tr>
                        <th scope="row">{{ $key + $products ->firstItem() }}</th>
                        <td>
                            <a href="{{route('products.id',$product->id)}}">{{$product->productName }}</a>
                        </td>
                        <td>{{$product->productLine }}</td>
                        <td> {!!substr($product->descripton, 0, 100) !!}  ...</td>
                        <td>{{$product->quantity }}</td>
                        <td>{{ number_format($product->price)}}</td>

                        <td>{{$product->voucher}}</td>

                        <td>
                            <img src="{{asset ('storage/images/'.$product->img)}} " alt=""
                                 style="width: 100px ;height: 100px">
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">Sửa</a>
                            <a href="{{ route('products.delete', $product->id) }}" class="btn btn-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div style="float: right;">{{ $products->links( "pagination::bootstrap-4") }}</div>
        </div>
    </div>

@endsection

