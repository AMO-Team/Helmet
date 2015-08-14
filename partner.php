<?php
if(isset($_POST['fname']))
{
	$fname=trim($_POST['fname']);
}
if(isset($_POST['lname']))
{
	$lname=trim($_POST['lname']);
}
if(isset($_POST['year']))
{
	$year=trim($_POST['year']);
}
if(isset($_POST['phone']))
{
	$phone=trim($_POST['phone']);
}
if(isset($_POST['address']))
{
	$address=trim($_POST['address']);
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname="helmet";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO partner (fname,lname,year,number,address)
VALUES ('$fname','$lname','$year','$phone','$address')";
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Заявку успішно відправлено');setTimeout (document.location='http://helmet/franshiza.php', 3000)</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
