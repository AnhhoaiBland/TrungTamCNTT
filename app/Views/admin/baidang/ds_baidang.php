<div class="row">
	<div class="col-md-12">
		<h3>Quản lý bài viết</h3>
	</div>
</div>
<div class="row">
	<div class="col-md-12 bg-white p-2">
		<?php if ($checkQuyen == '1' || $chi_dang_bai == '1') { ?>
			<div class="form-group">
				<a href="admin/add_baidang" class="btn btn-success"><i class="fa fa-plus"></i> Thêm bài viết</a>
			</div>
		<?php } ?>


		<table class="table table-bordered" id="datatable">
			<thead>
				<td>ID</td>
				<td>Tiêu đề</td>
				<td>Người đăng</td>
				<td>Chuyên mục</td>
				<td>Ngày đăng</td>
				<td>Trạng thái duyệt</td>
				<td>người dùng duyệt</td>
				<td>Thời gian duyệt</td>
				<?php if ($checkQuyen == '1'  || $chi_dang_bai == '1') { ?>
					<td>Action</td>
				<?php } ?>

			</thead>
			<tbody>
				<?php $stt = 1;
				foreach ($ds_baidang as $baiviet) : ?>
					<tr data-id="<?= $baiviet['maBaiDang'] ?>">
						<td class="text-right"> <?= $stt++; ?> </td>
						<td>
							<a href="admin/edit_baidang/<?= $baiviet['urlBaiDang'] ?>"> <?= $baiviet['tieuDe'] ?> </a>
						</td>
						<td> <?= $baiviet['tenNguoiDung'] ?> </td>
						<td> <?= $baiviet['tenChuyenMuc'] ?> </td>
						<td> <?= date('d/m/Y', strtotime($baiviet['ngayDang'])) ?> </td>
						<?php if ($baiviet['trangThai'] == '1') { ?>
							<td><a href="javascript:;" class="duyet text-danger">Đang chờ duyệt</a></td>
						<?php } elseif ($baiviet['trangThai'] == '3') { ?>
							<td><a href="javascript:;" class="duyet text-success">Đã cập nhật, đang chờ duyệt</a></td>
						<?php } else { ?>
							<td><a href="javascript:;" class="huy-duyet">Đã duyệt, đang hiển thị</a></td>
						<?php } ?>
						<td> <?= $baiviet['tenNguoiDungDuyet'] ?></td>
						<td>
							<?php if (!empty($baiviet['thoiGianDuyetBai'])) {
								echo date('d/m/Y', strtotime($baiviet['thoiGianDuyetBai']));
							} ?>
						</td>
						<?php if ($checkQuyen == '1' || $chi_dang_bai == '1') { ?>

							<td class="text-right" style="min-width: 100px;">
								<button class="btn btn-warning btnSua" type="submit"><i class="fa fa-edit"></i></button>
								<button class="btn btn-danger btnXoa" type="button"><i class="fa fa-trash"></i></button>
							</td>
						<?php } ?>
					</tr>
				<?php endforeach; ?>
			</tbody>

		</table>
	</div>
</div>


<script>
	$(document).ready(function() {
		$('#datatable').dataTable({
			language: {
				url: "assets/datatable/Vietnamese.json"
			},
			"iDisplayLength": 25,
			columnDefs: [{
				type: 'date-uk',
				targets: 4
			}]
		});


		<?php if ($checkQuyen == '1') { ?>
			$('.duyet').click(function() {
				var row = $(this).parents('tr');
				var id = $(row).attr('data-id');
				Swal.fire({
					title: 'Xác nhận duyệt bài',
					text: "Bạn xác nhận duyệt, và cho phép hiển thị bài đăng này?",
					icon: 'white',
					showCancelButton: true,
					confirmButtonColor: '#d33',
					//cancelButtonColor: '#3085d6',
					confirmButtonText: 'Đồng ý',
					cancelButtonText: 'Không đồng ý',
				}).then((result) => {
					if (result.value) {
						node = $(this);
						$.ajax({
							url: 'admin/ajax_duyetBaiDang',
							type: 'POST',
							data: {
								id: $(node).parents('tr').attr('data-id')
							},
							dataType: 'JSON',
							success: function(result) {

								if (result.status == 'success') {

									Swal.fire(
										'Duyệt thành công',
										result.content,
										result.status,
									);
									window.location.reload();
								} else {
									Swal.fire(
										'Duyệt không thành công',
										result.content,
										result.status,
									);
								}

							},
							error: function(request, status, error) {
								alert("Có lỗi xảy ra trong quá trình xử lý, vui lòng thử lại.")
								console.log(request.responseText, error);
							}
						})

					}
				})

			});


			$('.huy-duyet').click(function() {
				var row = $(this).parents('tr');
				var id = $(row).attr('data-id');
				Swal.fire({
					title: 'Xác nhận hủy duyệt bài đăng này',
					text: "Bạn xác nhận hủy duyệt, và không cho phép hiển thị bài đăng này?",
					icon: 'white',
					showCancelButton: true,
					confirmButtonColor: '#d33',
					//cancelButtonColor: '#3085d6',
					confirmButtonText: 'Đồng ý',
					cancelButtonText: 'Không đồng ý',
				}).then((result) => {
					if (result.value) {
						node = $(this);
						$.ajax({
							url: 'admin/ajax_Huy_duyetBaiDang',
							type: 'POST',
							data: {
								id: $(node).parents('tr').attr('data-id')
							},
							dataType: 'JSON',
							success: function(result) {

								if (result.status == 'success') {

									Swal.fire(
										'Duyệt thành công',
										result.content,
										result.status,
									);
									window.location.reload();
								} else {
									Swal.fire(
										'Duyệt không thành công',
										result.content,
										result.status,
									);
								}

							},
							error: function(request, status, error) {
								alert("Có lỗi xảy ra trong quá trình xử lý, vui lòng thử lại.")
								console.log(request.responseText, error);
							}
						})

					}
				})

			});
		<?php } ?>



		$('.btnSua').click(function() {
			id = $(this).parents('tr').attr('data-id');
			window.location.replace('admin/edit_baidang/' + id);
		});
		$('.btnXoa').click(function() {
			Swal.fire({
				title: 'Xác nhận xóa',
				text: "Bạn có chắc muốn xóa bài viết này?",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#d33',
				//cancelButtonColor: '#3085d6',
				confirmButtonText: 'Xóa',
				cancelButtonText: 'Không xóa',
			}).then((result) => {
				if (result.value) {
					node = $(this);
					$.ajax({
						url: 'admin/del_baidang',
						type: 'POST',
						data: {
							id: $(node).parents('tr').attr('data-id')
						},
						dataType: 'JSON',
						success: function(result) {
							$(node).parents('tr').remove();
							Swal.fire(
								'Đã xóa',
								result.message,
								result.status,
							);
						},
						error: function(request, status, error) {
							alert("Có lỗi xảy ra trong quá trình xử lý, vui lòng thử lại.")
							console.log(request.responseText, error);
						}
					})

				}
			})
		});
	});
</script>