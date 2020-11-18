<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{url('public/assets/css/base.css')}}">
    <!-- <link rel="stylesheet" href="{{url('public/assets/css/main.css')}}"> -->
    <link rel="stylesheet" href="{{url('public/assets/css/template.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/assets/fonts/fontawesome-free-5.14.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="shortcut icon" href="{{url('images/favicon/'.$favicon->Description)}}" type="image/x-icon">
</head>
<body>
  {!! csrf_field() !!}
    <div class="wrapper">
        <!-- ==================================start header====================================== -->
        <header class="header">
            <nav class="header__navbar">
                <div class="header__navbar-list max-width">
                    <div class="flag">
                        <div class="vn-flag">
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-item"></div>
                            <div class="vn-flag-start">
                                <img src="{{url('public/assets/img/Plain_Yellow_Star.png')}}" alt="">
                            </div>
                        </div>
                        <div class="header__navbar-logo"><a href="#">Corona</a></div>
                    </div>
                    <ul class="header__navbar-menu">
                      @if(isset($Page) && count($Page)>0)
                      @foreach($Page as $k => $v)
                        @if($v->Alias=='/')
                          <a href="{{url('/')}}" title="{{$v->Name}}" class="header__navbar-menu-item @yield('home')">
                          {!!$v->Name!!}
                          </a>
                        @else
                          <a href="{{url('/'.$v->Alias)}}" title="{{$v->Name}}" class="header__navbar-menu-item @yield($v->Alias)">
                          {{$v->Name}}
                          </a>
                          
                        @endif
                      @endforeach
                      @endif
                      <!-- <div class="start-home"></div> -->
                      <!-- <div class="start-{{$v->Alias}}"></div> -->
                      <!-- <div class="start-information"></div>
                      <div class="start-map"></div>
                      <div class="start-text"></div> -->
                      <div class="header__navbar-menu-animation"></div>
                        <!-- <a href="index.html" class="header__navbar-menu-item">Trang Chủ</a>
                        <a href="news.html" class="header__navbar-menu-item">Tin Tức</a>
                        <a href="#map" class="header__navbar-menu-item">Bản Đồ Dịch</a>
                        <a href="newslist.html" class="header__navbar-menu-item">Danh sách tin</a>
                        <div class="header__navbar-menu-animation start-home"></div> -->

                        <!-- <li><a href="#trangchu" class="header__navbar-menu-btn">Trang Chủ</a></li>
                        <li><a href="#covid19" class="header__navbar-menu-btn">Tin Tức</a></li>
                        <li><a href="#badodich" class="header__navbar-menu-btn">Bản Đồ Dịch</a></li>
                        <li><a href="#vanban" class="header__navbar-menu-btn">Văn Bản</a></li>
                        <div class="header__navbar-menu-animation start-home"></div> -->
                        <!-- <li><a href="#teams" class="menu-btn">Teams</a></li> -->
                        <!-- <li><a href="#contact" class="menu-btn">Contact</a></li> -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ========================================end header================================== -->

        <!-- ==================================start container=================================== -->
        @yield('content')
        <!-- =====================================end container================================== -->

        <!-- ==================================start footer====================================== -->
        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-4 left-col">
                        <div class="difine">
                            <div class="flag flag-bottom">
                                <div class="vn-flag">
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-item"></div>
                                    <div class="vn-flag-start">
                                        <img src="{{url('public/assets/img/Plain_Yellow_Star.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="header__navbar-logo"><a href="#">Corona</a></div>
                            </div>
                            <p class="footer__text">Cách tốt nhất để ngăn chặn và làm chậm quá trình lây truyền là được thông báo đầy đủ về vi rút COVID-19. Bảo vệ bản thân và những người khác khỏi nhiễm trùng bằng cách rửa tay.
                            </p>
                        </div>
                    </div>
                    <div class="grid__column-4">
                        <div class="difine">
                            <h1 class="define__heading">Contact Us</h1>
                            <p class="footer__text">254 Nguyễn Văn Linh, Thanh Khê, Đà Nẵng
                            </p>
                            <p class="footer__text">Phone: +84535353535
                            </p>
                            <p class="footer__text">Email: hoainam2827@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="grid__column-4">
                        <div class="difine">
                            <h1 class="define__heading">Our team</h1>
                            <div class="social-media">
                                <p class="social-media-text footer__text">Lê Hoài Nam
                                </p>
                                <div class="social-media-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="social-media">
                                <p class="social-media-text footer__text">Nguyễn Thành Lộc
                                </p>
                                <div class="social-media-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="social-media">
                                <p class="social-media-text footer__text">Quang Trọng
                                </p>
                                <div class="social-media-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="social-media">
                                <p class="social-media-text footer__text">Nguyễn Hoàng
                                </p>
                                <div class="social-media-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>              
            </div>
            <div class="footer__bottom">
                <p>© 2020 Created By Lê Hoài Nam đẹp trai thanh lịch vô địch vũ trụ.</p>
            </div>
            
            <div class="img-virus-4-bottom">
                <img src="./assets/img/virus2.png" alt="">
            </div> 
        </footer>
        <!-- ======================================end footer==================================== -->

    </div>
    <script src="{{url('public/assets/js/flag.js')}}"></script>
    <script src="{{url('public/assets/js/scroll.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 150,
            duration:950
        });
    </script>


    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI="
      crossorigin="anonymous"
    ></script>
    <script
      language="JavaScript"
      src="http://www.geoplugin.net/javascript.gp"
      type="text/javascript"
    ></script>
    <script src="{{url('public/assets/js/countries.js')}}"></script>
    <script src="{{url('public/assets/js/app.js')}}"></script>
    <!-- <script src="./assets/js/chatbot.js"></script> -->
</body>
</html>