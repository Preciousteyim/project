<?php
include("dbconnect.php");

// Use $_POST['email'] and $_POST['pass'] to access POST data
$email = $_POST['email'];
$pass = $_POST['pass'];
$hashed = password_hash($pass, PASSWORD_BCRYPT);


// Prepare the SQL statement
$sql = "SELECT * FROM register WHERE email = '$email' AND password = '$hashed'";

// Execute the query
$result = mysqli_query($connect, $sql);

// Check if the login is successful
if (mysqli_num_rows($result) > 1) {
    echo "Failed to login";
   
} else {
    echo"<script>alert('login Successfully')</script>";
    header("Location:student dash/dash.php");
}

// Close the database connection
mysqli_close($connect);
?>
