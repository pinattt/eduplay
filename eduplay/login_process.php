<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

// Simulasi login sederhana
if ($email === "admin@eduplay.com" && $password === "123456") {
    $_SESSION['user'] = $email;
    header("Location: index.php");
} else {
    echo "<script>alert('Email atau kata sandi salah!'); window.location.href = 'login_register.html';</script>";
}
?>
