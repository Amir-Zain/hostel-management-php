<?php
session_start();
include 'db_connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['username'];
    $b = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM admin_tb WHERE username='$a' and password='$b' ");
    if (mysqli_num_rows($query) < 1) {
        $_SESSION['msg'] = 'login failed user not found!';
        $msg = 'login failed user not found!';
        header('location:login.php?msg=' . $msg);
    } else {
        $row = mysqli_fetch_array($query);
        $_SESSION['id'] = $row['id'];

        header('location:add_warden.php');
    }
}
