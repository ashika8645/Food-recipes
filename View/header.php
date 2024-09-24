<?php session_start();
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
    extract($_SESSION['s_user']);
    $html_acount = '<li class="user-item">
<img class="user_image" src="' . IMG_PATH_USER . $user_image . '" alt="' . $username . '" />
</li>
<li class="user-item">
<a href="index.php?pg=myaccount" class="user-link">' . $username . '</a>
</li>
<li class="user-item">
<a href="index.php?pg=logout" class="user-link">thoát</a>
</li>';
} else {
    $html_acount = '<li class="user-item">
    <a href="index.php?pg=dangnhap" class="user-link">login</a>
</li>
<li class="user-item">
    <a href="index.php?pg=dangky" class="user-link">sign up</a>
</li>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../layout/css/app.css" />
    <link rel="icon" href="../layout/images/image-removebg-preview (1).png" type="image/gif" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <div class="container">
            <header class="header">
                <div class="header-top">
                    <img src="../layout/images/image-removebg-preview (1).png" alt="" class="header-logo" />
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="index.php" class="menu-link">home</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?pg=recipes" class="menu-link">recipes</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?pg=blog" class="menu-link">blog</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?pg=contact" class="menu-link">contact</a>
                        </li>
                    </ul>
                    <ul class="user">
                        <?= $html_acount; ?>
                    </ul>
                    <div class="toggle_btn">
                        <ion-icon name="menu" ></ion-icon>
                    </div>
                </div>
                <div class="dropdown_menu  ">
                    <li class="menu-item">
                        <a href="index.php" class="menu-link">home</a>
                    </li>
                    <li class="menu-item">
                        <a href="index.php?pg=recipes" class="menu-link">recipes</a>
                    </li>
                    <li class="menu-item">
                        <a href="index.php?pg=blog" class="menu-link">blog</a>
                    </li>
                    <li class="menu-item">
                        <a href="index.php?pg=contact" class="menu-link">contact</a>
                    </li>
                    <?= $html_acount; ?>
                </div>
            </header>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            const $toggleBtn = $(".toggle_btn");
            const $dropDownMenu = $(".dropdown_menu");

            $toggleBtn.on("click", function () {
                $dropDownMenu.toggleClass("open");
            });
        });
    </script>
</body>

</html>