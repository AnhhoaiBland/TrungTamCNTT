<head>
    <style>
       
/* Container styling */
.container {
    border-radius: 8px;
    padding: 20px;
}

/* Block Title Styling */
.block_title-gop-y {
    font-size: 25px; /* Larger font size for emphasis */
    font-weight: bold;
    color: darkblue; /* Bright blue for accent */
    text-transform: uppercase; /* Capital letters for a more modern look */
    line-height: 1.5; /* Better spacing between lines */
    margin-bottom: 20px;
    padding: 10px 0; /* Added padding for top and bottom */
}

/* Text styling */
.text-body {
    font-size: 16px;
    color: #555555; /* Modern gray tone */
}

/* Input field styles */
.form-control.custom-input {
    border-radius: 8px;
    border: 1px solid #ced4da;
    padding: 10px;
    font-size: 16px;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
}

.form-control.custom-input:focus {
    border-color: #80bdff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

/* Button styling */
.btn-success {
    background-color: #28a745;
    border: none;
    border-radius: 8px;
    padding: 10px 20px;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.btn-success:hover {
    background-color: #218838;
}

/* Form label */
.form-label {
    font-weight: bold;
    color: darkblue; /* Accent color */
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .block_title {
        font-size: 22px; /* Smaller font size for mobile devices */
    }

    .form-control.custom-input {
        font-size: 14px;
    }
}

    </style>
</head>

<div class="container p-4 bg-body">
    <div class="row">
        <div class="col-md-12 text-center">
            <span class="block_title-gop-y">THƯ GÓP Ý TRUNG TÂM CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG THÀNH PHỐ CẦN THƠ</span>
        </div>
        <div class="col-md-10 mt-5">
            <p class="text-body">Địa chỉ: <b>Số 29 đường Cách mạng tháng 8 - phường Thới Bình - quận Ninh Kiều - TP.Cần Thơ.</b></p>
            <p class="text-body">Số Điện thoại: <b>(0292) 3 690 888 - Fax: 080 72123</b></p>
            <p class="text-body">Email: <b>ctict@cantho.gov.vn</b></p>
            <i class="text-body">Vui lòng điền đầy đủ thông tin bên dưới !</i>
        </div>
    </div>
    <form class="row" action="gop-y/add" method="post">
        <div class="col-md-5">
            <div class="mb-3">
                <input type="text" class="form-control custom-input" name="hoten" id="hoTen" placeholder="Họ và tên">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control custom-input" name="dienThoai" required placeholder="Số điện thoại" id="dienThoai" onkeypress="return onlyNumbers(event)">
                <p id="errorMessage" class="text-danger" style="display: none;">Vui lòng nhập vào là số điện thoại</p>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control custom-input" name="emailgy" id="emailgy" placeholder="Email">
            </div>
        </div>
        <div class="col-md-7">
            <div class="mb-3">
                <input type="text" class="form-control custom-input" name="tieuDe" id="tieuDe" required placeholder="Tiêu đề">
            </div>
            <div class="mb-3">
                <label for="summernote" class="form-label">Nội dung</label>
                <div id="summernote"></div>
                <input type="hidden" name="noiDung">
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
            <button class="btn btn-success fw-bold" type="submit">Gửi thư góp ý</button>
        </div>
    </form>

    <?php if ($showThuGopY) { ?>
    <div class="row pt-3">
        <div class="col-md-12">
            <?php $dtthu['ds_thu_gop_y'] = $ds_thu_gop_y;
            echo view('block/Show_traLoi_thuGopY', $dtthu) ?>
        </div>
    </div>
<?php } ?>
</div>



<script>
    window.addEventListener('DOMContentLoaded', function() {
        var textarea = document.getElementById('noiDung');
        var column = document.querySelector('.noidung');

        function setHeight() {
            textarea.style.height = column.offsetHeight + 'px';
        }

        setHeight();

        window.addEventListener('resize', setHeight);
    });




    function onlyNumbers(event) {
        const key = event.key;

        // Kiểm tra xem ký tự được nhập có phải là số hay không
        if (!/\d/.test(key)) {
            // Nếu không phải số, ngăn người dùng nhập và hiển thị thông báo lỗi
            event.preventDefault();
            document.getElementById("errorMessage").style.display = "block";
            return false;
        } else {
            // Nếu là số, ẩn thông báo lỗi
            document.getElementById("errorMessage").style.display = "none";
            return true;
        }
    }

    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null,
            focus: true,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['Arial', 'Times New Roman', 'Tahoma']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'video', 'table', 'hr']],
                ['view', []]
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                    $('input[name="noiDung"]').val(contents);
                }
            },
        });
    });
    $('#guinoidung').click(function() {
        var markupStr = $('#summernote').summernote('code');
        console.log(markupStr)
    })
</script>