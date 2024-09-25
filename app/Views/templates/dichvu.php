<?php
// Mảng chứa tên dịch vụ và đường dẫn tương ứng
$services = [
    ['name' => 'Web Development', 'url' => 'web-development'],
    ['name' => 'SEO Services', 'url' => 'seo-services'],
    ['name' => 'Digital Marketing', 'url' => 'digital-marketing'],
    ['name' => 'Graphic Design', 'url' => 'graphic-design'],
];

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
/* CSS cho danh sách dịch vụ */
#servicesList {
    width: 100%;
    margin: 20px auto;
    padding: 0;
    list-style-type: none; /* Loại bỏ bullet points */
}

/* Chỉnh sửa để background không bị chia cắt */
.service-item {

    display: flex;
    align-items: center;
    min-width:500px;
    background-color: #f9f9f9; /* Màu nền cho các mục */
    border-radius: 0; /* Loại bỏ góc bo tròn giữa các mục */
    padding: 15px;
    transition: background-color 0.3s ease;
    border-top: 1px solid #e0e0e0; /* Đường viền giữa các mục */
}

.service-item:first-child {
    border-top: none; /* Loại bỏ đường viền trên của mục đầu tiên */
}

.service-item:hover {
    background-color: #e9ecef; /* Màu khi hover */
}

/* Điều chỉnh icon và tiêu đề */
.service-icon {
    font-size: 24px;
    color: #033e8c;
    margin-right: 15px;
}

.service-title {
    font-size: larger;
    font-weight: 700;
    color: #333;
}

.service-title a {
    text-decoration: none;
    color: inherit;
    transition: color 0.3s ease;
}

.service-title a:hover {
    color: #033e8c; /* Màu khi hover vào link */
}

.title-dv {
    margin-top:10px;
    margin-left: 25px;
    background-color: #033e8c; /* Blue background color */
    color: white; /* White text color */
    border-radius: 8px; /* Rounded corners */
    padding: 10px; /* Optional padding for better appearance */
    width: fit-content;
    font-size: larger;
    font-weight: 700;
}

    </style>
</head>
<body>



<ul id="servicesList">
<h3 class="title-dv">CÁC DỊCH VỤ</h3>
    <li class="service-item">
        <i class="service-icon fas fa-tools"></i> <!-- Icon -->
        <div class="service-title">
            <a href="#">Bảo trì, nâng cấp hệ thống Công nghệ thông tin - Truyền Thông</a>
        </div>
    </li>
    <li class="service-item">
        <i class="service-icon fas fa-graduation-cap"></i> <!-- Icon -->
        <div class="service-title">
            <a href="#">Đào tạo nguồn nhân lực Công nghệ thông tin - Truyền Thông</a>
        </div>
    </li>
    <li class="service-item">
        <i class="service-icon fas fa-drafting-compass"></i> <!-- Icon -->
        <div class="service-title">
            <a href="#">Tư vấn, thiết kế, giám sát và thi công</a>
        </div>
    </li>
    <li class="service-item">
        <i class="service-icon fas fa-server"></i> <!-- Icon -->
        <div class="service-title">
            <a href="#">Cho thuê hosting</a>
        </div>
    </li>
    <li class="service-item">
        <i class="service-icon fas fa-desktop"></i> <!-- Icon -->
        <div class="service-title">
            <a href="#">Thiết kế, quản trị Website</a>
        </div>
    </li>
    <li class="service-item">
        <i class="service-icon fas fa-video"></i> <!-- Icon -->
        <div class="service-title">
            <a href="#">Hội nghị truyền hình</a>
        </div>
    </li>
    <li class="service-item">
        <i class="service-icon fas fa-calendar-alt"></i> <!-- Icon -->
        <div class="service-title">
            <a href="#">Tổ chức sự kiện</a>
        </div>
    </li>
</ul>
    



<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
