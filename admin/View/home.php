<?php
$posts =  get_all_blog();
$html_posts = '';
$i = 1;
foreach ($posts as $post) {
    extract($post);
    $html_posts .= '
    <tr>     
                <td>' . $i . '</td>
                <td>' . $status . '</td>
            </tr>
    ';
    $i++;
}
$usercheck=get_user_all();
$html_user = '';
$i=1;
foreach ($usercheck as $user) {
    extract($user);
    $html_user .= '
    <tr>     
                <td>' . $i . '</td>
                <td>' . $username . '</td>
            </tr>
    ';
    $i++;
}
?>
<div class="container-fluid main-page">

    <div class="app-main">

        <div class="main-content">
            <h3 class="title-page">
                Dashboards
            </h3>
            <section class="statistics row">
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <a href="user.html">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                <h5>Tổng thành viên</h5>
                            </div>
                            <span class="widget-numbers"><?= get_tonguser(); ?></span>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-xl-3">
                    <a href="caterogies.html">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                <h5>
                                    Tổng danh mục
                                </h5>
                            </div>
                            <span class="widget-numbers"><?= get_tongdanhmuc(); ?></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <a href="#">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                <h5>
                                    Tổng sản phẩm
                                </h5>
                            </div>
                            <span class="widget-numbers"><?= get_tongdanhmuc(); ?></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <a href="#">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                <h5>
                                    Tổng bài viết
                                </h5>
                            </div>
                            <span class="widget-numbers"><?= get_tongpost(); ?></span>
                        </div>
                    </a>
                </div>
            </section>
            <section class="row">
                
                <div class="col-sm-12 col-md-6 col xl-6">
                    <div class="card chart">
                        <h4>Bài viết mới</h4>
                        <table class="revenue table table-hover">
                            <thead>
                                <th>Mã bài viết</th>
                                <th>Trạng thái</th>
                            </thead>
                            <tbody>
                                <?= $html_posts ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-6">
                    <div class="card chart">
                        <h4>Người dung mới</h4>
                        <table class="revenue table table-hover">
                            <thead>
                                <th>#</th>
                                <th>Username</th>
                            </thead>
                            <tbody>
                                <?= $html_user ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable('#example');
</script>