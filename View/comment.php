<?php
include_once '../DAO/pdo.php';
include_once '../DAO/global.php';
include_once '../DAO/binhluan.php';

session_start();

if (isset($_GET['idsp'])) {
    $idsp = $_GET['idsp'];
}

if (isset($_POST['comment_add'])) {
    $idsp = $_POST['idsp'];
    $comment = $_POST['comment'];
    $username = $_SESSION['s_user']['username'];
    $user_image = $_SESSION['s_user']['user_image'];
    comment_insert($idsp, $comment, $username, $user_image);
}
$comments = comment_select_all(6);
$html_comment = '';
foreach ($comments as $cmt) {
    extract($cmt);
    $html_comment .= '
            <div class="comment_userbox">
                <div class="comment_image">
                    <img src="' . IMG_PATH_USER . $user_image . '" alt="' . $username . '" />
                </div>
                <div class="comment_user">' . $username . '</div>
            </div>
            <div class="comment_session">' . $comment . '</div>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../layout/css/app.css">
    <title>Discussion Page</title>
</head>

<body>
    <div class="comment_box">
        <p class="comment_heading">Comment</p>
        <?php
        if (isset($_SESSION['s_user']) && count($_SESSION['s_user']) > 0) {
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="comment_write">
                <input type="hidden" name="idsp" value="<?php echo $idsp; ?>">
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Write a comment..."></textarea>
                <button class="comment_button" name="comment_add">Post comment</button>
            </form>
        <?php
        } else {
            echo '<a href="../index.php?pg=dangnhap" target="_parent">chưa đăng nhập</a>';
        }
        ?>
        <h2>Discussion (20)</h2>
        <div class="comments-section" id="commentsSection">
            <?= $html_comment; ?>
        </div>
    </div>
</body>

</html>