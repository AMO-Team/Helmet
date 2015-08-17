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
    <!-- HEADER -->
	<?php include 'header.php'; ?>
    <!-- HEADER / -->
    <!-- MENU -->
    
    <!-- MENU / -->
    <div class="container panel">
		<div class="col-xs-12 text-center">
             <h3 class="a-menu">ЧАТ</h3>
         </div>
		 <div class="text-center">
              <p class="a-menu">_______</p>
         </div>
        <form class="form-horizontal k-form-chat" action="chat.php" method="post">
            <div class="form-group row">
                <label for="input1" class=" col-sm-4 col-md-4 control-label k-label-chat">Ім'я</label>
                <div class=" col-sm-8 col-md-8 text-center">
                    <input type="text" class="form-control k-form k-input-chat" id="input1" name="name" placeholder="name" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="text" class="col-sm-4 col-md-4 control-label k-label-chat">Повідомлення</label>
                <div class="col-sm-8 col-md-8">                    
					<textarea id="text" class="form-control k-form k-input-chat" name="message" placeholder="message" required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-offset-4 col-sm-8 col-md-offset-4 col-md-8">
                    <button type="submit" class="btn btn-info k-btn-chat">Відправити</button>
                </div>
            </div>		
        </form>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname="helmet";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql="select * from chat ORDER BY date desc";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);			
			echo "<div class='row'>";
			echo "<div class=' col-xs-offset-1 col-xs-10 col-xs-offset-right-1'>";
			while($row = $result->fetch_assoc()){
			echo "<h4 class='k-inline k-name-chat alert alert-success'>".$row["name"]."</h4><p class='k-pd'>".$row["date"]."&nbsp;&nbsp;  ".$row["time"]."</p><p class='alert alert-info'>".$row["text"]."</p>";	
			}
			echo "</div>";
			echo "</div>";
			$conn->close();
		?>
    </div>
	<?php include 'footer.php'; ?>
</body>
</html>
