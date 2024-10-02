<?= $this->section('templates/slide') ?>
<!-- Include main slide template -->
<?= $this->include('templates/slide') ?>
<!-- Include Đối Tác slide template -->


<?= $this->endSection() ?>

<!-- Other sections like bài viết mới -->
<?php
$databaidangtop6new['title'] = "TIN TỨC";
$databaidangtop6new['ds_baiDang'] =  $baidangtop6new;
$databaidangtop6new['url_cate'] = '/cate/tin-tuc-su-kien';
echo view('block/block_chuyenMuc', $databaidangtop6new);
?>

<?php
$data_baiDangCHuyenMucChinhSachVanBan['title'] = "THÔNG TIN CHỈ ĐẠO";
$data_baiDangCHuyenMucChinhSachVanBan['ds_baiDang'] =  $baiDangCHuyenMucChinhSachVanBan;
$data_baiDangCHuyenMucChinhSachVanBan['url_cate'] = '/cate/thong-tin-chi-dao-dieu-hanh';
echo view('block/block_chuyenMuc', $data_baiDangCHuyenMucChinhSachVanBan);
?>

<div class="white-background">
    <?= $this->include('templates/dichvu') ?>
</div>

<!-- Main HTML content -->
<div class="white-background">
    <?= $this->include('templates/doitac') ?>
</div>