@extends('backend.master')
@section('content')
    <style>
        td{
            color: black!important;
        }
        th{
            color: black!important;
        }
    </style>
    <main>
        <div class="container-fluid">
            <div class="card mb-4 mt-4">
                <h1 class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Chi tiết đơn hàng
                </h1>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm </th>
                                <th>Số lượng </th>
                                <th>Giá </th>
                                <th>Tổng tiền </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($orderdetail) == 0)
                                <tr>
                                    <td colspan="4" class="text-center">Không có dữ liệu</td>
                                </tr>
                            @else
                                @foreach($orderdetail as $key => $od)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td>
                                            @php
                                                $productCode = $od->productCode;
                                                $product = \App\Models\Product::findOrFail($productCode);
                                                echo '<p>'.$product->productName.'</p>';
                                            @endphp
                                        </td>
                                        <td>{{ $od->quantity }}</td>
                                        <td>{{ number_format($od->price) }} đ</td>
                                        <td>{{ number_format($od->price * $od->quantity) }} đ</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div style="float: right;">{{ $orderdetail->links("pagination::bootstrap-4") }}</div>

                </div>
            </div>
        </div>
    </main>
@endsection
