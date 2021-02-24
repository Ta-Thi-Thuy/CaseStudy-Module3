@extends('frontend.master')
@section('frontend-master')



<div style="font-size: 50px!important; width: 1100px!important;" class="modal-dialog modal-dialog-centered" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div  style="width: 600px!important;"  class="modal-content">
            <div class="modal-header">
                <h1  style="font-size: 70px!important;color: red" class="modal-title" id="staticBackdropLabel">Đặt hàng thành công</h1>
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
            </div>
            <div style="color: black" class="modal-body">
                Cảm ơn bạn đã tin tưởng và đặt hàng ở TQTShop!!!
            </div>
        </div>
    </div>
</div>

@endsection

