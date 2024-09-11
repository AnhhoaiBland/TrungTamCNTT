<?php foreach ($dataPanel as $panel) { ?>
    <div class="mb-2">
        <?php if (!empty($panel['urlBaiViet'])) { ?>
            <a href="<?= $panel['urlBaiViet'] ?>">
            <?php } ?>
            <img src="<?= base_url("upload/media/images/{$panel['imageURL']}") ?>" width="100%">
            <?php if (!empty($panel['urlBaiViet'])) { ?>
            </a>
        <?php } ?>
    </div>
<?php } ?>