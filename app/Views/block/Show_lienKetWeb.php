<style>
    .tieu_de_lienket {
        font-weight: bold;
        font-size: 17px;
        color: #333;
    }
</style>
<div class="bg-body p-3">
    <label for="" class="form-label tieu_de_lienket text-decoration-underline">LIÊN KẾT WEBSITE</label>

    <select name="forma" class="form-select" aria-label="Default select example" onchange="window.open(this.options[this.selectedIndex].value, '_blank');">
        <option value="/" selected>Liên kết</option>
        <?php
        if (!empty($banLienKet)) {
            foreach ($banLienKet as $key => $value) {
        ?>
                <option value=<?= str_replace('"}', '', $value) ?> target="_blank"><?= str_replace('{"', '', $key) ?></option>
        <?php
            }
        }
        ?>
    </select>

</div>