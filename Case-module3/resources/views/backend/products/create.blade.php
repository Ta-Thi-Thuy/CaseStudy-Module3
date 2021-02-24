@extends('backend.master')
@section('title')
    Thêm mới sản phẩm
@endsection
@section('content')

    <style>

        td{
            color: black!important;

        }
        th{
            color: black!important;

        }
        label{
            font-size: 25px!important;
        }
        input{
            font-size: 20px!important;
        }
        button{
            font-size: 20px!important;
        }
    </style>
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới sản phẩm </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên sản phẩm </label>
                        <input type="text" class="form-control" name="productName"  placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Dòng sản phẩm </label>
                        <select class="form-control" name="productLine">
                            @foreach($product as $value)
                                <option value="{{ $value->id }}">{{ $value->id }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Số lượng </label>
                        <input type="number" class="form-control" name="quantity" placeholder="Enter quantity">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter price">
                    </div>

                    <div class="form-group">
                        <label>Phần trăm giảm giá</label>
                        <input type="text" class="form-control" name="voucher" placeholder="Enter voucher">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Tên ảnh </label>
                        <input type="text"
                               id="inputName"
                               name="inputName" class="form-control">
                        <input type="file"
                               id="inputFile"
                               name="inputFile" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea name="descripton" class="form-control" style="height: 200px" placeholder="Enter descripton"></textarea>
                        {{--                        <input type="text" class="form-control" name="descripton" placeholder="Enter descripton"/>--}}
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>

@endsection


