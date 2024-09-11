<div class="container p-2 bg-body" style="min-height: 100%;">
    <div class="row">
        <div class="col-md-12 p-3" style="text-align: center;">
            <span class="h5 text-body">THƯ GÓP Ý HỘI LIÊN HIỆP PHỤ NỮ THÀNH PHỐ CẦN THƠ</span>
        </div>
        <div class="col-md-10 mb-4">
            <p style="font-size: 15px;" class="text-body m-0">Địa chỉ: Số 26 Trần văn Hoài, phường Xuân
                Khánh,
                quận Ninh Kiều, TP.Cần Thơ</p>
            <p style="font-size: 15px;" class="text-body m-0">Điện thoại: 02923. 820. 883 - Fax:
                02923.820.883
            </p>
            <p style="font-size: 15px;" class="text-body m-0">Vui lòng điền đầy đủ thông tin bên dưới</p>
        </div>
    </div>
    <form class="row" action="gop-y/add" method="post">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <input type="text" class="form-control custom-input" name="hoten" id="hoTen" placeholder="Họ và tên">
                </div>
                <div class="col-md-12 mb-2">
                    <input type="text" class="form-control custom-input" name="dienThoai" required="required" placeholder="Số điện thoại" id="dienThoai" onkeypress="return onlyNumbers(event)">
                    <p id="errorMessage" style="color: red; display: none;">Vui lòng nhập vào là số điện thoại</p>


                </div>
                <div class="col-md-12 mb-2">

                    <input type="email" class="form-control custom-input" id="emailgy" name="emailgy" placeholder="Email">
                </div>

            </div>
        </div>
        <div class="col-md-7 noidung">
            <div class="col-md-12 mb-2">
                <input type="text" class="form-control custom-input" name="tieuDe" id="tieuDe" required="required" placeholder="Tiêu đề">
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Nội dung</label>
                <div id="summernote"></div>
                <input type="hidden" name="noiDung">
                <!-- <textarea type="text" class="form-control custom-input" style="min-height: 100%;" name="noiDung" id="noiDung" required="required" placeholder="Nội dung"></textarea> -->
            </div>
        </div>
        <div class="col-md-12 mt-3" style="text-align: center;">
            <button class="btn btn-success fw-bold" type="submit" style="width: 170px;">Gửi thư góp ý</button>
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
    // $('#guinoidung').click(function() {
    //     var markupStr = $('#summernote').summernote('code');
    //     console.log(markupStr)
    // })
</script>