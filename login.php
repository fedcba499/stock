<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="shortcut icon" href="unit.ico" />
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="Stationary Logo">
    <div class="container">
        <h1>STATIONARY DEMAND FORM</h3>
        <p>Login</p>
       
        <form action="login.php" method="post">
            <?php include('errors.php'); ?>
            <input type="text" name="username" id="username" placeholder="Enter your Username">
            <input type="password" name="password" id="password" placeholder="Enter your Password">
            <button type="submit" class="btn" name="login_user">Login</button> 
            
        </form>
    </div>
</body>
</html>