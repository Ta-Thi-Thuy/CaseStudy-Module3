@extends('frontend.master')
@section('frontend-master')

            @yield('productline')

                @yield('productlines')
    <div class="box-add-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="offer-box-products">
                        <img class="img-fluid" src="https://kimcuongvang.com/publicimages/photos/0_1585456949.jpg" alt=""/>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="offer-box-products">
                        <img style="height: 300px!important;" class="img-fluid" src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2018/December/12/2201-490331544584475-1544584475.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

                                @yield('product')

                                        <div class="latest-blog">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="title-all text-center">
                                                            <h1 style="font-size: 50px!important;">Blog mới nhất</h1>
                                                            <p style="font-size: 25px!important;">Rau, củ, quả, hạt luôn là thành phần cung cấp những dưỡng chất cần thiết cho một cơ thể khoẻ mạnh, mang lại nhiều sự lựa chọn phù hợp cho người sử dụng.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-4 col-xl-4">
                                                            <div class="blog-box">
                                                                <div class="blog-img">
                                                                    <img class="img-fluid"
                                                                         src="{{asset('frontend/images/blog-img.jpg')}}"
                                                                         alt=""/>
                                                                </div>
                                                                <div style="height: 330px!important;"  class="blog-content">
                                                                    <div class="title-blog">
                                                                        <h3>Vai trò quan trọng của rau tươi trong dinh dưỡng
                                                                        </h3>
                                                                        <p>Các loại rau tươi của nước ta rất phong phú.
                                                                            Nhìn chung ta có thẻ chia rau tươi thành nhiều nhóm:
                                                                            nhóm rau xanh như rau cải, rau muống, rau xà lách, rau cần...;
                                                                            nhóm rễ củ như cà rốt, củ cải, su hào, củ đậu...;
                                                                            nhóm cho quả như cà chua, cà bát, cà pháo, dưa chuột...;
                                                                            nhóm hành gồm các loại hành, tỏi,.v.v... </p>
                                                                    </div>
                                                                    <ul class="option-blog">
                                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="fas fa-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="far fa-comments"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-4 col-xl-4">
                                                            <div class="blog-box">
                                                                <div class="blog-img">
                                                                    <img class="img-fluid"
                                                                         src="{{asset('frontend/images/blog-img-01.jpg')}}"
                                                                         alt=""/>
                                                                </div>
                                                                <div style="height: 330px!important;" class ="blog-content">
                                                                    <div class="title-blog">
                                                                        <h3>Giá trị dnh dưỡng từ màu sắc của rau củ quả.</h3>
                                                                        <p>Màu sắc của rau củ quả tượng trưng cho những chất dinh dưỡng tự nhiên
                                                                            (tập trung nhiều ở lớp có tạo màu sắc,
                                                                            hương thơm và mùi vị cho rau củ quả) rất có ích cho sức khỏe,
                                                                            giúp đảm bảo nhiều loại vitamin và khoáng chất thiết yếu,
                                                                            tăng cường sức đề kháng và hệ miễn dịch, chống lại bệnh tật.</p>
                                                                    </div>
                                                                    <ul class="option-blog">
                                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="fas fa-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="far fa-comments"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-4 col-xl-4">
                                                            <div class="blog-box">
                                                                <div class="blog-img">
                                                                    <img class="img-fluid"
                                                                         src="{{asset('frontend/images/blog-img-02.jpg')}}"
                                                                         alt=""/>
                                                                </div>
                                                                <div style="height: 330px!important;" class="blog-content">
                                                                    <div class="title-blog">
                                                                        <h3>Nên lựa chọn rau, củ, quả có thành phần dinh dưỡng như thế nào?</h3>
                                                                        <p>Thành phần dinh dưỡng có trong rau, củ, quả và hạt đều góp phần tăng cường sức đề kháng,
                                                                            cải thiện hệ thiêu hóa.
                                                                        Chất xơ, chất khoáng và vitamin A,C,D đều là những dưỡng chất có trong các loại thực phẩm,
                                                                            giúp cung cấp cho một cơ thể khỏe mạnh.Ăn rau củ quả không chỉ giúp cơ thể mà còn giúp bạn
                                                                        sở hữu là da căng bóng, mịn màng.</p>
                                                                    </div>
                                                                    <ul class="option-blog">
                                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="fas fa-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="far fa-comments"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


@endsection
