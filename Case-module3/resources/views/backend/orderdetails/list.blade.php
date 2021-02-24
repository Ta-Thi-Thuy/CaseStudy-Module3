@extends('backend.master')

@section('title')
    Chi tiết đơn hàng
@endsection
@section('content')


    <style>

        td{
            color: black!important;
            text-align: center!important;


        }
        th{
            color: black!important;
            text-align: center!important;


        }

    </style>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Chi tiết đơn hàng </h1>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Số lượng  </th>
                    <th scope="col">Giá tiền </th>

                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orderdetails as $key => $orderdetail)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $orderdetail->orderNumber }}</td>
                        <td>{{$orderdetail->Product()->first()->productName }}</td>
                        <td>{{ $orderdetail->quantity }}</td>
                        <td>{{ $orderdetail->price }}</td>

                        <td>
                            <a href="{{ route('orderdetails.edit', $orderdetail->id) }}" class="btn btn-info">Sửa</a>
                            <a href="{{ route('orders.destroy', $orderdetail->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="float: right;">{{ $orderdetails->links( "pagination::bootstrap-4") }}</div>

        </div>
    </div>

@endsection
