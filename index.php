<?php 
session_start(); 

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo strtoupper($_SESSION['username']); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="unit.ico" />
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        #chart-container {
            width: 100%;
            height: auto;
        }
    </style>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="Chart.min.js"></script>
</head>
<body>
    <img class="bg" src="bg.jpg" alt="Staionary">
    <div class="container">
        <h1>STATIONARY DEMAND FORM</h1>
        <p>WELCOME</p>
        <?php if (isset($_SESSION['success'])) : ?>

            <h3>
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                ?>
            </h3>

        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo strtoupper($_SESSION['username']); ?></strong></p>
            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?> 
           
        <form action="index.php" method="post">
            <label>Select Month to Place Demand</label>
            <select id="month" name="month">
                <option value="jan" <?= !empty($_POST) && $_POST['month'] == 'jan' ? 'selected' : '' ?>>jan</option>
                <option value="feb"<?= !empty($_POST) && $_POST['month'] == 'feb' ? 'selected' : '' ?>>feb</option>
            </select>
            <?php
                $coy = "acoy";
                if($_SESSION['username'] == "adjt" || $_SESSION['username'] == "skt"){
                    $coy = "bcoy";
                    echo "
                    <label>Select COY</label>
                    <select id='coy' name='coy'>
                        <option value='acoy'>A Coy</option>
                        <option value='bcoy'>B Coy</option>
                    </select>
                    ";
                } 
            ?>            
            <button type="submit" class="btn" name="demand" onclick="return datavalidation()">Submit</button> 
        </form>
        
    </div>  

    <div class="chart">
        <canvas id="myChart"></canvas>
    </div>    
    
    <?php include('server.php') ?>     
</body>
</html>
