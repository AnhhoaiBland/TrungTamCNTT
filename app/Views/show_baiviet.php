<style>
	.bg-body {
		background-color: #f8f9fa;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	}

	.content_tieude {
		margin-bottom: 15px;
	}

	.content_tieude h3 {
		font-size: 24px;
		color: #333;
		margin-bottom: 5px;
	}

	.span_ngaydang,
	.span_chuyenmuc {
		font-size: 14px;
		color: #666;
	}

	.img_anhminhhoa {
		max-width: 100%;
		height: auto;
		display: block;
		margin: 0 auto 20px;
	
	}
	.content_noidung {
		font-size: 16px;
		line-height: 1.6;
		color: #333;
	}
</style>
<div class="w-100 bg-body" style="min-height: 1000px;">
	<div class="content_baiviet">
		<div class="content_tieude">
			<h3><?= $baiDang[0]['tieuDe'] ?></h3>
			<span class="span_ngaydang">Ngày đăng: <?php echo date("d-m-Y", strtotime($baiDang[0]['ngayDang'])); ?></span> -
			<span class="span_chuyenmuc"> <?= $baiDang[0]['tenChuyenMuc'] ?></span>
		</div>
		<div class="mt-2 mb-2">
			<img class="img_anhminhhoa text-center" src=<?= base_url("upload/media/images/{$baiDang[0]['anhTieuDe']}") ?> alt="Ảnh minh họa" title="Ảnh minh họa" />
		</div>
		<div class="content_noidung">
			<?= $baiDang[0]['noiDung'] ?>
		</div>
	</div>
</div>