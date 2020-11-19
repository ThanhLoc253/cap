<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{url('public/homepage/css/map/map.css')}}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="target-densitydpi=device-dpi">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('public/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('public/admin/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('public/admin/dist/css/adminlte.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('public/admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{url('public/homepage/css/bases/base.css')}}">
    <link rel="stylesheet" href="{{url('public/homepage/css/mains/main.css')}}">
    <link rel="stylesheet" href="{{url('public/homepage/fonts/fontawesome-free-5.14.0-web/css/all.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
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
                        <a href="#" class="header__navbar-menu-item ">Trang Chủ</a>
                        <a href="#" class="header__navbar-menu-item">Tin Tức</a>
                        <a href="#" class="header__navbar-menu-item">Văn Bản</a>
                        <a href="{{url('/maps')}}" class="header__navbar-menu-item nav-link @yield('maps')">
                    Bản Đồ Dịch</a>
                        <div class="header__navbar-menu-animation start-home"></div>
                    </ul>
                </div>
            </nav>
            @yield('content')
            <style>
                .mapboxgl-popup {
                    max-width: 400px;
                    font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
                }
            </style>
            @yield('script')
        </header>
                <!-- ==================================start footer====================================== -->
                <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-4 left-col">
                        <div class="difine">
                            <div class="flag flag-bottom">
                                <div class="vn-flag">
                                    <div class="vn-flag-item" style="animation-delay: -6s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.06s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.12s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.18s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.24s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.3s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.36s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.42s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.48s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.54s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.6s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.66s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.72s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.78s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.84s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.9s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -6.96s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.02s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.08s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.14s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.2s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.26s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.32s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.38s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.44s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.5s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.56s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.62s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.68s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.74s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.8s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.86s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.92s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -7.98s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.04s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.1s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.16s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.22s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.28s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.34s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.4s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.46s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.52s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.58s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.64s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.7s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.76s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.82s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.88s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -8.94s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.06s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.12s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.18s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.24s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.3s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.36s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.42s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.48s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.54s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.6s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.66s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.72s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.78s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.84s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.9s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -9.96s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.02s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.08s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.14s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.2s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.26s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.32s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.38s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.44s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.5s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.56s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.62s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.68s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.74s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.8s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.86s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.92s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -10.98s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.04s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.1s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.16s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.22s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.28s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.34s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.4s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.46s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.52s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.58s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.64s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.7s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.76s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.82s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.88s;"></div>
                                    <div class="vn-flag-item" style="animation-delay: -11.94s;"></div>
                                    <div class="vn-flag-start">
                                        <img src="{{url('public/homepage/img/Plain_Yellow_Star.png')}}" alt="">
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
                                <p class="social-media-text footer__text">Võ Thành Lộc
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
                <p>© 2020 Created By THLN Group.</p>
            </div>
            
            <div class="img-virus-4-bottom">
                <img src="{{url('public/homepage/img/virus2.png')}}" alt="">
            </div> 
        </footer>
        <!-- ======================================end footer==================================== -->
    </div>
    <script src="{{url('public/homepage/js/flag.js')}}"></script>
    <script src="{{url('public/admin/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{url('public/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="{{url('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{url('public/admin/plugins/chart.js/Chart.min.js')}}"></script>

    <script src="{{url('public/admin/plugins/sparklines/sparkline.js')}}"></script>

    <script src="{{url('public/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

    <script src="{{url('public/admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{url('public/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{url('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>


    <script src="{{url('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

    <script src="{{url('public/admin/dist/js/adminlte.js')}}"></script>

    <script src="{{url('public/admin/dist/js/demo.js')}}"></script>


    <script src="{{url('public/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
    <script>
    var myLandbot = new Landbot.Livechat({
        configUrl: 'https://chats.landbot.io/v3/H-755063-E077DJ6CRREG4QN7/index.json',
    });
    </script>
    <!--Start of Tawk.to Script-->
    <!-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fb3dbdb3e20f61525e447b2/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script> -->
<!--End of Tawk.to Script-->
</body>

</html>