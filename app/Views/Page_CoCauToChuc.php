<head>
    <style>
        /* RESET STYLES & HELPER CLASSES */
        :root {
            --level-1: #13293d;
            --level-2: #247ba0;
            --level-3: #006494;
            --level-4: #f27c8d;
            --black: black;
            --font-family: 'Roboto', sans-serif;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        ol {
            list-style: none;
        }

        p {
            font-weight: 500;
        }

        b {
            color: #1b98e0;
        }

        body {
            margin: 50px 0 100px;
            text-align: center;
            font-family: var(--font-family);
            background: #f4f4f9;
        }

        .container {
            max-width: 1200px;
            padding: 0 10px;
            margin: 0 auto;
        }

        .rectangle {
            font-size: 14px;
            position: relative;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            word-wrap: break-word;
            background-color: #fff;
            margin-bottom: 20px;
            min-height: 50px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .rectangle:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        h2, h3, h4 {
            color: #fff;
            text-align: center;
        }

        .level-1 {
            width: 80%;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, var(--level-1), var(--level-2));
        }

        .level-2-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .level-2 {
            width: 100%;
            background: linear-gradient(135deg, var(--level-2), var(--level-3));
        }

        .level-3-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .level-3 {
            width: 100%;
            background: linear-gradient(135deg, var(--level-3), var(--level-4));
        }

        .heading-title {
            font-weight: bold;
            margin-top: 0;
            text-align: left;
            border-bottom: 2px solid #005baf;
            padding-bottom: 10px;
            font-style: italic;
            font-size: 1.8rem;
            margin-top: 30px;
            margin-bottom: 20px;
            color: #005baf;
        }

        /* Navigation Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: var(--level-1);
            padding: 10px 20px;
            color: #fff;
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar ul {
            display: flex;
            list-style: none;
        }

        .navbar ul li {
            margin: 0 10px;
        }

        .navbar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
        }

        .navbar .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .navbar .menu-toggle div {
            width: 25px;
            height: 3px;
            background-color: #fff;
            margin: 4px 0;
        }

        @media screen and (max-width: 700px) {
            .rectangle {
                padding: 20px 10px;
            }

            .level-1,
            .level-2,
            .level-3 {
                width: 100%;
            }

            .level-2-wrapper,
            .level-3-wrapper {
                display: block;
                margin: 0 auto;
            }

            .level-2-wrapper li,
            .level-3-wrapper li {
                margin-bottom: 20px;
            }

            .navbar ul {
                display: none;
                flex-direction: column;
                width: 100%;
                text-align: center;
            }

            .navbar ul.active {
                display: flex;
            }

            .navbar .menu-toggle {
                display: flex;
            }
        }
    </style>
</head>

<body>
   
    <div class="container p-4 bg-body">
        <h2 class="heading-title">Cơ cấu tổ chức</h2>
        <h2 class="level-1 rectangle">GIÁM ĐỐC TRUNG TÂM</h2>
        <p style="color:#fff" class="level-1 rectangle">
            <b>Ông:</b> Nguyễn Văn An<br>
            <b>Email:</b> nguyenvanan@cantho.gov.vn<br>
            <b>Số điện thoại:</b> (0292) 3.751.567
        </p>
        <ol class="level-2-wrapper">
            <li>
                <h2 class="level-2 rectangle">PHÓ GIÁM ĐỐC</h2>
                <p class="rectangle">
                    <b>Ông:</b> Thái Văn Lượng<br>
                    <b>Email:</b> thaivanluong@cantho.gov.vn<br>
                    <b>Số điện thoại:</b> (0292) 3.690.699
                </p>
                <ol class="level-3-wrapper">
                    <li>
                        <h3 class="level-3 rectangle">PHÒNG<br>Hành Chính Đào Tạo</h3>
                        <p class="rectangle">
                            <b>Bà:</b> Trương Anh Thảo<br>
                            <b>Chức vụ:</b> Trưởng phòng<br>
                            <b>Email:</b> anhthao@cantho.gov.vn<br>
                            <b>Số điện thoại:</b> (0292) 3761937
                        </p>
                    </li>
                    <li>
                        <h3 class="level-3 rectangle">PHÒNG<br>Hạ Tầng Kỹ Thuật</h3>
                        <p class="rectangle">
                            <b>Ông:</b> Mai Tấn Lộc<br>
                            <b>Chức vụ:</b> Trưởng phòng<br>
                            <b>Email:</b> mtloc@cantho.gov.vn<br>
                            <b>Số điện thoại:</b> (08) 07.12.14
                        </p>
                    </li>
                </ol>
            </li>
            <li>
                <h2 class="level-2 rectangle">PHÓ GIÁM ĐỐC</h2>
                <p class="rectangle">
                    <b>Ông:</b> Nguyễn Như Tuấn<br>
                    <b>Email:</b> nhutuan@cantho.gov.vn<br>
                    <b>Số điện thoại:</b> (08) 07.12.14
                </p>
                <ol class="level-3-wrapper">
                    <li>
                        <h3 class="level-3 rectangle">PHÒNG<br>Ứng dụng công nghệ thông tin</h3>
                        <p class="rectangle">
                            <b>Bà:</b> Nguyễn Thị Minh Tâm<br>
                            <b>Chức vụ:</b> Phó trưởng phòng<br>
                            <b>Email:</b> ntmtam@cantho.gov.vn<br>
                            <b>Số điện thoại:</b> (0292) 3762333
                        </p>
                    </li>
                    <li>
                        <h3 class="level-3 rectangle">PHÒNG<br>Ứng dụng công nghệ thông tin</h3>
                        <p class="rectangle">
                            <b>Ông:</b> Huỳnh Trung Long<br>
                            <b>Chức vụ:</b> Trưởng phòng<br>
                            <b>Email:</b> htlong@cantho.gov.vn<br>
                            <b>Số điện thoại:</b> (0292) 3762333
                        </p>
                    </li>
                </ol>
            </li>
        </ol>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.navbar ul');
            menu.classList.toggle('active');
        }
    </script>
</body>