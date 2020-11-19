@extends('front.template.master')

@section('title', 'Danh sách tin')
@section('heading','Danh sách tin')
@section($newsCat->Alias,'active')
@section('content')

    <link rel="stylesheet" href="{{url('public/assets/css/newslist.css')}}">
    <!-- ==================================start container=================================== -->
    <div class="container">
            <div class="container__page-one">
                <div class="grid">
                    <div class="grid__row news-list">
                        <div class="grid__column-12">
                            <div class="news-list-item">
                                <img src="{{url('public/assets/img/newsitem.jpg')}}" alt="" class="news-list-item__img">
                                <a href="#">
                                    <h1 class="news-list-item__heading">Thủ tướng: Cho phép đặt hàng cung cấp dịch vụ xét nghiệm SARS-CoV-2</h1>
                                </a>
                                <small>(Thứ sáu, 16/10/2020 09:46)</small>
                                <p class="news-list-item__heading-text">Thủ tướng Chính phủ vừa có Quyết định 1587/QĐ-TTg cho phép đặt hàng cung cấp dịch vụ xét nghiệm chẩn đoán SARS-CoV-2 đối với các mẫu xét nghiệm do ngân sách nhà nước chi trả.</p>
                            </div>
                        </div>
                        
                        <div class="grid__column-4 " data-aos="fade-right">
                            <div class="new-list-morelist-img">
                                <img src="{{url('public/assets/img/news2.jpg')}}" alt="">
                            </div>
                        </div>
                        
                        <div class="grid__column-8" data-aos="fade-left">
                            <div class="new-list-morelist-text">
                                <a href="#">Dịch COVID-19: Những đô thị lớn, mật độ dân cư đông cần áp dụng bắt buộc người dân đeo khẩu trang</a>
                                <br>
                                <small>Thứ năm, 15/10/2020, 18:47</small>
                                <div>
                                    <p class="news-list-item__text">
                                        Những đô thị lớn, mật độ dân cư đông, người qua lại nhiều như Hà Nội, Đà Nẵng, Hải Phòng, Nha Trang… cũng cần áp dụng biện pháp buộc người dân phải đeo khẩu trang, và xử phạt nếu vi phạm như TP Hồ Chí Minh.
                                    </p>
                                </div>
                            </div>
                        </div>

                        
                        <div class="grid__column-4 " data-aos="fade-right">
                            <div class="new-list-morelist-img">
                                <img src="{{url('public/assets/img/news2.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="grid__column-8" data-aos="fade-left">
                            <div class="new-list-morelist-text">
                                <a href="#">Dịch COVID-19: Những đô thị lớn, mật độ dân cư đông cần áp dụng bắt buộc người dân đeo khẩu trang</a>
                                <br>
                                <small>Thứ năm, 15/10/2020, 18:47</small>
                                <div>
                                    <p class="news-list-item__text">
                                        Những đô thị lớn, mật độ dân cư đông, người qua lại nhiều như Hà Nội, Đà Nẵng, Hải Phòng, Nha Trang… cũng cần áp dụng biện pháp buộc người dân phải đeo khẩu trang, và xử phạt nếu vi phạm như TP Hồ Chí Minh.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-4 " data-aos="fade-right">
                            <div class="new-list-morelist-img">
                                <img src="{{url('public/assets/img/news2.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="grid__column-8" data-aos="fade-left">
                            <div class="new-list-morelist-text">
                                <a href="#">Dịch COVID-19: Những đô thị lớn, mật độ dân cư đông cần áp dụng bắt buộc người dân đeo khẩu trang</a>
                                <br>
                                <small>Thứ năm, 15/10/2020, 18:47</small>
                                <div>
                                    <p class="news-list-item__text">
                                        Những đô thị lớn, mật độ dân cư đông, người qua lại nhiều như Hà Nội, Đà Nẵng, Hải Phòng, Nha Trang… cũng cần áp dụng biện pháp buộc người dân phải đeo khẩu trang, và xử phạt nếu vi phạm như TP Hồ Chí Minh.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-4 " data-aos="fade-right">
                            <div class="new-list-morelist-img">
                                <img src="{{url('public/assets/img/news2.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="grid__column-8" data-aos="fade-left">
                            <div class="new-list-morelist-text">
                                <a href="#">Dịch COVID-19: Những đô thị lớn, mật độ dân cư đông cần áp dụng bắt buộc người dân đeo khẩu trang</a>
                                <br>
                                <small>Thứ năm, 15/10/2020, 18:47</small>
                                <div>
                                    <p class="news-list-item__text">
                                        Những đô thị lớn, mật độ dân cư đông, người qua lại nhiều như Hà Nội, Đà Nẵng, Hải Phòng, Nha Trang… cũng cần áp dụng biện pháp buộc người dân phải đeo khẩu trang, và xử phạt nếu vi phạm như TP Hồ Chí Minh.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content__paging">
                        <div class="page">
                            <ul>
                                <li class="btn-prev btn-active fas fa-angle-left"></li>
                                <div class="number-page" id="number-page">
                                    <li class="active">
                                    <a>1</a>
                                </li>
                                <li>
                                    <a>2</a>
                                </li>
                                <li>
                                    <a>3</a>
                                </li>
                                </div>
                                <li class="btn-next fas fa-angle-right"></li>
                            </ul>
                        </div>  
                    </div>
                </div>
                
            </div>
        </div>
        <!-- =====================================end container================================== -->
@stop