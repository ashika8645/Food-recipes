<?php
$posts =  get_pending_posts();
$html_posts = '';
$i = 1;
foreach ($posts as $post) {
    extract($post);
    $html_posts .= '
    <tr>     
                <td>' . $i . '</td>
                <td>' . $username . '</td>
                <td><img src=" ' . IMG_PATH_ADMIN . $user_image . ' " alt=" ' . $username . ' " width="80px" /></td>
                <td>' . $title . '</td>
                <td>' . $content . '</td>
                <td><img src=" ' . IMG_PATH_ADMIN . $fileup . ' " alt=" ' . $username . ' " width="80px" /></td>
                <td>' . $post_date . '</td>
                <td>' . $status . '</td>
                <td>
        <a href="index.php?pg=approve_post&id=' . $id . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Duyệt</a>
        <a href="index.php?pg=delpost&id=' . $id . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
    </td>
            </tr>
    ';
    $i++;
}
?>
<div class="main-content">
    <h3 class="title-page">
        Bài viết
    </h3>
    <div class="d-flex justify-content-between">
        <div class="input-group">
            <div class="form-outline" data-mdb-input-init>
                <input type="search" id="search" class="form-control " placeholder="search"/>
            </div>
        </div>
        <a href="index.php?pg=approved_posts" class="btn btn-primary sm-1">Bài viết đã duyệt</a>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Title</th>
                <th>Content</th>
                <th>File up</th>
                <th>Date</th>
                <th>Status</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <?= $html_posts ?>
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