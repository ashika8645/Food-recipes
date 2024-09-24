<?php
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
    extract($_SESSION['s_user']);
    $idupdate = $id;
    $imgpath = IMG_PATH_USER . $user_image;
    if (is_file($imgpath)) {
        $user_image = '<img src="' . $imgpath . '" alt="" width="80px">';
    } else {
        $user_image = '';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../layout/css/login.css">
    <style>
        .container-login {
            background-color: #fff;
            border-radius: 25px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 0;
            width: 500px;
            padding: 20px 0;
        }

        .box_center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form {
            padding: 10px  10px 0px 10px ;
            text-align: left; 
        }

        button {
            margin: 10px auto;
            display: flex;
            align-items: center;
        }
        
    </style>
</head>

<body>
    <div class="box_center">
        <div  class="container-login" id="container">
            <form action="index.php?pg=update_user" method="POST" enctype="multipart/form-data">
            <div class="container">
                <label for="username"><b>Tên đăng nhập</b></label>
                <input type="text" id="username" name="username" value="<?= $username ?>">
                <label for="email"><b>Tên E-mail</b></label>
                <input type="text"  id="email" name="email" value="<?= $email ?>">
                <label for="password"><b>Mật khẩu</b></label>
                <input type="password" id="password" name="password" value="<?= $password ?>">
                <div class="custom-file">
                <label for="user_image"><b>Ảnh của bạn</b></label>
                    <input type="file" name="user_image" class="custom-file-input" id="exampleInputFile">
                    <?= $user_image ?>
                </div>
                <input type="hidden" name="id" value="<?= $idupdate ?>">
                <button type="submit"  name="capnhat">cập nhật</button>
            </div>
        </form>
        </div>

</body>
</div>

</html>