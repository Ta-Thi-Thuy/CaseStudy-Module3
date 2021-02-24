@extends('backend.master')
@section('title')
    Chỉnh sửa chi tiết đơn hàng
@endsection
@section('content')

    <style>
        input{
            width: 400px!important;
        }
        select {
            width: 400px !important;
        }
        /*div{*/
        /*    margin-left: 30px!important;*/
        /*}*/

    </style>
    <div  class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa chi tiết đơn hàng </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('orderdetails.update', $orderdetail->id) }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                            <label>Mã đơn hàng </label>
                            <select class="form-control" name="orderNumber">
                                @foreach($order as $value)
                                    <option value="{{ $value->id }}">{{ $value->id }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <select class="form-control" name="productCode">
                            @foreach($product as $value)
                                <option value="{{ $value->id }}">{{ $value->productName }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Số lượng </label>
                        <input type="number" class="form-control" name="quantity" value="{{ $orderdetail->quantity }}">
                    </div>
                    <div class="form-group">
                        <label>Giá </label>
                        <input type="text" class="form-control" name="price" value="{{ $orderdetail->price }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

