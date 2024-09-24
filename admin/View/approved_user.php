<?php
$approved_user  = '';
$i = 1;
foreach ($approved as $user) {
    extract($user);
    $approved_user .= '
    <tr>     
                <td>' . $i . '</td>
                <td>' . $username . '</td>
                <td><img src=" ' . IMG_PATH_ADMIN . $user_image . ' " alt=" ' . $username . ' " width="80px" /></td>
                <td>' . $email . '</td>
                <td>
        <a href="index.php?pg=deluser&id=' . $id . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
    </td>
            </tr>
    ';
    $i++;
}
?>
<div class="main-content">
    <h3 class="title-page">
        Thành viên
    </h3>
    <div class="d-flex justify-content-between">
        <div class="input-group">
            <div class="form-outline" data-mdb-input-init>
                <input type="search" id="search" class="form-control " placeholder="search" />
            </div>
        </div>
        <a href="index.php?pg=user" class="btn btn-primary sm-1">Người dùng</a>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Email</th>
                <th>Salary</th>

            </tr>
        </thead>
        <tbody>
            <?= $approved_user ?>
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