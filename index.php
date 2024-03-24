<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body style="background-image: url('bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
<div class="container" style="max-width: 600px; margin: 0 auto; padding: 50px; margin-top: 80px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); display: flex; justify-content: center; align-items: center;">

        <div class="text-center">
        <h1 style="color: #FF5733;">Welcome new user!</h1>        
        <h4><i>It's me, <a href="https://www.facebook.com/nicolemae.rosco/">Nicole Mae Rosco!</a></i></h4>
        <p><br>I am excited to have you as a member of our community. Feel free to explore this website and all the features available to you. If you have any questions or need assistance, don't hesitate to contact me. <br></p>
        <a href="logout.php" class="btn btn-warning">Logout</a>
        </div>
    </div>
</body>
</html>