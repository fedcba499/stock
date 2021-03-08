<?php

session_start();
// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$dbname = "stock";
$errors = array();

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check for connection success
if(!$conn){
    die("connection to this database failed due to" . mysqli_connect_error());
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            // switch($username){
            //     case 'swamy':
            //         header("location: data.php");
            //         exit();
    
            //     case 'suthari':
            //         header("location:chart.php");
            //         exit();
    
            //     default:
            //         echo "Wrong Username or Password";
            // }
            header('location: index.php');
            //redirected them to the index.php
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }

} 

// DEMAND DATA
if (isset($_POST['demand'])) {

    $month = mysqli_real_escape_string($conn, $_POST['month']);
    $coys = mysqli_real_escape_string($conn, $_POST['coy']);
    $sno = 0;

    if($month == 'jan'){
        $sno = 1;
    }else if($month == 'feb'){
        $sno = 2;
    }
    
    $table = "acoy";
    if($_SESSION['username'] == "acoy" ){
        $table = "acoydemand";
    } else if($_SESSION['username'] == "bcoy" ){
        $table = "bcoydemand";
    } else if($_SESSION['username'] == "adjt" && $coys = "acoy" ){
        $table = "acoyissue";
    } else if($_SESSION['username'] == "adjt" && $coys = "bcoy" ){
        $table = "bcoyissue";
    } else if($_SESSION['username'] == "skt" && $coys = "acoy" ){
        $table = "acoydist";
    } else if($_SESSION['username'] == "skt" && $coys = "bcoy" ){
        $table = "bcoydist";
    } 

    $query = "SELECT id, blue, black FROM $table WHERE id = $sno";
    $result = mysqli_query($conn, $query);
    $blue = "blue";
    $black = "black";



    
    if (mysqli_num_rows($result) > 0) {

        echo "<table id='test'>";

        echo "<tr>";            
          echo "<td>S.No</td><td>ITEMS</td><td>AUTH</td><td>DEMAND</td><td>UPDATE</td>";
          echo "</tr>";

        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";            
            echo "<td>01</td><td>Blue Pens</td><td >10</td><td>". $row['blue']."</td>" ;
            echo "<td bgcolor='green'><a href='edit.php?id=$row[id]&table=$table&item=$blue'><font color='white'>Edit</a>";  
            echo "</tr>";
            echo "<tr>";            
            echo "<td>02</td><td>Black Pens</td><td >05</td><td>". $row['black']."</td>" ;
            echo "<td bgcolor='green'><a href='edit.php?id=$row[id]&table=$table&item=$black'><font color='white'>Edit</a>";  
            echo "</tr>";
            $qty = [$row['blue'], $row['black']];
        }
        echo "</table>";
      } else {
        echo "0 results";
      }



        echo "

        <script>

        var item = ['Blue Pens', 'Black Pens'];
            var qty = ['";
            echo $qty[0];
            echo "','";
            echo $qty[1];
            echo "'];

            console.log(item);
            console.log(qty);

        function BuildChart(item, qty, chartTitle) {
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: item, // Our labels
                datasets: [{
                  label: chartTitle, // Name the series
                  data: qty, // Our values
                  backgroundColor: [ // Add custom color borders
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                  ],
                  borderColor: [ // Add custom color borders
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                  ],
                  
                  borderWidth: 1 // Specify bar border width
                }]
              },
              options: {
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behavior of full-width/height 
              }
            });
            return myChart;
          }

          var chart = BuildChart(item, qty, 'Number of pens');
          </script>
          ";
        


}

?>