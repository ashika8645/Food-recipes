<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="layout/assets/css/main.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="sidebar bg-primary">
            <ul>
                <li>
                    <a href="index.php"><i class="fa-solid fa-house ico-side"></i>Dashboards</a>
                </li>
                <li>
                    <a href="index.php?pg=caterogies"><i class="fa-solid fa-folder-open ico-side"></i>Quản lí danh mục</a>
                </li>
                <li>
                    <a href="index.php?pg=products"><i class="fa-solid fa-mug-hot ico-side"></i>Quản lí sản phẩm</a>
                </li>
                <li>
                    <a href="index.php?pg=user"><i class="fa-solid fa-user ico-side"></i>Quản lí thành viên</a>
                </li>
                <li>
                    <a href="index.php?pg=contact"><i class="fa-solid fa-user ico-side"></i>Quản lí liên hệ</a>
                </li>
                <li>
                    <a href="index.php?pg=post"><i class="fa-solid fa-user ico-side"></i>Duyệt bài viết</a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>
<script src="../public/ckeditor/ckeditor.js"></script>
<script>
    ClassicEditor.replace('textarea');
</script>