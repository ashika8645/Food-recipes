<?php
$html_post = '';
foreach ($post_user as $post) {
    extract($post);
    $html_post .= '
    <div class="post">
            <div class="post-heading">
                <div class="post-title">
                    ' . $title . '
                </div>
                <div class="post-user">
                    <div class="post-image_user">
                    <img src=" ' . IMG_PATH_USER . $user_image . ' " alt=" ' . $username . ' "/>
                    </div>
                    <div class="post-user_title">
                        <div class="post-name">' . $username . '</div>
                        <div class="post-line"></div>
                        <div class="post-date">' . $post_date . '</div>
                    </div>
                </div>
                <div class="post-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae delectus eligendi consequuntur magnam reiciendis commodi soluta quaerat inventore quas cupiditate. Natus, laudantium provident perspiciatis ad odio nisi reprehenderit incidunt aliquid!
                </div>
                <div class="post-img">
                <img src=" ' . IMG_PATH_USER . $fileup . ' " alt=" ' . $title . ' "/>
                </div>
                <div class="post-content">
                    <div class="post-list">
                        <div class="post-question">
                            <div class="post-content_text">
                            ' . $content . ' 
                            </div>
                        </div>
                    </div>
                    <div class="post-share">
                        <p>Share this on:</p>
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-twitter"></ion-icon>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </div>
                </div>
            </div>

        </div>
    ';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../layout/css/app.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <?= $html_post ?>
    </div>
</body>

</html>