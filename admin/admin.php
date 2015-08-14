<?php
if(isset($_POST['login']))
{
	$login=trim($_POST['login']);
}
if(isset($_POST['passw']))
{
	$passw=trim($_POST['passw']);
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname="helmet";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select login,password from admin";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($login==$row['login'] && $passw==$row['password']){
	require('admininfo.html');
}
else{
	require('index.html');
	echo "<h3 class='k-h3 text-center'>Неправильний логін або пароль</h3>";
}
$conn->close();
?>
