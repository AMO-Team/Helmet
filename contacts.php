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
    <!-- HEADER -->
    <?php include 'header.php'; ?>
    <!-- HEADER / -->
    <!-- CONTENT -->
	<div class="container-fluid content-form">
       <div class="row">
           <div class="col-xs-12 text-center">
             <h3>КОНТАКТЫ</h3>
           </div>
           <div class="text-center">
               <p class="line">_______</p>
           </div>
           <div class="col-xs-12 text-center">
               <button class="btn btn-act">Харьков</button>
               <button class="btn">Киев</button>
               <button class="btn">Одесса</button>
           </div>
		   <div id="map">
			   <div class="googleMap text-center">
				   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4312.143402687286!2d36.319694367295064!3d50.0110589247435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a7586ecdfcab%3A0xcac655a0957f6d8e!2z0LLRg9C7LiDQkNC60LDQtNC10LzRltC60LAg0J_QsNCy0LvQvtCy0LAsIDI3MSwg0KXQsNGA0LrRltCyLCDQpdCw0YDQutGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1438853811437" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			   </div>  
			   <div class="googleMap text-center hidden">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20329.191765090083!2d30.511008599999975!3d50.43832580000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cefbc8ddc09d%3A0x486679d126f041ea!2z0LLRg9C7LiDQktC-0LvQvtC00LjQvNC40YDRgdGM0LrQsCwgNjksINCa0LjRl9Cy!5e0!3m2!1suk!2sua!4v1439127322922" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			   </div>  
			   <div class="googleMap text-center hidden">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10990.231464514145!2d30.721575000000037!3d46.47726500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6318dd606b863%3A0xadc5c5caa38e3120!2z0LLRg9C7LiDQnNC10YfQvdC40LrQvtCy0LAsIDc00JAsINCe0LTQtdGB0LAsINCe0LTQtdGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1suk!2sua!4v1439127488254" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			   </div>  
		   </div>
           <div class="form">
               <div class="col-sm-3 col-sm-offset-2 col-xs-10 col-xs-offset-1 col-xs-offset-right-1">
                   <h4 class="bold">Харьков</h4>
                   <p>Тренировочная площадка мотошколы «В шлеме» находится на территории комлекса «Радмир Экспохолл»</p>
                   <div>
                   <div>                      
                       <div>
                           <p class="left"><i class="fa fa-phone first-i"></i></p>
                           <p><span>+38 067 719 1430(Сергей)</span><br>                        
                           <span>+38 095 149 6690(Николай)</span></p>
                       </div>
                   </div>
                   </div>
                   <div>
                       <div>
                           <p class="left"><i class="fa fa-map-marker"></i></p>
                           <p><span class="address">Харьков, ул. Академика Павлова 271</span></p>
                       </div>
                   </div>
                   <div>
                       <div>
                           <p class="left"><i class="fa fa-envelope"></i></p>
                           <p><a href="mailto:vshleme.shcool@gmail.com">vshleme.shcool@gmail.com</a></p>
                       </div>
                   </div>
               </div>
               <div class="col-sm-5 col-sm-offset-right-2 col-xs-12 inp-form">
                   <h4 class="bold">Записаться на курс</h4>
                   <p>Введите ваши данные и мы вам перезвоним</p>
                   <form name="form1" action="user.php" method="post">
                       <input type="text" class="form-control" placeholder="Ваше Имя" name="name1" required><i class="fa fa-user k-icon"></i><br>
                       <input type="email" class="form-control" placeholder="Ваш E-mail" name="email" required><i class="fa fa-envelope k-icon eml"></i><br>
                       <input type="text" class="form-control" placeholder="Город" name="city" required><i class="fa fa-arrow-circle-o-down k-icon"></i><br>
                       <input type="tel" class="form-control" placeholder="Ваш Телефон" name="phone" required><i class="fa fa-phone k-icon"></i><br>
                       <input type="submit" value="Отправить заявку" class="btn btn-info">
                   </form>
               </div>
           </div>
       </div>
   </div>
    <!-- CONTENT / -->
    <!-- FOOTER -->
	<?php include 'footer.php'; ?>
    <!-- FOOTER / -->
    
	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>