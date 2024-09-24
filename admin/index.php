<?php

include '../DAO/global.php';
include '../DAO/pdo.php';
include '../DAO/sanpham.php';
include '../DAO/danhmuc.php';
include '../DAO/blog.php';
include '../DAO/user.php';
include 'View/header.php';

if (!isset($_GET['pg'])) {
    include 'View/home.php';
} else {
    switch ($_GET['pg']) {
        case 'products':
            if (!isset($_GET['iddm'])) {
                $iddm = 0;
            } else {
                $iddm = $_GET['iddm'];
            }
            $listproducts = get_product_iddm($iddm, 12);
            include 'View/products.php';
            break;
        case 'delproduct':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                sanpham_delete($id);
            }
            //trở về products
            $listproducts = show_sp(12);
            include 'View/products.php';
            break;
        case 'addProduct':
            if (isset($_POST['addProduct'])) {
                $tensp = $_POST['tensp'];
                $preptime = $_POST['preptime'];
                $cooktime = $_POST['cooktime'];
                $iddm = $_POST['iddm'];
                $content = $_POST['content'];
                $congthuc = $_POST['congthuc'];
                $fileup = $_FILES['fileup']['name'];
                insert_sp($tensp, $preptime, $cooktime, $iddm, $content, $congthuc, $fileup);
                $target_file = IMG_PATH_ADMIN . $fileup;
                move_uploaded_file($_FILES['fileup']['tmp_name'], $target_file);
                $listproducts = show_sp(12);
                include 'View/products.php';
            } else {
                $showdm_admin = get_dm_new(12);
                include 'View/addProduct.php';
            }
            break;
        case 'update_Product':
            if (isset($_POST['update_Product'])) {
                $tensp = $_POST['tensp'];
                $preptime = $_POST['preptime'];
                $cooktime = $_POST['cooktime'];
                $iddm = $_POST['iddm'];
                $content = $_POST['content'];
                $congthuc = $_POST['congthuc'];
                $id = $_POST['id'];
                $fileup = $_FILES['fileup']['name'];
                if ($fileup != "") {
                    $target_file = IMG_PATH_ADMIN . $fileup;
                    move_uploaded_file($_FILES['fileup']['tmp_name'], $target_file);
                } else {
                    $fileup = '';
                }
                update_sp($tensp, $preptime, $cooktime, $iddm, $fileup, $id, $content, $congthuc);
                $listproducts = show_sp(12);
                include 'View/products.php';
            }
            break;
        case 'updateProduct':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $sp = sanphamchitiet_select($id);
            }
            $showdm_admin = get_dm_new(12);
            include 'View/updateProduct.php';
            break;
        case 'caterogies':
            $dsdm = get_dm_new(12);
            include 'View/caterogies.php';
            break;
        case 'delcaterogies':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                danhmuc_delete($id);
            }
            //trở về danhmuc
            $dsdm = get_dm_new(12);
            include 'View/caterogies.php';
            break;
        case 'updateCaterogies':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $sp = danhmucchitiet_select($id);
            }
            $showdm_admin = get_dm_new(12);
            include 'View/updateCaterogies.php';
            break;
        case 'update_Caterogies':
            if (isset($_POST['update_Caterogies'])) {
                //lấy dữ liệu về
                $tendm = $_POST['tendm'];
                $fileup = $_FILES['fileup']['name'];
                $id = $_POST['id'];
                if ($fileup != "") {
                    $target_file = IMG_PATH_ADMIN . $fileup;
                    move_uploaded_file($_FILES['fileup']['tmp_name'], $target_file);
                } else {
                    $fileup = '';
                }
                update_dm($tendm, $fileup, $id);
                $dsdm = get_dm_new(12);
                include 'View/caterogies.php';
            } else {
                include 'View/updateCaterogies.php';
            }
            break;
        case 'addCaterogies':
            if (isset($_POST['addCaterogies'])) {
                //lấy dữ liệu về
                $tendm = $_POST['tendm'];
                $fileup = $_FILES['fileup']['name'];
                insert_dm($tendm, $fileup);
                //upload hình ảnh
                $target_file = IMG_PATH_ADMIN . $fileup;
                move_uploaded_file($_FILES['fileup']['tmp_name'], $target_file);
                //trở về danhmuc
                $dsdm = get_dm_new(12);
                include 'View/caterogies.php';
            } else {
                include 'View/addCaterogies.php';
            }
            break;
        case 'user':
            $usercheck = get_user();
            include 'View/user.php';
            break;
        case 'deluser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                user_delete($id);
            }
            $usercheck = get_user(10);
            include 'View/user.php';
            break;
        case 'post':
            $posts = get_pending_posts();
            include 'View/post.php';
            break;
        case 'delpost':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                post_delete($id);
                $posts = get_left_blog(10);
                include 'View/post.php';
            }
            break;
        case 'approve_post':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                approve_post($id);
            }
            $posts = get_approved_posts();
            include 'View/post.php';
            break;
        case 'approved_posts':
            $approved = get_approved_posts();
            include 'View/approved_posts.php';
            break;
        case 'approve_user':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                approve_user($id);
            }
            $usercheck = get_user();
            include 'View/user.php';
            break;
            break;
        case 'approved_user':
            $approved = get_approved_user();
            include 'View/approved_user.php';
            break;
        default:
            include 'View/home.php';
            break;
    }
}

include 'View/footer.php';
