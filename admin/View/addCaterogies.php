<div class="main-content">
    <h3 class="title-page">
        Thêm danh mục
    </h3>

    <form class="addPro" action="index.php?pg=addCaterogies" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputFile">Ảnh danh mục</label>
            <div class="custom-file">
                <input type="file" name="fileup" class="custom-file-input" id="exampleInputFile">
            </div>
        </div>
        <div class="form-group">
            <label for="tendm">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="tendm" id="tendm" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="form-group">
            <button type="submit" name="addCaterogies" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<script>
    new DataTable('#example');
</script>