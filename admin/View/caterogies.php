<?php
$html_showdanhmuc = '';
$i = 1;
foreach ($dsdm as $dm) {
    extract($dm);
    $link = 'index.php?pg=products&iddm=' . $id;
    $html_showdanhmuc .= '
    <tr>
    <td>' . $i . '</td>
    <td><a href="' . $link . '">' . $tendm . '</a></td>
    <td><img src=" ' . IMG_PATH_ADMIN . $fileup . ' " alt=" ' . $tendm . ' " width="80px" /></td>
    <td>
        <a href="index.php?pg=updateCaterogies&id=' . $id . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
        <a href="index.php?pg=delcaterogies&id=' . $id . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
    </td>
</tr>
    ';
    $i++;
}
?>
<div class="main-content">
    <h3 class="title-page">
        Danh mục
    </h3>
    <div class="d-flex justify-content-between">
        <div class="input-group">
            <div class="form-outline" data-mdb-input-init>
                <input type="search" id="search" class="form-control " placeholder="search"/>
            </div>
        </div>
        <a href="index.php?pg=addCaterogies" class="btn btn-primary btn-sm mb-1">Thêm danh mục</a>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Images</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <?= $html_showdanhmuc; ?>
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