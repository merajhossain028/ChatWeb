<?php
include_once("php/config.php");
session_start();
if(isset($_SESSION['id'])){
    header("location: users.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <!-- css linked -->
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="circle"></div>
    <div class="circle circle2"></div>
    <div id="container">
        <h2>Sign Up</h2>
        <form action="" autocomplete="off" id="signupData">
            <div id="errors">Invalid Email Address</div>
            <input type="text" name="fname" id="fname"  class="name" placeholder="First Name" required>
            <input type="text" name="lname" id="lname"  class="name" placeholder="Last Name" required><br>
            <input type="email" name="email" id="email" placeholder="Email" required><br>
            <input type="password" name="password" id="password" placeholder="Password" required><br>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required><br>
            <input type="file" name="image" id="image" required><br>
            <input type="submit" name="signup" id="signup" value="Sign Up">
            <p>Don't have a account? <a href="login.php">Login</a></p>
        </form>
    </div>

    <!-- jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/signup.js"></script>
</body>
</html>