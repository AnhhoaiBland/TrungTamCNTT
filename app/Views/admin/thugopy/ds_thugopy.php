<div class="row">
	<div class="col-md-12 form-group">
		<h3>Quản lý thư góp ý</h3>
	</div>
</div>
<div class="row ">
	<!-- <div class="col-md-12 form-group">
		<button class="btn btn-success" data-toggle="modal" id="them_user" data-target="#modalAddUser"><i class="fa fa-plus"></i> Thêm tài khoản</button>
	</div> -->
	<div class="col-md-12 bg-white p-2">
		<table class="table" id="datatable">
			<thead>
				<td>STT</td>
				<td>Tiêu đề thư</td>
				<td>Tên người gửi</td>
				<td>Thời gian gửi</td>
				<td>Tình trạng</td>
				<td>người phản hồi thư này</td>
				<td>Hình thức phản hồi thư</td>
				<td>Thời gian phản hồi</td>
				<td>Người duyệt hiển thị</td>
				<td>Thời gian duyệt hiển thị</td>
				<?php if ($checkQuyen == '1') { ?>
					<td>Action</td>
				<?php } ?>

			</thead>
			<tbody>
				<?php
				$stt = 1;
				foreach ($ds_thu as $thugy) : ?>
					<tr data-id="<?= $thugy['maThuGopY'] ?>">
						<td class="text-right"> <?= $stt++; ?> </td>
						<td> <?= $thugy['tieuDe'] ?> </td>
						<td><?= $thugy['hoTen'] ?></td>
						<td><?= $thugy['ngayTao'] ?></td>
						<?php if ($thugy['trangThai'] == '1') { ?>
							<td><a href="javascript:;" class="text-danger">Chưa phản hồi</a></td>
						<?php } elseif ($thugy['trangThai'] == '3') { ?>
							<td><a href="javascript:;" class="duyet text-success">Đã phản hồi "chưa hiển thị công khai"</a></td>
						<?php } else { ?>
							<td><a href="javascript:;" class="huy-duyet">Đã phản hồi, đang hiển thị</a></td>
						<?php } ?>
						<td><?= $thugy['tenNguoiDungPhanHoi'] ?></td>
						<td><?= $thugy['dangPhanHoi'] == 'em' ? "Email" : ($thugy['dangPhanHoi'] == 'sms' ? "Tin nhắn điện thoại" : ($thugy['dangPhanHoi'] == 'call' ? "Gọi trực tiếp" : "Zalo")) ?></td>
						<td><?= $thugy['thoiGianPhanHoi'] ?></td>
						<td><?= $thugy['tenNguoiDungDuyet'] ?> </td>
						<td><?= isset($thugy['thoiGianDuyet']) ? date('d/m/Y', strtotime($thugy['thoiGianDuyet'])) : "" ?></td>
						<?php if ($checkQuyen == '1') { ?>
							<td class="text-right" style="min-width: 100px;">
								<!-- <button class="btn btn-warning btnSua"><i class="fa fa-edit"></i></button> -->
								<a class="btn btn-primary" href=<?php echo base_url("admin/view_thugopy/{$thugy['maThuGopY']}") ?> style="color: white;" type="button"><i class="fa fa-eye"></i></a>
								<button class="btn btn-danger btnXoa"><i class="fa fa-trash"></i></button>
							</td>
						<?php } ?>

					</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
	</div>
</div>
<?php echo view('admin/thugopy/chitietthugopy'); ?>

<script>
	// $('#them_user').click(function() {
	// 	let seleLoaiND = $('#dsloaitaikhoan');
	// 	$.ajax({
	// 		url: 'admin/ajax_laydsthugopy',
	// 		type: 'GET',
	// 		dataType: 'JSON',
	// 		success: function(response) {
	// 			if (response.status === 'success') {
	// 				// Xóa các option cũ trong select trước khi thêm mới
	// 				seleLoaiND.empty();

	// 				// Duyệt qua mảng dữ liệu và thêm option vào select
	// 				response.dataresult.forEach(function(element) {
	// 					seleLoaiND.append('<option value="' + element.maLoaiND + '">' + element.tenLoaiNguoiDung + '</option>');
	// 				});
	// 			} else {
	// 				console.log('Lỗi khi lấy dữ liệu');
	// 			}
	// 		},
	// 		error: function(request, status, error) {
	// 			alert("Có lỗi xảy ra trong quá trình xử lý, vui lòng thử lại.")
	// 			console.log(request.responseText, error);
	// 		}
	// 	})
	// });

	function reload_maintable() {
		$.ajax({
			url: 'admin/ajax_laydsthugopy',
			type: 'GET',
			dataType: 'JSON',
			success: function(result) {
				console.log(result);
				for (i = 0; i < result.length; i++) {
					console.log(result[i].data);
				}
			},
			error: function(request, status, error) {
				alert("Có lỗi xảy ra trong quá trình xử lý, vui lòng thử lại.")
				console.log(request.responseText, error);
			}
		});
	}
	$(document).ready(function() {
		$('#datatable').dataTable({
			"language": {
				"url": "assets/datatable/Vietnamese.json"
			}
		});


		// $.ajax({
		// 	url: 'admin/ajax_laydsthugopy',
		// 	type: 'GET',
		// 	dataType: 'JSON',
		// 	success: function(result) {
		// 		console.log(result);
		// 		for (i = 0; i < result.length; i++) {
		// 			console.log(result[i].data);
		// 		}
		// 	},
		// 	error: function(request, status, error) {
		// 		alert("Có lỗi xảy ra trong quá trình xử lý, vui lòng thử lại.")
		// 		console.log(request.responseText, error);
		// 	}
		// });

		<?php if ($checkQuyen == '1') { ?>
			$('.duyet').click(function() {
				var row = $(this).parents('tr');
				var id = $(row).attr('data-id');
				Swal.fire({
					title: 'Hiển thị thư góp ý',
					text: "Bạn xác nhận duyệt, và cho phép hiển thị công khai thư góp ý này?",
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
							url: 'admin/ajax_duyet_show_thu',
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
					title: 'Xác nhận hủy hiển thị',
					text: "Bạn xác nhận hủy duyệt, và không hiển thị thư góp ý này?",
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
							url: 'admin/ajax_Huy_duyet_thu_vien',
							type: 'POST',
							data: {
								id: $(node).parents('tr').attr('data-id')
							},
							dataType: 'JSON',
							success: function(result) {

								if (result.status == 'success') {
									$(node).parents('tr').remove();
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


		$('.btnXoa').click(function() {
			Swal.fire({
				title: 'Xác nhận xóa',
				text: "Bạn có chắc muốn xóa người dùng này?",
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
						url: 'admin/del_thuGopy/' + $(node).parents('tr').attr('data-id'),
						type: 'GET',
						dataType: 'JSON',
						success: function(result) {

							if (result.status == 'success') {
								$(node).parents('tr').remove();
								Swal.fire(
									'Đã xóa',
									result.content,
									result.status,
								);
							} else {
								Swal.fire(
									'Thất bại',
									result.content,
									result.status,
								);
							}

							window.location.reload();

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