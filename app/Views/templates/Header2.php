<head>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
 /* Đặt màu nền của thanh menu là trắng */
.mainmenu {
    background-color: #fff; /* Màu nền trắng của thanh menu */
    position: relative; /* Đặt position relative cho thanh menu lớn */
}

/* Đặt màu chữ trong menu là đen */
.nav-link {
    color: #000; /* Màu chữ đen */
}

/* Đặt màu nền của menu con và màu chữ */
.nav-item .dropdown-menu {
    background-color: #fff; /* Màu nền trắng của menu con */
    color: #000; /* Màu chữ đen trong menu con */
    display: none; /* Ẩn menu con mặc định */
    position: absolute; /* Đặt vị trí tuyệt đối để menu con xuất hiện dưới menu lớn */
    top: 100%; /* Đặt menu con ngay dưới menu lớn */
    left: 0; /* Canh lề trái */
    width: 100%; /* Chiếm toàn bộ chiều rộng của menu lớn */
    z-index: 1000; /* Đặt chỉ số z để đảm bảo menu con hiển thị trên các phần tử khác */
}

/* Đặt màu chữ và nền của mục menu con khi hover */
.nav-item .dropdown-item {
    color: #000; /* Màu chữ đen trong mục menu con */
}

.nav-item .dropdown-item:hover {
    background-color: #cce5ff; /* Màu nền khi hover xanh dương nhạt */
    color: #000; /* Màu chữ khi hover vẫn là đen */
}

/* Hiển thị menu con khi di chuột qua bất kỳ mục menu lớn nào */
.nav-item:hover .dropdown-menu {
    display: block; /* Hiển thị menu con khi hover */
}

/* Đặt màu nền khi hover cho các mục menu lớn */
.nav-link:hover,
.nav-item:hover > .nav-link {
    background-color: #cce5ff; /* Màu nền khi hover giống như menu con */
    color: #000; /* Màu chữ khi hover vẫn là đen */
}

/* Đảm bảo dropdown không bị ẩn khi di chuột ra ngoài */
.dropdown-menu {
    padding: 0.5rem;
    border-radius: 0.25rem;
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.nav-link i {
    margin-right: 8px;
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

    <div style="background-color: #fff">

        <!-- slide -->
        <?= $this->renderSection('templates/slide') ?>
        <!-- end slide -->

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
                                    <li><a class="text-white fw-bold" href="<?=base_url()?>index_v2"><img style="width: 30px;" src="<?= base_url("public/icons/logoctict.jpg") ?>" alt=""></a></li>

                                    <li><a class="text-dark fw-bold nav-link" href="#"><i class="fas fa-home"></i> Trang Chủ</a></li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-info-circle"></i> Giới Thiệu
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Giới thiệu chung</a></li>
                                            <li><a class="dropdown-item" href="#">Chức năng - Nhiệm vụ</a></li>
                                            <li><a class="dropdown-item" href="#">Cơ cấu tổ chức</a></li>
                                            <li><a class="dropdown-item" href="#">Lĩnh vực hoạt động</a></li>
                                            <li><a class="dropdown-item" href="#">Các đối tác</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="text-dark fw-bold nav-link" href="#"><i class="fas fa-newspaper"></i> Tin tức - Sự Kiện</a></li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="navbarDropdown2" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-concierge-bell"></i> Dịch Vụ
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
                                            <i class="fas fa-book"></i> Tài Liệu Tham Khảo
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                            <li><a class="dropdown-item" href="#">PCTN, THTK, CLP</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="text-dark fw-bold nav-link" href="#"><i class="fas fa-comment"></i> Góp Ý</a></li>
                                    <li><a class="text-dark fw-bold nav-link" href="#"><i class="fas fa-phone-alt"></i> Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- menu area end -->
    </div>
</body>
