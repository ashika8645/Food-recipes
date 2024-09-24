<?php
$html_products = '';
$i = 1;
foreach ($listproducts as $pr) {
    extract($pr);
    $html_products .= '
        <tr>
            <td>' . $i . '</td>
            <td>' . $tensp . '</td>
            <td><img src="' . IMG_PATH_ADMIN . $fileup . '" alt="' . $tensp . '" width="80px" /></td>
            <td>' . $iddm . '</td>
            <td>' . $preptime . '</td>
            <td>' . $cooktime . '</td>
            <td>' . $content . '</td>
            <td>' . $congthuc . '</td>
            <td>
                <a href="index.php?pg=updateProduct&id=' . $id . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                <a href="index.php?pg=delproduct&id=' . $id . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i>xóa</a>
            </td>
        </tr>
    ';
    $i++;
}
?>
?>
<div class="main-content">
    <h3 class="title-page">Sản phẩm</h3>
    <div class="d-flex justify-content-between">
        <div class="input-group">
            <div class="form-outline" data-mdb-input-init>
                <input type="search" id="search" class="form-control " placeholder="search"/>
            </div>
        </div>
        <a href="index.php?pg=addProduct" class="btn btn-primary btn-sm mb-1">Thêm sản phẩm</a>
    </div>
    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Images</th>
                <th>IDCaterogies</th>
                <th>Prep Time</th>
                <th>Cook Time</th>
                <th>Content</th>
                <th>Congthuc</th>
                <th>Salary</th>

            </tr>
        </thead>
        <tbody>

            <?= $html_products ?>

        </tbody>
    </table>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
        $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("tbody").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>