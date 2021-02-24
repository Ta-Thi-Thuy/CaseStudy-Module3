@extends('backend.master')

@section('title')
    Chi tiết  sản phẩm
@endsection
@section('content')

    <style>
        .card-header{
            font-size: 45px!important;
        }
        table{
            background: white!important;
        }
        td{
            font-size: 20px!important;
            color: black!important;
        }
       .img-thumbnail{
           width: 500px!important;
           height: 500px!important;
       }
       .table-responsive{
           width: 900px!important;
       }
        button{
            background: #3f3f3f;
            color: white;
            font-size: 20px!important;
        }

    </style>
    <main>
        <div class="container">
            <div class="card mb-4 mt-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Chi tiết sản phẩm
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
{{--                                <th>{!! __('language.BookName') !!}</th>--}}
                                <td>Tên sản phẩm: {{$product->productName}}</td>
                            </tr>
                            <tr>
                                <td>Dòng sản phẩm: {{ $product->productLine }}</td>
                            </tr>

                            <tr>
                                <td>Giá: {{ number_format($product->price) }} đ</td>
                            </tr>
                            <tr>
                                <td>Số lượng: {{($product->quantity) }}</td>
                            </tr>
                            <tr>
                                <td>Phần trăm giảm giá: {{($product->voucher) }} </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="img-thumbnail img-fluid" src="{{asset ('storage/images/'.$product->img)}} " alt="">
                                </td>
                            </tr>

                            <tr>
                                <td><p>Mô tả sản phẩm:</p><br> {!! $product->descripton !!}</td>
                            </tr>
                        </table>
                        <button onclick="window.history.go(-1); return false;">Hủy</button>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
