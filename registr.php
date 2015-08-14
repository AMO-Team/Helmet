<!DOCTYPE HTML>
<html>
<head>
    <title>Франшиза</title>
    <meta charset="utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/favicon.jpg">
</head>
<body>
<?php
if(isset($_POST['username']))
{
	$usern=trim($_POST['username']);
}
if(isset($_POST['login']))
{
	$login=trim($_POST['login']);
}
if(isset($_POST['password']))
{
	$passw=trim($_POST['password']);
}
$bol=true;
$servername = "localhost";
$username = "root";
$password = "";
$dbname="helmet";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO usersite (username,login,password,log)
VALUES ('$usern','$login','$passw',$bol)";
if ($conn->query($sql) === TRUE) {
	echo "<h4 class='text-center'>Реєстрацію успішно завершено</h4>";
	echo "<div class='text-center'><button class='btn btn-info' onclick='window.close();'>Close</button></div>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
