@extends('backend.master')

@section('search')
    <li>
        <form action="{{ route('customers.search')}}" method="post">
            @csrf
            <input type="text" name="keyword" class="form-control search" placeholder=" Search...">

        </form>
    </li>
@endsection
@section('title')
    Danh sách khách hàng
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
                <h1>Danh Sách Khách Hàng</h1>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điên thoại</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $key => $customer)
                    <tr>
                        <th scope="row">{{ $key + $customers-> firstItem() }}</th>
                        <td>{{ $customer->user }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td><a href="{{ route('customers.destroy', $customer->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

                <div style="float: right;">{{ $customers->links( "pagination::bootstrap-4") }}</div>

        </div>
    </div>


@endsection
