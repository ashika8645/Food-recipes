<?php
if (is_array($sp) && count($sp) > 0) {
    extract($sp);
    $idupdate=$id;
    $imgpath = IMG_PATH_ADMIN . $fileup;
    if (is_file($imgpath)) {
        $fileup = '<img src="' . $imgpath . '" alt="" width="80px">';
    } else {
        $fileup = '';
    }
}
?>
<div class="main-content">
    <h3 class="title-page">
        update danh mục
    </h3>

    <form class="addPro" action="index.php?pg=update_Caterogies" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputFile">Ảnh danh mục</label>
            <div class="custom-file">
                <input type="file" name="fileup" class="custom-file-input" id="exampleInputFile">
                <?= $fileup ?>
            </div>
        </div>
        <div class="form-group">
            <label for="tendm">Tên danh mục:</label>
            <input type="text" class="form-control" name="tendm" value="<?= ($tendm != "") ? $tendm : ""; ?>" id="tendm" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?=$idupdate?>">
            <button type="submit" name="update_Caterogies" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<script>
    new DataTable('#example');
</script>