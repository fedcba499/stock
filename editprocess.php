<?php
// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $dbname);
if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($conn, $_POST['id']);
$item = mysqli_real_escape_string($conn, $_POST['item']);
$table = mysqli_real_escape_string($conn, $_POST['table']);
$change = mysqli_real_escape_string($conn, $_POST['change']);	

if(empty($change) ) {	
echo '<font color="red">Field is empty.</font><br>';		
} else {	
$result = mysqli_query($conn, "UPDATE $table SET $item ='$change' WHERE id=$id");
header("Location: index.php");
}
}
?>