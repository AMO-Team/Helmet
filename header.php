<!DOCTYPE HTML>
<html>
<head>
    <title>Header</title>
    <meta charset="utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/favicon.jpg">
</head>
<body>

    <!-- HEADER -->
    <div class="container-fluid top-header">
        <div class="row mar">
            <div class="col-xs-12 col-sm-6 col-md-3 hov">
                <div>
                        <i class="fa fa-phone first-i"></i>
                    <div class="contant tc">
                        <p><span>+38 067 719 1430(Сергей)</span></p>
                        
                        <p><span>+38 095 149 6690(Николай)</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 hov">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p class="contant tc"><span>Харьков, ул. Академика Павлова 271</span></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 hov">
                <div>
                    <i class="fa fa-envelope"></i>
                    <p class="contant tc"><a href="mailto:vshleme.shcool@gmail.com">vshleme.shcool@gmail.com</a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="tc">
                    <div class="top-header-i-none"><a href="#"><i class="fa fa-camera-retro"></i></a></div>
                    <div class="top-header-i-none"><a href="#"><i class="fa fa-bold"></i></a></div>
                    <div class="top-header-i-none"><a href="#"><i class="fa fa-facebook"></i></a></div>
                    <div class="top-header-i-none"><a href="#"><i class="fa fa-twitter"></i></a></div>					
					<a href="#" class="k-login" onclick="loginFunction()">Log in</a>
					<script>
					function loginFunction() {
						var myWindow = window.open("http://helmet/signin.html", "", "width=500, height=400");
					}
					</script>					
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER / -->
    <!-- MENU -->
    <nav class="navbar navbar-default menu">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header manu-navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand menu-brand" href="#"><img src="img/logo.png" alt="Logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse menu-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav menu-ul-top">
                <li><a href="index.php">ГЛАВНАЯ</a></li>
                <li><a href="raspisanie.php">РАСПИСАНИЕ</a></li>
                <li><a href="news.php">НОВОСТИ</a></li>
                <li><a href="gallery.php">ГАЛЕРЕЯ</a></li>
                <li><a href="partners.php">ПАРТНЕРЫ</a></li>
                <li><a href="franshiza.php">ФРАНШИЗА</a></li>
                <li><a href="contacts.php">КОНТАКТЫ</a></li>
				<li><a href="chatm.php">ЧАТ</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- MENU / -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
