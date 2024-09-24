<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Double Slider Login / Registration Form</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
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
        form{
            padding: 0;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="box_center">
    <div class="container-login" id="container">
        <div class="reset_password" id="verification_code">
            <form action="index.php?pg=reset_password" method="POST">
                <h2>Enter your new password</h2>
                <input type="password" placeholder="password" name="reset_password">
                <button type="submit" name="change">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>

<script>
    function showNotification(message) {
        var notification = document.getElementById("notification");
        notification.innerHTML = message;
        notification.style.display = "block";
    }
    showNotification("<?php echo $message; ?>");
</script>

</html>