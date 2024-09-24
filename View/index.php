<?php
//nhúng kết nối csdl
include '../DAO/global.php';
include '../DAO/pdo.php';
include '../DAO/user.php';
include '../DAO/sanpham.php';
include '../DAO/binhluan.php';
include '../DAO/danhmuc.php';
include '../DAO/blog.php';
include 'header.php';

// data dành cho trang home
$dm_new = get_dm_new(6);
$dssp_new = get_dssp_new(4);

if (!isset($_GET['pg'])) {
    include 'home.php';
} else {
    switch ($_GET['pg']) {
        case 'recipes':
            $dm_recipes = get_dm_new(6);
            if (!isset($_GET['iddm'])) {
                $iddm = 0;
            } else {
                $iddm = $_GET['iddm'];
            }
            //phantrang
            $limi = 8;
            $total_records = get_tongsanpham();
            $total_page = ceil((int)$total_records / $limi);
            $current_page = isset($_GET['page']) ? max(1, min($_GET['page'], $total_page)) : 1;
            $start = ($current_page - 1) * $limi;
            //hiển thị theo phân trang
            $pagination = get_sanphamtheotrang($start, $limi);
            //hiển thị theo sản phẩm
            $dssp_recipes = get_dssp($iddm, $limi, $start);
            include 'recipes.php';
            break;
        case 'recipes-details':
            if (!isset($_GET['idsp'])) {
                $idsp = 0;
            } else {
                $idsp = $_GET['idsp'];
            }
            $pr_recipes = get_chitietsp($idsp, 1);
            if (!isset($_GET['idsp'])) {
                $idsp = 0;
            } else {
                $idsp = $_GET['idsp'];
            }
            $rightblog = get_dssp_new(3);

            include 'recipes-details.php';
            break;
        case 'login':
            if (isset($_POST['login'])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $kq = checkuser($username, $password);

                if (is_array($kq) && (count($kq))) {
                    $_SESSION['s_user'] = $kq;
                    header('Location: index.php');
                } else {
                    $tb = "Tài khoản không tồn tại hoặc thông tin đăng nhập sai!";
                    $_SESSION['tb_dangnhap'] = $tb;
                    header('Location: index.php?pg=dangnhap');
                }
            }
            break;
        case 'logout':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                unset($_SESSION['s_user']);
            }
            header('Location: index.php');
            break;
        case 'adduser':
            if (isset($_POST['register'])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                user_insert($username, $password, $email);
            }
            include 'dangnhap.php';
            break;
        case 'send_reset_link':
            include 'send_reset_link.php';
            break;
        case 'verification_code':
            include 'verification_code.php';
            break;
        case 'check_verification_code':
            include 'check_verification_code.php';
            break;
        case 'reset_password':
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $password = $_POST["reset_password"];
                updatePassword($email, $password);
                header('location: index.php?pg=dangnhap');
            }
            include 'reset_password.php';
            break;
        case 'myaccount':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                include 'myaccount.php';
            }
            break;
        case 'update_user':
            if (isset($_POST['capnhat'])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST['email'];
                $id = $_POST['id'];
                $role = 0;
                $user_image = $_FILES['user_image']['name'];
                if ($user_image != "") {
                    $target_file = IMG_PATH_USER . $user_image;
                    move_uploaded_file($_FILES['user_image']['tmp_name'], $target_file);
                } else {
                    $user_image = '';
                }
                update_user($username, $password, $email, $role, $id, $user_image);
            }
            include "myaccount_confirm.php";
            break;
        case 'blog-post':
            if (!isset($_GET['idblog'])) {
                $idblog = 0;
            } else {
                $idblog = $_GET['idblog'];
            }
            $post_user = get_blog_id($idblog, 12);
            if (!isset($_GET['idblog'])) {
                $idblog = 0;
            } else {
                $idblog = $_GET['idblog'];
            }
            $post_user = get_blog_id($idblog, 12);
            include 'blog-post.php';
            break;
        case 'blog':
            $leftblog = get_approved_posts();
            $rightblog = get_dssp_new(3);
            include 'blog.php';
            break;
        case 'add_post':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                if (isset($_POST['add_post'])) {
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $fileup = $_FILES['fileup']['name'];
                    $username = $_SESSION['s_user']['username'];
                    $user_image = $_SESSION['s_user']['user_image'];
                    insert_post($title, $content, $fileup, $username, $user_image);
                    $target_file = IMG_PATH_USER . $fileup;
                    move_uploaded_file($_FILES['fileup']['tmp_name'], $target_file);
                    $leftblog = get_approved_posts();
                    $rightblog = get_dssp_new(3);
                    include 'blog.php';
                } else {
                    include 'add_post.php';
                }
            }
            break;
        case 'contact':
            include 'contact.php';
            break;
            break;
        case 'dangnhap':
            include 'dangnhap.php';
            break;
        default:
            include 'home.php';
            break;
    }
}

include("footer.php");
