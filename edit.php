<?php
// Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stock";

    // Create a database connection
    $conn = mysqli_connect($server, $username, $password, $dbname);
?>
<?php
//getting id from url
$id = $_GET['id'];
// echo $id;

$item = $_GET['item'];
// echo $item;

$table = $_GET['table'];
// echo $table;

//selecting data associated with this particular id
// $result = mysqli_query($conn, "SELECT * FROM ffl WHERE id=$id");

$sql = "SELECT * FROM $table WHERE id=$id";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
	$change = $row[$item];
}

if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($conn, $_POST['id']);
$change = mysqli_real_escape_string($conn, $_POST['change']);	

if(empty($change) ) {	
echo '<font color="red">Field is empty.</font><br>';		
} else {	
$result = mysqli_query($conn, "UPDATE $table SET $item ='$change' WHERE id=$id");
header("Location: index.php");
}
}
?>
<html>
<head>	
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="shortcut icon" href="unit.ico" />
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<img class="bg" src="bg.jpg" alt="Engr Logo">
    <div class="container">
        <h1>STATIONARY DEMAND FORM</h3>
        <p>Login</p>
	
	<form name="form1" method="post" action="editprocess.php">
		<table border="0">
			
		<tr> 
				<td><?php $item ?></td>
				<td><input type="text" name="change" value="<?php echo $change;?>"></td>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="hidden" name="item" value=<?php echo $_GET['item'];?>></td>
				<td><input type="hidden" name="table" value=<?php echo $_GET['table'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
				
			</tr>
		</table>
	</form>
	</div>
</body>
</html>