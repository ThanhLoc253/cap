@extends('back.pages.home') 
@section('title', 'Bản Đồ') 
@section('maps', 'active') 
@section('content')
<div class="wrapper">
        <!-- ==================================start header====================================== -->
        <header class="header">
            <nav class="header__navbar">
                <div class="header__navbar-list max-width">
                    <div class="flag">
                        <div class="vn-flag">
                            <div class="vn-flag-item" style="animation-delay: 0s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.06s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.12s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.18s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.24s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.3s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.36s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.42s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.48s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.54s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.6s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.66s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.72s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.78s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.84s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.9s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -0.96s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.02s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.08s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.14s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.2s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.26s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.32s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.38s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.44s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.5s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.56s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.62s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.68s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.74s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.8s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.86s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.92s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -1.98s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.04s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.1s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.16s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.22s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.28s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.34s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.4s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.46s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.52s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.58s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.64s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.7s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.76s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.82s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.88s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -2.94s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.06s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.12s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.18s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.24s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.3s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.36s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.42s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.48s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.54s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.6s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.66s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.72s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.78s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.84s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.9s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -3.96s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.02s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.08s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.14s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.2s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.26s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.32s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.38s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.44s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.5s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.56s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.62s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.68s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.74s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.8s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.86s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.92s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -4.98s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.04s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.1s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.16s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.22s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.28s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.34s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.4s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.46s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.52s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.58s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.64s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.7s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.76s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.82s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.88s;"></div>
                            <div class="vn-flag-item" style="animation-delay: -5.94s;"></div>
                            <div class="vn-flag-start">
                                <img src="{{url('public/homepage/img/Plain_Yellow_Star.png')}}" alt="">
                            </div>
                        </div>
                        <div class="header__navbar-logo"><a href="{{url('/')}}">Corona</a></div>
                    </div>
                    <ul class="header__navbar-menu">
                        <a href="#" class="header__navbar-menu-item">Trang Chủ</a>
                        <a href="#" class="header__navbar-menu-item">Tin Tức</a>
                        <a href="{{url('/maps')}}" class="header__navbar-menu-item">Bản Đồ Dịch</a>
                        <a href="#" class="header__navbar-menu-item">Văn Bản</a>
                        <div class="header__navbar-menu-animation start-home"></div>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ========================================end header================================== -->

        <!-- ==================================start container=================================== -->
        <div class="container">
            <div class="container__page-one">
                <div class="grid">
                    <div class="grid__row grid__row-one">
                        <div class="grid__column-6">
                            <div class="difine">
                                <h1 class="define__heading">CORONAVIRUS LÀ GÌ?</h1>
                                <p class="define__text">Coronavirus (COVID-19) lần đầu tiên được báo cáo ở Vũ Hán, Hồ Bắc, Trung Quốc vào tháng 12 năm 2019, bùng phát sau đó đã được WHO công nhận là đại dịch. Coronavirus là một loại vi rút. Có nhiều loại khác nhau và một số gây bệnh. Một loại mới được xác định đã gây ra một đợt bùng phát bệnh đường hô hấp gần đây được gọi là COVID-19.
                                </p>
                            </div>
                        </div>
                        <div class="grid__column-6">
                            <div class="page-one-video">
                                <a href="https://www.youtube.com/watch?v=5DGwOJXSxqg" target="_blank">
                                    <img class="page-one-video-img" src="{{url('public/homepage/img/virus-video.jpg')}}" alt="video" >
                                    <div class="page-one-video-item"><i class="far fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                            </div>
                            <div class="img-virus">
                                <img src="{{url('public/homepage/img/anim-icon-virus.png')}}" alt="">
                            </div>                         
                            <div class="img-virus-2">
                                <img src="{{url('public/homepage/img/anim-icon-virus.png')}}" alt="">
                            </div>                         
                        </div>
                    </div>
                  
                </div>    
            </div>

            <!-- ========================================page 3 spreads======================================== -->
            <div class="container__page-three">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-12">
                            <div class="grid__row-three-title&quot;">
                                <h2 class="title-row-three-1">HOW DOES CORONA VIRUS SPREAD?</h2>
                                <h1 class="title-row-three-2">HOW IT SPREADS</h1>
                            </div>
                        </div>                       
                    </div>
                    <div class="grid__row">
                        <div class="grid__column-4">
                            <div class="grid__column-4-prevention">
                                <div class="spreads__img">
                                    <img src="{{url('public/homepage/img/spreads_human_contact.jpg')}}" alt="">
                                </div>
                                <div class="spreads__text">
                                    <h2>Human Contact</h2>
                                    <p>COVID-19 được cho là lây lan chủ yếu qua tiếp xúc gần gũi từ người sang người với các giọt đường hô hấp từ người bị nhiễm bệnh. Những người bị nhiễm coronavirus thường có các triệu chứng bệnh tật.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-4">
                            <div class="grid__column-4-prevention">
                                <div class="spreads__img">
                                    <img src="{{url('public/homepage/img/spreads_contaminated_objects.jpg')}}" alt="">
                                </div>
                                <div class="spreads__text">
                                    <h2>Contaminated Objects</h2>
                                    <p>Có thể một người có thể bị nhiễm COVID-19 bằng cách chạm vào bề mặt hoặc đồ vật có vi-rút trên đó và sau đó chạm vào miệng, mũi hoặc có thể là mắt của họ. Đây không được cho là cách lây lan chính của virus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-4">
                            <div class="grid__column-4-prevention">
                                <div class="spreads__img">
                                    <img src="{{url('public/homepage/img/spreads_social_gathering.jpg')}}" alt="">
                                </div>
                                <div class="spreads__text">
                                    <h2>Social Gathering</h2>
                                    <p>Nếu một người bị bệnh ho hoặc hắt hơi, các giọt của họ có thể lây nhiễm sang những người xung quanh. Đó là lý do tại sao điều quan trọng là tránh tiếp xúc gần gũi với những người khác. Mọi người có thể bị nhiễm bệnh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========================================page 2 prevention======================================== -->
            <div class="container__page-two">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-12">
                            <div class="grid__row-two-title&quot;">
                                <h2 class="title-row-two-1">Prevention</h2>
                                <h1 class="title-row-two-2">Covid 19 PreventionTips</h1>
                            </div>
                        </div>                       
                    </div>
                    <div class="grid__row">
                        <div class="grid__column-4">
                            <div class="grid__column-4-prevention">
                                <div class="prevention__img">
                                    <img src="{{url('public/homepage/img/Prevention-wash.webp')}}" alt="">
                                </div>
                                <div class="prevention__text">
                                    <h2>Wash Your Hand</h2>
                                    <p>Rửa tay thường xuyên là một trong những cách tốt nhất để loại bỏ vi trùng, tránh bị bệnh và ngăn ngừa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-4">
                            <div class="grid__column-4-prevention">
                                <div class="prevention__img">
                                    <img src="{{url('public/homepage/img/prevention-sanitize.webp')}}" alt="">
                                </div>
                                <div class="prevention__text">
                                    <h2>Clean &amp; Disinfect</h2>
                                    <p>Bệnh coronavirus (COVID-19) là một bệnh truyền nhiễm do một loại coronavirus mới phát hiện gây ra.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-4">
                            <div class="grid__column-4-prevention">
                                <div class="prevention__img">
                                    <img src="{{url('public/homepage/img/Prevention-mask.webp')}}" alt="">
                                </div>
                                <div class="prevention__text">
                                    <h2>Use Face Mask</h2>
                                    <p>Che miệng và mũi bằng mặt nạ và đảm bảo không có khoảng trống giữa mặt bạn và mặt nạ.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-virus-3">
                        <img src="{{url('public/homepage/img/virus-pink.png')}}" alt="">
                    </div>
                    <div class="img-virus-2">
                        <img src="{{url('public/homepage/img/anim-icon-virus.png')}}" alt="">
                    </div>
                    <div class="img-virus-4">
                        <img src="{{url('public/homepage/img/virus2.png')}}" alt="">
                    </div>
                </div>
            </div>
            
            <!-- ========================================page 4 wash your hand======================================== -->

            <div class="container__page-four">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-12">
                            <div class="grid__row-three-title&quot;">
                                <h2 class="title-row-four-1">Wash Your Hand</h2>
                                <h1 class="title-row-four-2">How to Wash Your Hand Properly
                                </h1>
                            </div>
                        </div>                       
                    </div>
                    <div class="grid__row">
                        <div class="grid__column-2">
                            <div class="grid__column-2-wash">
                                
                                <div class="wash__img">
                                    <img src="{{url('public/homepage/img/hadnwash-1.webp')}}" alt="">
                                    <div class="wash-step">1</div>
                                </div>
                                <div class="wash__text">
                                    <h2>Soap on Hand</h2>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2">
                            <div class="grid__column-2-wash">
                                <div class="wash__img">
                                    <img src="{{url('public/homepage/img/hadnwash-2.webp')}}" alt="">
                                    <div class="wash-step">2</div>
                                </div>
                                <div class="wash__text">
                                    <h2>Palm to Palm</h2>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2">
                            <div class="grid__column-2-wash">
                                <div class="wash__img">
                                    <img src="{{url('public/homepage/img/hadnwash-3.webp')}}" alt="">
                                    <div class="wash-step">3</div>
                                </div>
                                <div class="wash__text">
                                    <h2>Between Fingers</h2>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2">
                            <div class="grid__column-2-wash">
                                <div class="wash__img">
                                    <img src="{{url('public/homepage/img/hadnwash-4.webp')}}" alt="">
                                    <div class="wash-step">4</div>
                                </div>
                                <div class="wash__text">
                                    <h2>Back of The Hands</h2>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2">
                            <div class="grid__column-2-wash">
                                <div class="wash__img">
                                    <img src="{{url('public/homepage/img/hadnwash-5.webp')}}" alt="">
                                    <div class="wash-step">5</div>
                                </div>
                                <div class="wash__text">
                                    <h2>Clean with Water</h2>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2">
                            <div class="grid__column-2-wash">
                                <div class="wash__img">
                                    <img src="{{url('public/homepage/img/hadnwash-6.webp')}}" alt="">
                                    <div class="wash-step">6</div>
                                </div>
                                <div class="wash__text">
                                    <h2>Use Towel to Dry</h2>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ========================================page5 symptoms======================================== -->
            <div class="container__page-five">
                <div class="grid">
                    <div class="grid__row grid__row-five symptoms-row">
                        <div class="grid__column-6 symptoms-column">
                            <div class="symptoms-difine">
                                <h2 class="title-row-five">Main Symptoms</h2>
                                <h1 class="define__heading">What Are The Main Symptoms?</h1>
                                <p class="define__text">Virus COVID-19 ảnh hưởng đến những người khác nhau theo những cách khác nhau .COVID-19 là một bệnh đường hô hấp và hầu hết những người bị nhiễm sẽ phát triển các triệu chứng nhẹ đến trung bình và hồi phục mà không cần điều trị đặc biệt. Những người có bệnh lý cơ bản và những người trên 60 tuổi có nguy cơ mắc bệnh nặng và tử vong cao hơn
                                </p>

                                <div class="grid__column-12 symptoms-other">
                                    <div class="symptoms-other-1">
                                        <h4>Common Symptoms Include:</h4>
                                        <ul>
                                            <li>
                                                Sốt
                                            </li>
                                            <li>
                                                Mệt Mỏi
                                            </li>
                                            <li>
                                                Ho Khan
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="symptoms-other-2">
                                        <h4>Other Symptoms Include:</h4>
                                        <ul>
                                            <li>
                                                Hụt Hơi
                                            </li>
                                            <li>
                                                Nhức Mỏi
                                            </li>
                                            <li>
                                                Đau Họng
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                   
                        </div>
                        <div class="grid__column-6 symptoms-column">
                            <div class="img-symptoms">
                                <img src="{{url('public/homepage/img/SYMPTOMS.webp')}}" alt="">
                            </div>                        
                        </div>
                        <div class="img-virus-3">
                            <img src="{{url('public/homepage/img/virus-pink.png')}}" alt="">
                        </div>
                        <div class="img-virus-2">
                            <img src="{{url('public/homepage/img/anim-icon-virus.png')}}" alt="">
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>