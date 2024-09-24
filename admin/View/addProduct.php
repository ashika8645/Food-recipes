<?php 
$html_productlist = '';
foreach ($showdm_admin as $dm) {
    extract($dm);
    $link = 'index.php?pg=products&iddm=' . $id;
    $html_productlist .= '<option value="'.$id.'">'.$tendm.'</option>';
}
?>

<div class="main-content">
    <h3 class="title-page">
        Thêm sản phẩm
    </h3>

    <form class="addPro" action="index.php?pg=addProduct" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputFile">Ảnh sản phẩm</label>
            <div class="custom-file">
                <input type="file" name="fileup" class="custom-file-input" id="exampleInputFile">
            </div>
        </div>
        <div class="form-group">
            <label for="tensp">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="tensp" id="tensp" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="time">Thời gian chuẩn bị:</label>
            <input type="text" class="form-control" name="preptime" id="preptime" placeholder="Nhập thời gian thực hiện">
        </div>
        <div class="form-group">
            <label for="time">Thời gian thực hiện:</label>
            <input type="text" class="form-control" name="cooktime" id="cooktime" placeholder="Nhập thời gian thực hiện">
        </div>
        <div class="form-group">
            <label for="iddm">Danh mục:</label>
            <select class="form-select" name="iddm" aria-label="Default select example">
                <option selected>Chọn danh mục</option>
                <?= $html_productlist?>
            </select>
        </div>
        <div class="form-group">
            <label for="content">Nội dung:</label>
            <textarea class="form-control" id="content" name="content" placeholder="Nhập nội dung"></textarea>
        </div>
        <div class="form-group">
            <label for="congthuc">Công thức:</label>
            <textarea class="form-control" id="congthuc" name="congthuc" placeholder="Nhập công thức"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="addProduct" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script>
    new DataTable('#example');
</script>

<script src="../ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('textarea'))
            .catch(error => {
                console.error(error)
            });
            ClassicEditor.create(document.querySelector('#congthuc'))
            .catch(error => {
                console.error(error)
            });
    </script>
    