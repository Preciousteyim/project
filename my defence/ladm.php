<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us</title>
    <link rel="stylesheet" href="css/ladm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include('includes/header.php');
    ?>
    <form method="POST" action="ladmprocess.php">
        <h2>Neltech Hub - Admin Login</h2>
        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="use@gmail.com" required><br><br> 
        <label for="password">Password:</label><br>
        <input type="password" name="pass" required><br><br> 
        <button type="submit">Login</a></button> 
        <center><a href="">Forgot Password</a></center>
    </form>    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>