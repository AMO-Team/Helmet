<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Chat</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/favicon.jpg">
</head>
<body>
<?php
if(isset($_POST['name']))
{
	$name=trim($_POST['name']);
}
if(isset($_POST['message']))
{
	$message=trim($_POST['message']);
}
$dt=date('Y.m.d');
$tm=date('H:i:s');
$servername = "localhost";
$username = "root";
$password = "";
$dbname="helmet";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO chat (date,time,name,text)
VALUES ('$dt','$tm','$name','$message')";
if ($conn->query($sql) === TRUE) {
	echo "<script>setTimeout (document.location='http://helmet/chatm.php', 3000)</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>
