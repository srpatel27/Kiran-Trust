<?php
$con = mysqli_connect("localhost", "root", "", "contact_us");

if (!$con) {
    die("Database connection failed");
}

if (isset($_POST['sb'])) {

    $full_name = $_POST['name'];
    $email     = $_POST['email'];
    $message   = $_POST['message'];

    $query = "INSERT INTO user_data (full_name, email, message)
              VALUES ('$full_name', '$email', '$message')";

    mysqli_query($con, $query);

    echo "<h2 style='color:green;text-align:center;'>Thank you! Message received.</h2>";
}
?>
