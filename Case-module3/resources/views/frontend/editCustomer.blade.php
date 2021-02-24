@extends('frontend.showCustomer')
@section('customer')
    <div class="col-lg-6 col-sm-12" >
        <div class="contact-info-left" id="1">
            <h2>Sửa thông tin của bạn</h2>
            <form action="{{route('customer.update',$customer->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Tên đăng nhập</label>
                    <input type="text" name="name" value="{{$customer->user}}"/>
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" name="address" value="{{$customer->address}}"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{$customer->email}}"/>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" name="phone" value="{{$customer->phone}}"/>
                </div>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <a class="btn btn-secondary" href="{{route('customers.detail')}}">Hủy</a>
            </form>
        </div>
    </div>
@endsection
