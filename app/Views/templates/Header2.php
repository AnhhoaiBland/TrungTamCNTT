<head>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* CSS cho slide */
        .slide-container {
            width: 100%;
            overflow: hidden;
        }

        .slide {
            width: 100%;
            height: auto;
            display: flex;
        }

        .slide img {
            width: 100%;
            height: auto;
        }

        /* CSS cho đối tác */
        .partners {
            background-color: #f8f9fa; /* Màu nền cho phần đối tác */
            padding: 20px 0;
        }

        .partners .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .partner-item {
            margin: 10px;
            width: 150px; /* Chiều rộng của các phần tử đối tác */
        }

        .partner-item img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <header class="container-fluid nav_top" style="color: #11286e">
        <div class="container-fluid d-flex align-items-center justify-content-end p-3 position-relative" style="height: 40px">
            <marquee style="
                font-size: 15px;    
                width: 100%;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
           " class="element-to-hide-960 text-white position-absolute">TRANG THÔNG TIN ĐIỆN TỬ TRUNG TÂM CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG THÀNH PHỐ CẦN THƠ </marquee>
            <ul class="d-flex list-unstyled align-items-center mt-3 me-3 position-relative">
        </div></ul>
    </header>


    <!-- Slide Section -->
    <div class="slide-container">
        <?= $this->renderSection('templates/slide') ?>
    </div>


    <div style="background-color: #fff">
        <!-- menu -->
        <div class="menubar container">
            <div class="menu_shadow">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="responsive-menu"></div>
                            <div class="mainmenu" style="text-align: center;">
                                <div class="pull-left" id="logo_in_menu"></div>
                                <ul id="primary-menu" class="list-unstyled d-flex justify-content-center mb-0">
                                    <!-- Menu Items -->
                                    <li>
                                <a class="text-white fw-bold" href="<?= base_url() ?>">
                                         <img style="width: 30px;" src="<?= base_url('public/icons/logoctict.png') ?>" alt="Logo">
                                </a>
                                    </li>

                                    <li><a class="text-dark fw-bold nav-link" href="<?= base_url() ?>"><i class=""></i> Trang Chủ</a></li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="" ></i> Giới Thiệu
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Giới thiệu chung</a></li>
                                            <li><a class="dropdown-item" href="#">Chức năng - Nhiệm vụ</a></li>
                                            <li><a class="dropdown-item" href="#">Cơ cấu tổ chức</a></li>
                                            <li><a class="dropdown-item" href="#">Lĩnh vực hoạt động</a></li>
                                            <li><a class="dropdown-item" href="#">Các đối tác</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="text-dark fw-bold nav-link" href="#"><i class=""></i> Tin tức - Sự Kiện</a></li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="navbarDropdown2" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class=""></i> Dịch Vụ
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <li><a class="dropdown-item" href="#">Bảo trì, nâng cấp hệ thống CNTT-TT</a></li>
                                            <li><a class="dropdown-item" href="#">Đào tạo nguồn nhân lực CNTT-TT</a></li>
                                            <li><a class="dropdown-item" href="#">Tư vấn, thiết kế, giám sát và thi công</a></li>
                                            <li><a class="dropdown-item" href="#">Cho thuê hosting</a></li>
                                            <li><a class="dropdown-item" href="#">Thiết kế, quản trị Website</a></li>
                                            <li><a class="dropdown-item" href="#">Hội nghị truyền hình</a></li>
                                            <li><a class="dropdown-item" href="#">Tổ chức sự kiện</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="navbarDropdown3" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class=""></i> Tài Liệu Tham Khảo
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                            <li><a class="dropdown-item" href="#">PCTN, THTK, CLP</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="text-dark fw-bold nav-link" href="gop-y"><i class=""></i> Góp Ý</a></li>
                                    <li><a class="text-dark fw-bold nav-link" href="#"><i class=""></i> Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- menu area end -->
    </div>
</body>
