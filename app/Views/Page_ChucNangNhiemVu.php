<head>
    <style>
    /* Global Styles */
    body {
        font-family: 'Arial', sans-serif;
        color: #000;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    .container-nhiemvu {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px;
        background: #ffffff;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
    }

    /* Header Section */
    .block_title-gioi-thieu {
        font-size: 2.5rem;
        font-weight: bold;
        color: #005baf;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 30px;
    }

    /* Contact Info */
    p {
        font-size: 1rem;
        line-height: 1.8;
        margin: 10px 0;
    }

    p a {
        color: #005baf;
        text-decoration: none;
    }

    p a:hover {
        text-decoration: underline;
    }

    ol li {
        margin-bottom: 15px;
        font-size: 1rem;
        line-height: 1.8;
        position: relative;
        padding-left: 30px;
    }

    /* Custom Bullet Points with Animation */
    ol li::before {

        position: absolute;
        left: 0;
        top: 0;

        font-size: 1.5rem;
        animation: pulse 1.5s infinite;
    }

    ul li {
        margin-bottom: 15px;
        font-size: 1rem;
        line-height: 1.8;
        position: relative;
        padding-left: 30px;
        font-weight: 600;
    }

    .card-content ul li::before {
        content: "\25B6";
        /* Use triangle symbol */
        position: absolute;
        left: 0;
        top: 0;
        color: #005baf;
        font-size: 1.2rem;
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.2);
            opacity: 0.7;
        }
    }

    /* Card Layout for Tasks */
    .card-nhiemvu {
        background: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-nhiemvu:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #005baf;
        margin-bottom: 15px;
        border-bottom: 1px solid #005baf;
        padding-bottom: 10px;
    }

    .card-content {
        text-align: justify;
        font-size: 1rem;
        line-height: 1.6;
        color: #000;
    }

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
    </style>
</head>

<body>
    <div class="container-nhiemvu">
        <h2 class="heading-title">Chức năng - Nhiệm vụ</h2>
        <div class="card-nhiemvu">
            <div class="card-title">Chức năng:</div>
            <div class="card-content">
                <p>Trung tâm Công nghệ thông tin và Truyền thông là đơn vị sự nghiệp thuộc Sở Thông tin và Truyền thông,
                    với các nhiệm vụ chính:</p>
                <ul class="custom-list">
                    <li>Hỗ trợ quản lý nhà nước về công nghệ thông tin và truyền thông.</li>
                    <li>Quản lý, vận hành trung tâm dữ liệu và hạ tầng kỹ thuật, phục vụ xây dựng Chính quyền điện tử và
                        đô thị thông minh.</li>
                    <li>Đảm bảo an toàn thông tin mạng và ứng cứu sự cố máy tính trong cơ quan nhà nước.</li>
                    <li>Nghiên cứu, xây dựng dự án khoa học công nghệ về thông tin, truyền thông, xuất bản, báo chí.
                    </li>
                    <li>Đào tạo, bồi dưỡng kiến thức công nghệ thông tin và truyền thông.</li>
                    <li>Cung cấp dịch vụ thông tin và truyền thông cho tổ chức, cá nhân.</li>
                </ul>
            </div>
        </div>

        <div class="card-nhiemvu">
            <div class="card-title">Nhiệm vụ, quyền hạn:</div>
            <div class="card-content">
                <ol>
                    <li>Quản lý, vận hành ổn định, an toàn hạ tầng kỹ thuật ứng dụng công nghệ thông tin trong các cơ
                        quan nhà nước thuộc UBND thành phố bao gồm: Trung tâm dữ liệu, hệ thống hội nghị truyền hình
                        trực tuyến; Mạng truyền số liệu chuyên dùng kết nối UBND thành phố đến các sở, ban ngành, UBND
                        quận, huyện, UBND xã, phường, thị trấn; đảm bảo cung cấp ổn định, an toàn các dịch vụ ứng dụng
                        công nghệ thông tin cơ bản cho cán bộ, công chức, viên chức và các cơ quan nhà nước như: hệ
                        thống xác thực (AD), hệ thống thư điện tử công vụ @cantho.gov.vn, hệ thống phân giải tên miền
                        (DNS), lưu ký trang tin điện tử (Webhosting), dịch vụ truy cập internet, hệ thống bảo mật;</li>
                    <li>Quản lý, vận hành, thuê đơn vị bảo trì, nâng cấp các ứng dụng công nghệ thông tin dùng
                        chung của thành phố theo sự phân công của Sở Thông tin và Truyền thông, như: phần mềm quản lý
                        văn bản và điều hành, phần mềm một cửa điện tử, cổng dịch vụ công trực tuyến, các phần mềm nền
                        tảng, cơ sở dữ liệu dùng chung phục vụ xây dựng chính quyền điện tử và phát triển đô thị thông
                        minh và các phần mềm dùng chung khác do UBND thành phố giao Sở Thông tin và Truyền thông chủ trì
                        triển khai.</li>
                    <li>Tham mưu, đề xuất, triển khai, thực hiện các nhiệm vụ, giải pháp nhằm đảm bảo an
                        toàn thông tin trong hoạt động ứng dụng công nghệ thông tin thành phố;</li>
                    <li>Phối hợp, hợp tác, thực hiện nhiệm vụ ứng cứu khẩn cấp sự cố máy tính của thành phố; kiểm
                        tra, giám sát và triển khai các giải pháp đảm bảo an toàn, an ninh thông tin trong hệ thống mạng
                        các cơ quan nhà nước và trung tâm dữ liệu.</li>
                    <li>Tham gia các hoạt động nghiên cứu khoa học, chuyển giao công nghệ, xây dựng kế hoạch, quy hoạch,
                        chính sách về phát triển lĩnh vực công nghệ thông tin và truyền thông.</li>
                    <li>Tham gia các hoạt động nghiên cứu khoa học, chuyển giao công nghệ, xây dựng kế hoạch, quy
                        hoạch, chính sách về phát triển lĩnh vực công nghệ thông tin và truyền thông theo sự
                        phân công của Sở Thông tin và Truyền thông;</li>
                    <li>Nghiên cứu thiết kế, xây dựng, sản xuất, phát triển, ứng dụng các sản phẩm phần
                        mềm, phần cứng phục vụ trong các cơ quan Đảng, nhà nước và tổ chức, cá nhân có nhu
                        cầu;</li>
                    <li>Cung cấp các dịch vụ tư vấn, thẩm tra, đánh giá trong lĩnh vực đầu tư ứng dụng công
                        nghệ thông tin; triển khai phần mềm ứng dụng, gia công sản xuất phần mềm, cung cấp
                        phần mềm thương mại; cung cấp, thi công, lắp đặt, bảo hành, bảo trì hệ thống mạng và các loại
                        thiết bị công nghệ thông tin và truyền thông; cung cấp các dịch vụ thuộc lĩnh vực bưu chính,
                        viễn thông theo quy định của pháp luật;</li>
                    <li>Tổ chức các sự kiện, các hoạt động truyền thông và các dịch vụ quảng cáo thuộc lĩnh vực thông
                        tin và truyền thông. Cung cấp các dịch vụ tổ chức hội thảo, tập huấn về lĩnh vực công nghệ thông
                        tin và truyền thông; cho thuê văn phòng làm việc. Tham gia hỗ trợ và tổ chức thực hiện các hoạt
                        động đổi mới sáng tạo và khởi nghiệp lĩnh vực công nghệ thông tin và truyền thông;</li>
                    <li> Tổ chức và phối hợp với các đơn vị trong và ngoài nước (doanh nghiệp, trường, viện, hiệp hội,…)
                        tổ chức đào tạo, bồi dưỡng, hướng dẫn chuyển giao các giải pháp kỹ thuật, công nghệ, quy trình
                        ứng dụng, kiến thức, kỹ năng công nghệ thông tin; ngoại ngữ chuyên ngành; nghiệp vụ xuất bản,
                        báo chí cho cán bộ, công chức, viên chức và các tổ chức, cá nhân có nhu cầu;</li>
                    <li>Tham gia tư vấn, quản lý, tổ chức thực hiện các dự án đầu tư, hạng mục ứng dụng công
                        nghệ thông tin khi được Sở Thông tin và Truyền thông giao;</li>
                    <li>Hợp tác trong nước, quốc tế về lĩnh vực công nghệ thông tin và truyền thông, theo quy định
                        của pháp luật và có liên quan đến chức năng nhiệm vụ được giao;</li>
                    <li>Tổ chức, quản lý công chức, viên chức và người lao động; tiếp nhận, quản lý và khai thác có hiệu
                        quả tài sản, tài chính của đơn vị theo quy định của pháp luật;</li>
                    <li>Quản lý và chịu trách nhiệm về tài chính, tài sản được giao và tổ chức thực hiện ngân sách được
                        phân bổ theo quy định pháp luật và phân cấp của Sở Thông tin và Truyền thông;</li>
                    <li>Thực hiện chế độ báo cáo định kỳ và báo cáo đột xuất về hoạt động của Trung tâm với Sở Thông tin
                        và Truyền thông, các cơ quan có liên quan theo quy định;</li>
                    <li>Thực hiện các nhiệm vụ khác do Ủy ban nhân dân thành phố và Giám đốc Sở Thông tin và Truyền
                        thông giao.</li>
                </ol>
            </div>
        </div>
    </div>
</body>