<?php

include "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $pass = $_POST["password"];
    $hashed = password_hash($pass, PASSWORD_BCRYPT);
    $sql = "INSERT INTO register (name, email, gender, password) VALUES ('$name', '$email', '$gender', '$hashed')";
    if (mysqli_query($link, $sql)){
        echo "data inserted";
        header(header: "location: index.php");
    }
    
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add student record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                            <label>name</label>
                            <input type="name" name="name" class="form-control" required>
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                    <div class="form-group">
                            <label>email</label>
                            <input type="email" name="email" class="form-control" required>
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>gender</label>
                            <input type="gender" name="gender" class="form-control" required>
                            <span class="invalid-feedback"><?php echo $gender_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input name="password" class="form-control"required></input>
                            <span class="invalid-feedback"><?php echo $hashed_err;?></span>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>