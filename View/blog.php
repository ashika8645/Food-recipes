<?php
$html_leftblog = '';
foreach ($leftblog as $blog) {

    extract($blog);
    $link = 'index.php?pg=blog-post&idblog=' . $id;
    $html_leftblog .= '
    <a href="' . $link . '">
    <div class="blog-left_card">
                            <div class="blog-image">
                            <img src=" ' . IMG_PATH_USER . $fileup . ' " alt=" ' . $title . ' "/>
                            </div>
                            <div class="blog-card">
                                <div class="blog-card_title">
                                    ' . $title . '
                                </div>
                                <div class="blog-card_text">' . $content . '</div>
                                <div class="blog-user">
                                    <div class="blog-image_user">
                                    <img src=" ' . IMG_PATH_USER . $user_image . ' " alt=" ' . $username . ' "/>
                                    </div>
                                    <div class="blog-user_title">
                                        <div class="blog-name">' . $username . '</div>
                                        <div class="blog-line"></div>
                                        <div class="blog-date">' . $post_date . '</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </a>
    ';
}
$html_rightblog = '';
foreach ($rightblog as $blog) {
    extract($blog);
    $link = 'index.php?pg=recipes-details&idsp=' . $id;
    $html_rightblog .= '
    <a href="' . $link . '">
    <div class="blog-right_card">
        <div class="blog-right_image">
            <img src=" ' . IMG_PATH_USER . $fileup . ' " alt=" ' . $tensp . ' "/>
        </div>
        <div class="blog-right_body">
            <div class="blog-right_title">
                ' . $tensp . '
            </div>
            <div class="recipes-list">
                <div class="recipes-icon">
                    <ion-icon name="alarm"></ion-icon>
                    <div class="recipes-icon_text">' . $cooktime . '</div>
                </div>
                <div class="recipes-icon">
                <ion-icon name="pizza"></ion-icon>
                <div class="recipes-icon_text">' . $tendm . '</div>
                </div>
            </div>
        </div>
    </div>
    </a>
    ';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>
<?php
include("add_post.php");
?>

<body>

    <div class="container">
        <div class="blog">
            <div class="blog-heading">
                <h1 class="blog-title">
                    Blog & Article
                </h1>
                <span class="blog-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, rerum ullam
                    officia est veritatis dolorum atque alias quod neque dicta.</span>
                <div class="blog-search">
                    <input type="text" placeholder="Search article, news or recipe..." class="blog-input" id="search">
                    <button class="blog-button">Search</button>
                </div>
            </div>
            <div class="blog-content">
                <div class="blog-left">
                    <div class="blog-left_list">
                        <?= $html_leftblog; ?>
                    </div>
                </div>
                <div class="blog-right">
                    <div class="blog-right_heading">Tasty Recipes</div>
                    <div class="blog-right_list">
                        <?= $html_rightblog ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("subscribe.php");
    ?>
</body>
<!-- search -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".blog-left_card").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            $(".blog-right_card").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

</html>