<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÔNG TIN CẬP NHẬT</title>
    <link rel="stylesheet" href="../css/app.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container-fluid {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h2>THÔNG TIN BẠN CẬP NHẬT</h2>
        <div class="form-group">
            <label>user name:</label>
            <?= $username ?>
        </div>
        <div class="form-group">
            <label>E-mail:</label>
            <?= $email ?>
        </div>
        <div class="form-group">
            <label>ảnh đại diện:</label>
            <img src="<?= IMG_PATH_ADMIN . $user_image ?>" alt="<?= $username ?>" width="80px" />
        </div>
    </div>
</body>

</html>
