<style>
    .show_baiviet_hinh_3cot_khung {
        margin-top: 10px;
        border: 1px solid #eeeeee;
        padding: 3px;
        height: 270px;
        overflow: hidden;
        position: relative;
    }

    .show_baiviet_hinh_3cot_image {
        height: 222px;
        overflow: hidden;
    }

    .show_baiviet_hinh_3cot_title {
        width: 100%;
        /*font-weight: 600;*/
        left: 0;
        bottom: 0;
        padding: 15px 10px 10px 10px;
        /*height: 80px;*/
        position: absolute;
    }

    .show_baiviet_hinh_3cot_title a {
        color: #ffffff;
    }

    .show_baiviet_hinh_3cot_bg {
        width: calc(100% - 6px);
        font-weight: 600;
        left: 0;
        bottom: 0;
        padding: 10px;
        height: 100px;
        position: absolute;
        margin: 3px;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(50, 50, 50, 1), rgba(50, 50, 50, 1));
        /*background: radial-gradient(circle at 50% 100%,rgba(76, 0, 255, 1), rgba(76, 0, 255, 0));*/
        /*transform: translate(-50%, 0%);*/
    }
</style>


<div class="pb-3 pt-5 block_ditich_hinh bg-body p-4">
    <div class="block_ditich_hinh_header block_title">
        <a style="font-size: 18px;" class="text-white" href="page/CAT_ALIAS_NAME_SAMPLE"><?= $title ?></a>
    </div>
    <hr>
    <div class="block_ditich_hinh_content">
        <?php if (count($ds_baiDang) > 0) : ?>
            <div class="row">
                <?php foreach ($ds_baiDang as $baidang) : ?>
                    <div class="col-md-4">
                        <div class="show_baiviet_hinh_3cot_khung">
                            <div class="show_baiviet_hinh_3cot_image" style="background: url('media/images/BV_HINH_ANH_SAMPLE') center center; background-size: cover;">
                                <img src="<?= base_url('upload/media/images/' . ($baidang['anhTieuDe'] != NULL ? $baidang['anhTieuDe'] : 'image_blank.jpg')) ?>" alt="Image 1">
                                <div class="show_baiviet_hinh_3cot_bg"></div>
                                <div class="show_baiviet_hinh_3cot_title">
                                    <a href="<?= $baidang['urlBaiDang'] ? base_url('/bv/' . $baidang['urlBaiDang']) : base_url('/bv/' . $baidang['maBaiDang']) ?>">
                                        <?= $baidang['tieuDe'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php else : ?>
            Nội dung đang cập nhật
        <?php endif ?>
    </div>
</div>