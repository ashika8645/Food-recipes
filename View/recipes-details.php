<?php
$html_prrecipes = '';
foreach ($pr_recipes as $rs) {
    extract($rs);
    $html_prrecipes .= '
    <div class="product-heading">
                <div class="product-left">
                    <div class="product-title">
                        ' . $tensp . '
                    </div>
                    <div class="product-list">
                        <div class="product-time">
                            
                            <div class="product-icon">
                                <ion-icon name="alarm" class="icon"></ion-icon>
                                <div class="product-titlename">
                                    <div class="product-text">PREP TIME</div>
                                    <div class="product-date">' . $preptime . '</div>
                                </div>
                            </div>
                            <div class="product-icon">
                                <ion-icon name="alarm" class="icon"></ion-icon>
                                <div class="product-titlename">
                                    <div class="product-text">COOK TIME</div>
                                    <div class="product-date" class="icon">' . $cooktime . '</div>
                                </div>
                            </div>
                            <div class="product-icon">
                                <ion-icon name="pizza" class="icon"></ion-icon>
                                <div class="product-text" >' . $tendm . '</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-right">
                    <div class="product-print">
                        <ion-icon class="print" name="print"></ion-icon>
                        <span>Print</span>
                    </div>
                    <div class="product-share">
                        <ion-icon class="share" name="share"></ion-icon>
                        <span>Share</span>
                    </div>
                </div>
    </div>
            <div class="product-content">
                <div class="product-media">
                    <img src=" ' . IMG_PATH_USER . $fileup . ' " alt=" ' . $tensp . ' "/>
                </div>
                <div class="product-recipes">
                    <div class="product-info_title">
                        Nutrition Information
                    </div>
                    <div class="product-recipes_list">
                        <div class="product-info">
                            ' . $congthuc . '
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="content">' . $content . '</div>
            
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
                    <ion-icon name="alarm" class="icon" ></ion-icon>
                    <div class="recipes-icon_text">' . $cooktime . '</div>
                </div>
                <div class="recipes-icon">
                <ion-icon name="pizza" ></ion-icon>
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
    <link rel="stylesheet" href="../layout/css/app.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="product">
            <?= $html_prrecipes; ?>
            <div class="comment-content">
            <iframe src="../View/comment.php?idsp=<?=$idsp?>" width="100%" width="300px"frameborder="0"></iframe>
            <div class="blog-right">
                    <div class="blog-right_heading">Tasty Recipes</div>
                    <div class="blog-right_list">
                        <?= $html_rightblog ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php
    include("subscribe.php");
    ?>
</body>

</html>