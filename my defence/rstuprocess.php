<?php
// Collecting form data
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$pass = $_POST['pass'];
$hashed = password_hash($pass, PASSWORD_BCRYPT); 

// Importing the database connection file
include("dbconnect.php");

// check if email already exists
$qry = "SELECT * FROM register WHERE email = '$email'";
$result = mysqli_query($connect, $qry);
   if (mysqli_num_rows($result)>0) {
    echo " <script> alert ('email already exists');
    window.location = 'index.php';</script>";
   }

// Prepare the SQL statement (not using prepared statements for simplicity)
$sql = "INSERT INTO register (name, email, gender, password) VALUES ('$name', '$email', '$gender', '$hashed')";

// Execute the SQL query
if ($connect->query($sql) === TRUE) {

//echo "Data inserted successfully";
    echo"<script>alert('Registered Successfully')</script>";
    header("Location:lstu.php");
}
else {
    echo "Error: " . $connect->error;
}

// Closing the connection
$connect->close();
?>
