<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}

$con = mysqli_connect("localhost", "root", "", "contact_us");

$id = $_GET['id'];
mysqli_query($con, "DELETE FROM user_data WHERE id='$id'");

header("Location: dashboard.php");
?>
