<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userVerificationCode = $_POST["verification_code"];
    if (isset($_SESSION['newPassword']) && $userVerificationCode === $_SESSION['newPassword']) {
        header('location: index.php?pg=reset_password');
    } else {
        
        echo "Verification code does not match. Please try again.";
    }
} else {
    
    echo "Invalid request method.";
}
?>