<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng bài viết</title>
    <!-- <link rel="stylesheet" href="./layout/css/app.css"> -->
    <style>


        form {
            position: relative;
            background-color: #fff;
            border-radius: 25px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            min-height: 0;
            padding: 20px;
            max-width: 600px;
            z-index: 10;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }

        .add {
            position: fixed;
            right: 0;
            bottom: 0;
            margin: 20px;
            height: 45px;
            width: 45px;
            border-radius: 50%;
            border: none;
            background-color: #4bb6b7;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            z-index:11 ;
        }

        .hidden {
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: none;
        }

        .user {
            display: flex;
            margin: 10px 0;
        }
        .user img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .form-submit{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .add_post {
            
            border-radius: 20px;
            border: 1px solid #4bb6b7;
            background-color: #4bb6b7;
            color: #fff;
            font-size: 15px;
            font-weight: 700;
            padding: 12px 80px;
            letter-spacing: 1px;
            text-transform: capitalize;
            transition: 0.3s ease-in-out;
        }

        .add_post:hover {
            letter-spacing: 3px;
        }

        .add_post:active {
            transform: scale(0.95);
        }

        .add_post:focus {
            outline: none;
        }

        .form-group input {
            background-color: #eee;
            border-radius: 10px;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        @media screen and (max-width: 767px) {
            form {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
        extract($_SESSION['s_user']);
        $html_user = '
    <img src="' . IMG_PATH_ADMIN . $user_image . '" alt="' . $username . '" width="80px" />
    <a href="../index.php?pg=myaccount" class="user-link">' . $username . '</a>
    ';
    ?>
        <button class="add">+</button>
        <form class="hidden" action="index.php?pg=add_post" method="POST" enctype="multipart/form-data">
            <h1>Đăng bài viết</h1>
            <div class="user">
                <?= $html_user; ?>
            </div>
            <div class="form-group">
                <label for="image">Ảnh sản phẩm</label>
                <div class="custom-file">
                    <input type="file" name="fileup" class="custom-file-input" id="exampleInputFile">
                </div>
            </div>
            <div class="form-group">
                <label for="title">Tiêu đề:</label>
                <input type="text" class="title" name="title" id="title" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="content">Nội dung:</label>
                <textarea id="content" name="content"></textarea>
            </div>
            <div class="form-submit">
            <button type="submit" class="add_post" name="add_post">đăng bài</button>
            </div>
        </form>
    <?php
    } else {
        $html_user = '<a href="../index.php?pg=dangnhap" target="_parent">chưa đăng nhập</a>';
    }
    ?>
    <script src="../ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('textarea'))
            .catch(error => {
                console.error(error)
            });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".add").click(function() {
                $(".hidden").toggle();
            });
        });
    </script>
</body>

</html>