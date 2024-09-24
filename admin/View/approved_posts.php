<?php
// $approved_posts =  get_pending_posts();
$approved_posts = '';
$i = 1;
foreach ($approved as $post) {
    extract($post);
    $approved_posts .= '
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
    <div class="d-flex justify-content-end">
        <a href="index.php?pg=post" class="btn btn-primary mb-2">Bài viết chưa duyệt</a>
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
            <?= $approved_posts ?>
        </tbody>
    </table>
</div>
</div>
</div>
<script>
    new DataTable('#example');
</script>