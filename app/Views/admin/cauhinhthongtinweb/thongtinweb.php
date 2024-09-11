<div class="row">
    <div class="col-md-12">
        <h3>Cấu hình thông tin web</h3>
    </div>
</div>
<hr>

<form action="admin/luuthongtinweb" method="post" enctype="multipart/form-data">

    <div class="mb-2">
        <label for="pageHeading" class="form-label">Chữ chạy đầu trang</label>
        <input type="text" class="form-control" value="<?= $Chu_chay ?>" id="pageHeading" name="pageHeading">
    </div>

    <div class="mb-2">
        <div class="row">
            <div class="col-md-3">
                <label for="logo" class="form-label">Logo<i class="text-danger fw-bold text-lg">*</i></label>
                <?php if ($checkQuyen == '1') { ?>
                    <input type="file" class="form-control" id="logo_img" name="logo_img">
                <?php } ?>

            </div>
            <div class="col-md-3">
                <img src="<?= "upload/media/images/" . $logo ?>" style="max-width: 200px; max-height: 200px; object-fit: contain;">
            </div>
        </div>
    </div>

    <div class="mb-2">
        <label for="slogan" class="form-label">Khẩu hiệu<i class="text-danger fw-bold text-lg">*</i></label>
        <input type="text" class="form-control" value="<?= $slogan ?>" id="slogan" name="slogan">
    </div>

    <div class="mb-2">
        <label for="address" class="form-label">Địa chỉ<i class="text-danger fw-bold text-lg">*</i></label>
        <input type="text" class="form-control" id="address" value="<?= $address ?>" name="address">
    </div>

    <div class="mb-2">
        <label for="phoneNumber" class="form-label">Số điện thoại<i class="text-danger fw-bold text-lg">*</i></label>
        <input type="tel" class="form-control" id="phoneNumber" value="<?= $phoneNumber ?>" name="phoneNumber">
    </div>

    <div class="mb-2">
        <label for="email" class="form-label">Email<i class="text-danger fw-bold text-lg">*</i></label>
        <input type="email" class="form-control" id="email" value="<?= $email ?>" name="email">
    </div>

    <div class="mb-2">
        <label for="faxNumber" class="form-label">Số fax<i class="text-danger fw-bold text-lg">*</i></label>
        <input type="tel" class="form-control" id="faxNumber" value="<?= $faxNumber ?>" name="faxNumber">
    </div>

    <div class="mb-2">
        <label for="facebook" class="form-label">Facebook</label>
        <input type="url" class="form-control" id="facebook" value="<?= $facebook ?>" name="facebook">
    </div>

    <div class="mb-2">
        <label for="map" class="form-label">Bản đồ<i class="text-danger fw-bold text-lg">*</i></label>
        <input type="text" class="form-control" id="map" value=" <?= htmlspecialchars(str_replace('  ', '', $map)) ?>" name="map">
    </div>

    <div class="mb-2">
        <label for="responsiblePerson" class="form-label">Người chịu trách nhiệm <i class="text-danger fw-bold text-lg">*</i></label>
        <input type="text" class="form-control" id="responsiblePerson" value="<?= $responsiblePerson ?>" name="responsiblePerson">
    </div>

    <div class="mb-2 mt-3">
        <label for="responsiblePerson" class="form-label">Hiển thị Block</label>
        <div class="form-check">
            <input class="form-check-input" name="showTVAnh" type="checkbox" <?= $showTVAnh ? 'checked' : '' ?> value="" id="flexCheckChecked1">
            <label class="form-check-label" for="flexCheckChecked1">
                hiển thị thư viện ảnh
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="showTVVideo" type="checkbox" <?= $showTVVideo ? 'checked' : '' ?> value="" id="flexCheckChecked2">
            <label class="form-check-label" for="flexCheckChecked2">
                hiển thị thư viện video
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="showThuGopY" <?= $showThuGopY ? 'checked' : '' ?> type="checkbox" value="" id="flexCheckChecked3">
            <label class="form-check-label" for="flexCheckChecked3">
                hiển thị trả lời thư góp ý
            </label>
        </div>
    </div>

    <div class="mb-2">
        <label for="responsiblePerson" class="form-label">Liên kết đến các trang<i class="text-danger fw-bold text-lg">*</i></label>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tên liên kết</th>
                        <th>Đường dẫn liên kết</th>
                        <?php if ($checkQuyen == '1') { ?>
                            <th>Action</th>
                        <?php } ?>

                    </tr>
                </thead>
                <tbody id="table_main">
                    <?php
                    if (!empty($banLienKet)) {
                        foreach ($banLienKet as $key => $value) {
                    ?>
                            <tr>
                                <td><?= str_replace('{"', '', $key) ?></td>
                                <td><?= str_replace('"}', '', $value) ?></td>
                                <?php if ($checkQuyen == '1') { ?>
                                    <td>
                                        <span id="xoa" class="btn btn-danger">Xóa</span>
                                        <span id="sua" class="btn btn-primary">Sửa</span>
                                    </td>
                                <?php } ?>

                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php if ($checkQuyen == '1') { ?>
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="form-label">Thêm liên kết trang</label>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="tenLienKet" placeholder="Tên liên kết" name="tenLienKet">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="duongDan" placeholder="Đường dẫn liên kết" name="duongDan">
                        </div>
                        <div class="col-md-1">
                            <span class="btn btn-success" id="appLienKet">Thêm liên kết</span>
                            <span class="btn btn-success" id="capNhatLienKet">Cập nhật</span>
                        </div>
                    </div>
                </div>

            </div>
        <?php } ?>

    </div>
    <?php if ($checkQuyen == '1') { ?>
        <div class="mt-5">
            <div class="row">
                <div class="col-md-3"><button class="btn btn-danger" type="submit">Cập nhật thông tin</button></div>
            </div>
        </div>
    <?php } ?>


</form>

<script>
    $(document).ready(function() {
        $('#tenLienKet').on('input', function() {
                let value = $(this).val();
                // Loại bỏ tất cả dấu phẩy trong giá trị của input
                value = value.replace(/,/g, '');
                $(this).val(value);
            });

        $('#capNhatLienKet').hide();
        let tableBody = $('#table_main');

        $('#appLienKet').click(function() {
            let tenLK = $('#tenLienKet').val();
            let duongDanLK = $('#duongDan').val();

            let newRow = $('<tr>').append(
                $('<td>').text(tenLK),
                $('<td>').text(duongDanLK),
                $('<td>').append(
                    $('<span>').attr('id', 'xoa').addClass('btn btn-danger').text('Xóa'),
                    $('<span>').attr('id', 'sua').addClass('btn btn-primary').text('Sửa')
                )
            );

            tableBody.append(newRow);
            $('#tenLienKet').val("");
            $('#duongDan').val("");
        });


        $(document).on('click', '#xoa', function() {
            let currentRow = $(this).closest('tr');
            currentRow.remove();
        });

        $(document).on('click', '#sua', function() {
            let currentRow = $(this).closest('tr');

            let tenLienKet = currentRow.find('td:eq(0)').text();
            let duongDanLK = currentRow.find('td:eq(1)').text();

            $('#tenLienKet').val(tenLienKet);
            $('#duongDan').val(duongDanLK);

            $('#appLienKet').hide();
            $('#capNhatLienKet').show();

            $('#capNhatLienKet').data('currentRow', currentRow);
        });

        $(document).on('click', '#capNhatLienKet', function() {
            let currentRow = $('#capNhatLienKet').data('currentRow');

            currentRow.find('td:eq(0)').text($('#tenLienKet').val());
            currentRow.find('td:eq(1)').text($('#duongDan').val());

            $('#capNhatLienKet').hide();
            $('#appLienKet').show();

            $('#capNhatLienKet').removeData('currentRow');
            $('#tenLienKet').val("");
            $('#duongDan').val("");
        });



        function gatherFormData() {
            let formData = {
                'pageHeading': $('#pageHeading').val(),
                'slogan': $('#slogan').val(),
                'address': $('#address').val(),
                'phoneNumber': $('#phoneNumber').val(),
                'email': $('#email').val(),
                'faxNumber': $('#faxNumber').val(),
                'facebook': $('#facebook').val(),
                'map': $('#map').val(),
                'responsiblePerson': $('#responsiblePerson').val(),
                'tableData': [] // Mảng dữ liệu từ bảng
            };

            $('#table_main tr').each(function() {
                let rowData = {
                    'tenLienKet': $(this).find('td:eq(0)').text(),
                    'duongDanLK': $(this).find('td:eq(1)').text()
                };
                formData.tableData.push(rowData);
            });

            return JSON.stringify(formData);
        }


        // Gửi dữ liệu JSON lên server khi form được gửi
        $('form').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            // Create FormData object to gather all form data
            let formData = new FormData(this);
            // Append additional data to FormData if needed
            formData.append('pageHeading', $('#pageHeading').val());
            formData.append('slogan', $('#slogan').val());
            formData.append('address', $('#address').val());
            formData.append('phoneNumber', $('#phoneNumber').val());
            formData.append('email', $('#email').val());
            formData.append('faxNumber', $('#faxNumber').val());
            formData.append('facebook', $('#facebook').val());
            formData.append('map', $('#map').val());
            formData.append('responsiblePerson', $('#responsiblePerson').val());

            // Append logo file to FormData
            let logoFile = $('#logo_img')[0].files[0];
            formData.append('logo_img', logoFile);

            let tableData = [];
            $('#table_main tr').each(function() {
                let rowData = {};
                let columns = $(this).find('td');
                let key = $(columns[0]).text().trim();
                let value = $(columns[1]).text().trim();
                rowData[key] = value;
                tableData.push(rowData);
            });
            formData.append('tableData', JSON.stringify(tableData));


            $.ajax({
                type: 'POST',
                url: '<?= base_url('admin/luuthongtinweb') ?>',
                data: formData,
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Prevent jQuery from setting contentType
                success: function(response) {
                    // Handle success
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                    window.location.reload();
                }
            });
        });

    })
</script>