<?php
if(isset($_POST['name1']))
{
	$name=trim($_POST['name1']);
}
if(isset($_POST['email']))
{
	$email=trim($_POST['email']);
}
if(isset($_POST['city']))
{
	$city=trim($_POST['city']);
}
if(isset($_POST['phone']))
{
	$phone=trim($_POST['phone']);
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname="helmet";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users (name,email,city,number)
VALUES ('$name','$email','$city',$phone)";
if ($conn->query($sql) === TRUE) {
	echo "<script> alert('Заявку успішно відправлено');setTimeout (document.location='http://helmet/contacts.html', 3000)</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
