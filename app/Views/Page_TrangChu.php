<?= $this->section('templates/slide') ?>
<!-- Include main slide template -->
<?= $this->include('templates/slide') ?>
<!-- Include Đối Tác slide template -->
<?= $this->endSection() ?>

<!-- Other sections like bài viết mới -->
<?php
$databaidangtop6new['title'] = "TIN TỨC";
$databaidangtop6new['ds_baiDang'] =  $baidangtop6new;
$databaidangtop6new['url_cate'] = '';
echo view('block/block_chuyenMuc', $databaidangtop6new);
?>

<?php
$data_baiDangCHuyenMucChinhSachVanBan['title'] = "THÔNG BÁO";
$data_baiDangCHuyenMucChinhSachVanBan['ds_baiDang'] =  $baiDangCHuyenMucChinhSachVanBan;
$data_baiDangCHuyenMucChinhSachVanBan['url_cate'] = '/cate/thong-tin-chi-dao-dieu-hanh';
echo view('block/block_chuyenMuc', $data_baiDangCHuyenMucChinhSachVanBan);
?>

<?php
$data_baiDangChuyenMucTinDiaPhuong['title'] = "DỊCH VỤ";
$data_baiDangChuyenMucTinDiaPhuong['ds_baiDang'] =  $baiDangChuyenMucTinDiaPhuong;
$data_baiDangChuyenMucTinDiaPhuong['url_cate'] = '/cate/tin-tuc-su-kien/tin-hoat-dong-dia-phuong';
echo view('block/block_chuyenMuc', $data_baiDangChuyenMucTinDiaPhuong);
?>

<!-- Main HTML content -->
<div class="white-background">
    <?= $this->include('templates/doitac') ?>
</div>