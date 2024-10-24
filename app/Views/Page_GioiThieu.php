<head>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            color: #000;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1800px;
            margin: 0 auto;
            padding: 10px;
            position: relative;
        }

        /* Header Section */
        .block_title-gioi-thieu {
            font-size: 2.5rem;
            font-weight: bold;
            color: #005baf; /* Matching the CTICT blue logo color */
            text-transform: uppercase;
            position: relative;
            z-index: 2;
        }

        h1.block_title-gioi-thieu {
            margin-top: 0;
        }

        h3.block_title-gioi-thieu {
            font-size: 1.6rem;
            color: #000;
            position: relative;
            z-index: 2;
        }

        /* Contact Info */
        p {
            font-size: 18px;
            line-height: 1.8;
            margin: 10px 0;
            position: relative;
            z-index: 2;
        }

        p a {
            color: #005baf;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        /* Content Section */
        .heading-title {
            font-weight: bold;
            margin-top: 0;
            text-align: left;
            border-bottom: 2px solid #005baf;
            padding-bottom: 10px;
            font-style: italic;
            font-size: 1.8rem;
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 20px;
            color: #005baf;
        }
        .introduction-text {
            font-size: 18px;
            line-height: 2;
            color:  #000;
            position: relative;
            z-index: 2;
        }

        /* Image Styles */
        .gioithieu {
            max-width: 100%;
            height: auto;
            border: 3px solid #005baf; /* Adding blue border */
            border-radius: 3px; /* Optional: rounded corners */
            transition: transform 0.3s ease; /* Transition for hover effect */
            position: relative;
            z-index: 2;
        }

        .gioithieu:hover {
            transform: scale(1.05); /* Zoom in effect on hover */
        }

        /* Animation Styles */
        .animated-section {
            opacity: 0;
            transform: translateX(-50px);
            animation: slideIn 1s forwards;
            position: relative;
            z-index: 2;
        }

        .animated-section:nth-child(even) {
            transform: translateX(50px);
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Background Styles */
        .background-tech {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://i.pinimg.com/enabled_lo/564x/64/2f/3b/642f3bf4fb3bae7da9ab25466ddc612c.jpg'); /* Replace with the actual URL of the background image */
            background-size: cover;
            background-position: center;
            opacity: 0.08;
            z-index: 1;
        }
        .p-content{
            font-size: 1.5rem;
            text-align: justify;
            font-weight: 500;
            color: #006494;
        }
    </style>
</head>

<body>
<div class="container p-4 bg-body">
    <div class="background-tech"></div>
    <!-- Header Section -->
    <div class="row animated-section">
        <div class="col-md-12 text-center">
            <h1 class="block_title-gioi-thieu mt-3">SỞ THÔNG TIN VÀ TRUYỀN THÔNG THÀNH PHỐ CẦN THƠ</h1> <br>
            <h3 class="block_title-gioi-thieu">TRUNG TÂM CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG THÀNH PHỐ CẦN THƠ</h3>
            <hr style="border: 1px solid #0000; width: 80%; margin: 0 auto;">
            <p>Trụ sở chính: Số 29 Cách Mạng Tháng 8, Phường Thới Bình, Quận Ninh Kiều, TPCT</p>
            <p>ĐT: 0292 3 690 888 | Fax: 08 07 12 13 | Website: <a href="http://ctict.cantho.gov.vn">http://ctict.cantho.gov.vn</a> | Email: <a href="mailto:ctict@cantho.gov.vn">ctict@cantho.gov.vn</a></p>
        </div>
    </div>

    <!-- Introduction Section with Image and Text -->
    <div class="row mt-5 animated-section">
        <h2 class="heading-title">Giới thiệu chung</h2>
        <div class="col-md-4 text-center">
            <img class="gioithieu" src="<?= base_url('public/upload/media/images/ctict_2024_resize.png') ?>" alt="CTICT Building">
        </div>
        <div class="col-md-8" style="text-align: justify;">
            <p class="p-content">
                Trung tâm Công nghệ thông tin và Truyền thông là đơn vị sự nghiệp trực thuộc Sở Thông tin và Truyền thông, có chức năng giúp Giám đốc Sở thực hiện các nhiệm vụ sự nghiệp phục vụ cho công tác quản lý nhà nước về công nghệ thông tin và truyền thông trên địa bàn thành phố.
            </p>
        </div>
    </div>

    <div class="row mt-5 animated-section">
        <div class="col-md-8" style="text-align: justify;">
            <p class="p-content">
                Trung tâm trực tiếp quản lý, vận hành trung tâm dữ liệu, hạ tầng kỹ thuật công nghệ thông tin các ứng dụng và cơ sở dữ liệu dùng chung của Ủy ban nhân dân thành phố phục vụ cho việc xây dựng Chính quyền điện tử thành phố và phát triển đô thị thông minh.
            </p>
        </div>
        <div class="col-md-4 text-center">
            <img class="gioithieu" src="<?= base_url('public/upload/media/images/ctict_2024_resize.png') ?>" alt="CTICT Building">
        </div>
    </div>

    <div class="row mt-5 animated-section">
        <div class="col-md-4 text-center">
            <img class="gioithieu" src="<?= base_url('public/upload/media/images/ctict_2024_resize.png') ?>" alt="CTICT Building">
        </div>
        <div class="col-md-8" style="text-align: justify;">
            <p class="p-content">
                Trung tâm Công nghệ thông tin và Truyền thông là đơn vị sự nghiệp có thu, được ngân sách đảm bảo một phần chi phí hoạt động thường xuyên, có tư cách pháp nhân, được phép sử dụng con dấu và tài khoản riêng.
            </p>
        </div>
    </div>

    <!-- Mission and Vision Section -->
    <div class="row mt-4 animated-section">
        <div class="col-md-12">
            <h2 class="heading-title">Tầm nhìn và Sứ mệnh</h2>
            <p class="introduction-text">
                Trung tâm Công nghệ Thông tin và Truyền thông thành phố Cần Thơ là một đơn vị chủ chốt trong việc thúc đẩy sự phát triển và ứng dụng công nghệ thông tin vào quản lý và sản xuất, góp phần xây dựng thành phố thông minh, phát triển bền vững.
            </p>
        </div>
    </div>

    <!-- Footer or Contact Information -->
    <div class="row mt-4 animated-section">
        <div class="col-md-12 text-left">
            <p><b>Tên giao dịch:</b> Trung tâm Công nghệ thông tin và Truyền thông Cần Thơ</p>
            <p><b>Tên giao dịch quốc tế:</b> Cantho Information and Communication Technology Center (CTICT)</p>
        </div>
    </div>
</div>
</body>
