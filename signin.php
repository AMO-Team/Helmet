<?php
if(isset($_POST['login']))
{
	$login=trim($_POST['login']);
}
if(isset($_POST['password']))
{
	$passw=trim($_POST['password']);
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname="helmet";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="select password,username from usersite where login='$login' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($passw==$row['password']){
	echo "<script>window.close()</script>";
	$sql1 = "UPDATE usersite SET log=true where login='$login'";
	$result1 = mysqli_query($conn, $sql1);
	}
	else
	{ echo "<h3>Неправильний логін або пароль</h3>";}
$us=$row['username'];
function out(){
	echo $us;
}
$conn->close();
?>

