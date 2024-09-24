<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../layout/css/app.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <?php
    $html_dssp_new = ' ';
    foreach ($dssp_new as $sp) {
        extract($sp);
        $link = 'index.php?pg=recipes-details&idsp=' . $id;
        $html_dssp_new .= '
    <a href="' . $link . '">
    <div class="highlights-card">
        <div class="highlights-image">
            <img src=" ' . IMG_PATH_USER . $fileup . ' " alt=" ' . $tensp . ' "/>
        </div>
        <div class="highlights-bottom">
            <div class="highlights-card_title">' . $tensp . ' </div>
            <div class="highlights-list">
                <div class="highlights-icon">
                    <ion-icon name="alarm"></ion-icon>
                    <div class="highlights-icon_text">' . $cooktime . '</div>
                </div>
                <div class="highlights-icon">
                <ion-icon name="pizza"></ion-icon>
                <div class="highlights-icon_text">' . $tendm . '</div>
            </div>
            </div>
            
        </div>
    </div>
    </a>
    ';
    }
    $html_dm_new = '';
    foreach ($dm_new as $dm) {
        extract($dm);
        $link = 'index.php?pg=recipes&iddm=' . $id;
        $html_dm_new .= '
        <a href="' . $link . '">
            <div class="categories-card">
                <img src="' . IMG_PATH_USER  . $fileup . '" alt=" ' . $tensp . ' "class="categories-img">
            <div class="categories-text">' . $tendm . '</div>
            </div>
        </a>
';
    }
    ?>
    <div class="container">
        <section class="content">
            <div class="header-content">
                <div class="header-info">
                    <h1 class="header-heading">your favorite food Make it good</h1>
                    <div class="search">
                        <input type="text" class="search-input" placeholder="Hi! search for your recipes here ..." />
                        <div class="search-bottom">
                            <div class="search-hashtags">
                                <span>#Pasta</span>
                                <span>#Salads</span>
                                <span>#Dessert</span>
                                <span>#Breakfast</span>
                                <span>#Appetizers</span>
                            </div>
                            <button class="search-button">
                                <ion-icon name="search"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header-media">
                    <img src="../layout/images/pexels-ella-olsson-1640774.jpg" alt="" class="header-img" />
                    <div class="header-play">
                        <ion-icon name="play"></ion-icon>
                    </div>
                </div>
            </div>
        </section>
        <section class="categories">
            <div class="categories-top">
                <span class="categories-title">Categories</span>
                <button class="categories-button"><a href="index.php?pg=recipes">View All Categories</a></button>
            </div>
            <div class="categories-list">
                <?= $html_dm_new; ?>
            </div>
        </section>
        <section class="highlights">
            <div class="highlights-top">
                <h2 class="highlights-title">Simple and tasty receipes</h2>
                <div class="highlights-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi molestias
                    expedita suscipit itaque, aut numquam veniam. Voluptas dolore, quam enim eligendi eum qui nemo
                    exercitationem.</div>
            </div>
            <div class="highlights-list_card">
                <?= $html_dssp_new; ?>
            </div>
        </section>
        <section class="learn">
            <div class="learn-content">
                <div class="learn-title">Everyone can be a chef in their own kitchen</div>
                <div class="learn-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam nulla ut animi
                    dolores hic. Facilis consequuntur temporibus quasi adipisci mollitia!</div>
                <button class="learn-button">Learn More</button>
            </div>
            <div class="learn-image">
                <img src="../layout/images/Rectangle 2.png" alt="">
            </div>
        </section>
        <section class="subscribe">
            <div class="subscribe-title">
                Deliciousness to your inbox
            </div>
            <div class="subscribe-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic temporibus
                veritatis aspernatur iste! Quod ipsam numquam dolorem officia optio consectetur!</div>
            <div class="subscribe-email">
                <input type="text" placeholder="Your email address..." class="subscribe-input">
                <button class="subscribe-button">Subscribe</button>
            </div>
        </section>
    </div>
<script src="../layout/app.js"></script>
</body>

</html>