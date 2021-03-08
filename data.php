<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","store");

$query = "SELECT id, blue, black FROM $table WHERE id = $sno";
$result = mysqli_query($conn, $query);

$sqlQuery = "SELECT id, name, marks, eng FROM marks ORDER BY id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>