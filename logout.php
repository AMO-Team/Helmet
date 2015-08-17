<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="helmet";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1 = "UPDATE usersite SET log=false";
	$result1 = mysqli_query($conn, $sql1);
	echo "<script>setTimeout (document.location='http://helmet/index.php', 3000)</script>";
?>

