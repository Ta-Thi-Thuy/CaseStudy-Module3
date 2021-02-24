@extends('frontend.master')
@section('frontend-master')
    <script src="{{asset('https://code.jquery.com/jquery-latest.js')}}"></script>

    <style>

        td{
            font-size: 20px!important;
            color: black!important;
        }

        .table-responsive{
            width: 400px!important;
        }
        .contact-info-left{
            background: white!important;
        }
        li{
            color: black!important;
        }

    </style>

<div class="contact-box-main">
    <div class="container">
        <div class="row">
            @if(\Illuminate\Support\Facades\Auth::guard('customer')->check())
                @php
                $customer = \Illuminate\Support\Facades\Auth::guard('customer')->user();
                @endphp
<div class="col-lg-6 col-sm-12">
    <div class="contact-form-right">
        <h2>Thông tin của bạn: {{$customer->user}}</h2>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <td>Tên đăng nhập: {{$customer->user}}</td>
                </tr>
                <tr>
                    <td>Email: {{$customer->email}}</td>
                </tr>

                <tr>
                    <td>Địa chỉ: {{$customer->address}}</td>
                </tr>
                <tr>
                    <td>Số điện thoại: {{$customer->phone}}</td>
                </tr>

            </table>
            <div class="submit-button text-center">
                <a href="{{route('customer.edit',$customer->id)}}"  class="btn hvr-hover" id="submit">Sửa thông tin</a>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
                @yield('customer')
                @endif

        </div>
    </div>
</div>

@endsection
