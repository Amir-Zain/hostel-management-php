<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include 'db_connect.php';
    $result = $conn->query("delete from addstudent_tb where id=$id") or die(mysqli_error());
    header('location:addstudent.php?task=succesfully');
} else {
    header('location:addstudent.php?task=failed');
}
?>s