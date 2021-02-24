@extends('backend.master')
@section('title')
    Thêm mới dòng sản phẩm
@endsection
@section('content')


    <style>
        h1{
            font-size: 70px!important;

        }
        td{
            font-size: 20px!important;
            color: black!important;

        }
        th{
            font-size:25px!important;
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
    <div class="sub-main-w3">
        <h1>Thêm dòng sản phẩm</h1>
        <form method="post" action="{{ route('productline.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Dòng Sản Phẩm</label>
                <input type="text" name="id" class="form-control">
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
                <label>Mô Tả</label>
                <textarea style="height: 200px" name="description" class="form-control"></textarea>
            </div>
            <button type="submit" value="add" class="btn btn-primary">ADD</button>
            <button onclick="window.history.go(-1); return false;">Cancle</button>
        </form>
    </div>
@endsection
