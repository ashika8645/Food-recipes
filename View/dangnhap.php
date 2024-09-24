<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Double Slider Login / Registration Form</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../layout/css/login.css">
</head>

<body>

    <div class="box_center">
        <?php
        if (isset($_SESSION['tb_dangnhap']) && ($_SESSION['tb_dangnhap'] != " ")) {
            echo $_SESSION['tb_dangnhap'];
            unset($_SESSION['tb_dangnhap']);
        }

        ?>
        <div class="container-login" id="container">
            <h2>

            </h2>
            <div class="form-container register-container">
                <form action="index.php?pg=adduser" method="POST">
                    <h1>Register here</h1>
                    <input type="text" placeholder="Name" name="username" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button type="submit" name="register">Register</button>
                    <span>or use your account</span>
                    <div class="social-container">
                        <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
                        <a href="#" class="social"><i class="lni lni-google"></i></a>
                        <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
                    </div>
                </form>
            </div>
            <div class="form-container login-container">
                <form action="index.php?pg=login" method="POST">
                    <h1>Login here</h1>
                    <input type="text" placeholder="User name" name="username" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <div class="content">
                        <div class="checkbox">
                            <input type="checkbox" name="dangnhap" id="checkbox">
                            <label>Remember me</label>
                        </div>
                        <div class="pass-link">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>

                    <button type="submit" name="login">Login</button>
                    <span>or use your account</span>
                    <div class="social-container">
                        <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
                        <a href="#" class="social"><i class="lni lni-google"></i></a>
                        <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
                    </div>
                </form>
            </div>

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1 class="title">Hello <br> friends</h1>
                        <p>if Yout have an account, login here and have fun</p>
                        <button class="ghost" id="login">Login
                            <i class="lni lni-arrow-left login"></i>
                        </button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1 class="title">Start yout <br> journy now</h1>
                        <p>if you don't have an account yet, join us and start your journey.</p>
                        <button class="ghost" id="register">Register
                            <i class="lni lni-arrow-right register"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="overlay-forgot-password">
                <form class="forgot-password-form" action="index.php?pg=send_reset_link" method="post">
                    <div class="overlay-content">
                        <h1>Forgot Password</h1>
                        <span>Enter your email address to reset your password.</span>
                        <input type="email" placeholder="Email" name="email">
                        <button type="submit">Send Reset Link</button>
                    </div>
                </form>
            </div>

        </div>
        <?php
        if (isset($tb) && ($tb != "")) {
            echo "<h3 style='color:red'>" . $tb . "</h3>";
        }
        ?>

    </div>

</body>
<script src="../layout/script.js"></script>


</html>