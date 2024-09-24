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
    <?php
    $html_dssp = '';
    foreach ($dssp_recipes as $sp) {
        extract($sp);
        $link = 'index.php?pg=recipes-details&idsp=' . $id;
        $html_dssp .= '
<a href="' . $link . '"><div class="recipes-card">
<div class="recipes-image">
    <img src=" ' . IMG_PATH_USER . $fileup . ' " alt=" ' . $tensp . ' "/>
</div>
<div class="recipes-bottom">
    <div class="recipes-card_title">' . $tensp . ' </div>
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
    $html_dm = '';
    foreach ($dm_recipes as $dm) {
        extract($dm);
        $link = 'index.php?pg=recipes&iddm=' . $id;
        $html_dm .= '
        <button class="recipes-item"><a href=' . $link . '>' . $tendm . '</a></button>
        ';
    }
    ?>

    <div class="container">
        <div class="recipes">
            <div class="recipes-top">
                <h2 class="recipes-title">Simple and tasty receipes</h2>
                <div class="recipes-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi molestias
                    expedita suscipit itaque, aut numquam veniam. Voluptas dolore, quam enim eligendi eum qui nemo
                    exercitationem.</div>
            </div>
            <div class="recipes-search">
                <div class="recipes-name">
                    recipes
                </div>
                <div class="recipes-center">
                    <input type="text" class="recipes-input" id="recipes-input" placeholder="Search for your recipes here ...">
                    <select name="" id="" class="recipes-select">
                        <option value="Advertising" class="recipes-option">Advertising</option>
                    </select>
                </div>
            </div>
            <div class="recipes-content">
                <div class="recipes-menu">
                    <?= $html_dm; ?>
                </div>
                <div class="recipes-list_card">
                    <?= $html_dssp; ?>
                </div>

            </div>

        </div>
        <?php
        include("phantrang.php");
        include("subscribe.php");
        ?>
</body>
<!-- search -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#recipes-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".recipes-card").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

</html>