@extends('backend.master')
@section('search')
    <li>
        <form action="{{ route('productline.search')}}" method="post">
            @csrf
            <input type="text" name="keyword" class="form-control search" placeholder=" Search...">
        </form>
    </li>
@endsection
@section('title')
    Danh sách dòng sản phẩm
@endsection
@section('content')

    <style>
        /*tr{*/
        /*    boder: 1px solid black!important;*/
        /*}*/

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
                <h1>Các dòng sản phẩm</h1>
            </div>
            <a class="btn btn-primary" href="{{route('productline.create')}}">Thêm Mới</a>
            <table  class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Dòng Sản Phẩm</th>
                    <th scope="col">Mô Tả</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($productline as $key => $pl)
                    <tr>
                        <td>{{ $key + $productline-> firstItem()}}</td>
                        <td>
                            <a href="{{route('productline.id',$pl->id)}}">
                            {!! $pl->id !!}
                            </a>
                        </td>
                        <td >{{substr($pl->description, 0, 100)}}...</td>
                        <td>
                            <img src="{{asset('storage/images/' . $pl->img)}}" alt="" style="width: 100px;height: 100px">
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('productline.edit',$pl->id) }}">Sửa</a>
                            <a class="btn btn-danger" href="{{ route('productline.delete',$pl->id) }}"  onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="float: right;">{{ $productline->links( "pagination::bootstrap-4") }}</div>

        </div>
    </div>
@endsection
