@extends('backend.master')
@section('title')
    Chỉnh sửa dòng sản phẩm
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
                <h1>Chỉnh sửa dòng sản phẩm </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('productline.update', $productline->id) }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Dòng sản phẩm </label>
                        <input type="text" class="form-control" name="id" value="{{ $productline->id }}">
                    </div>

                    <div>
                        <img style="width: 400px;height: 300px" class="img-thumbnail img-fluid" src="{{asset ('storage/images/'.$productline->img)}} " alt="">
                        <input type="file" name="img" class="form-control">
                        <input type="hidden" name="imgName" class="form-control" value="{{ $productline->img }}">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('img') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea style="height: 200px" class="form-control" name="description" >{{ $productline->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>



@endsection
