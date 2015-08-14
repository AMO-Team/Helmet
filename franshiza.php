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
    <div clas="container-fluid">
      <div class="row">
         <div class="col-xs-12 text-center">
             <h3 class="a-menu">ФРАНШИЗА</h3>
         </div>
         <div class="text-center">
              <p class="a-menu">_______</p>
         </div>   
      </div>
    </div>
    <div class="container-fluid">
       <div class="row">
          <div class="col-xs-offset-2 col-xs-9">
             <h4 class="a-bold">Стать партнёром</h4>
             <p>Мотоциклы с каждым годом становятся всё популярнее, а профессиональное обучение - всё более востребованным. Если вы хотите открыть мотошколу в своём городе, то вы на верном пути!</p>
             <h4 class="a-bold">Мы обеспечим вас:</h4>
             <ul class="a-ulstyle">
               <li>- Методикой обучения.</li>
               <li>- Обучением ваших инструкторов по специальной программе.</li>
               <li>- Рекламной поддержкой на сайте Мотошколы и во внутренних источниках информации.</li>
               <li>- Рекламой в Google и соцсетях.</li>
               <li>- Юридическими консультациями.</li>
             </ul>
             <h4 class="a-bold">Что потребуется, чтобы стать нашим партнёром:</h4>
             <ul class="a-ulstyle">
               <li>- Учебный мотоцикл.</li>
               <li>- Полный комплект защитной экипировки для курсантов.</li>
               <li>- Разрешение на ведение предпринимательской деятельности.</li>
             </ul>
             <h4 class="a-bold">Какие функции выполняет представитель Мотошколы " шлеме":</h4>
             <ul class="a-ulstyle">
               <li>- Обучение езде на мотоцикле согласно нашим стандартам.</li>
               <li>- Консультация по выбору экипировки.</li>
               <li>- Консультации и помощь по выбору первого мотоцикла.</li>
               <li>- Проведение семинаров и открытых тренировок для увеличения уровня безопасности на дорогах.</li>
             </ul>
             <p>Для того чтобы стать частью нашей команды, вам необходимо заполнить заявку.</p>
          </div>
          <div class="col-xs-12 text-center a-forbutton">
			 <button type="button" class="btn a-btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ЗАПОЛНИТЬ ЗАЯВКУ</button>
          </div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="exampleModalLabel">Стати партнером</h4>
			  </div>
			  <div class="modal-body">
				<form name="form1" action="partner.php" method="post">
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Прізвище</label>
					<input type="text" class="form-control" id="recipient-name" name="fname" required>
				  </div>
				  <div class="form-group">
					<label for="recipient-name1" class="control-label">Ім'я</label>
					<input type="text" class="form-control" id="recipient-name1" name="lname" required>
				  </div>
				  <div class="form-group">
					<label for="recipient-name2" class="control-label">Рік народження</label>
					<input type="text" class="form-control" id="recipient-name2" name="year" required>
				  </div>
				  <div class="form-group">
					<label for="recipient-name3" class="control-label">Телефон</label>
					<input type="text" class="form-control" id="recipient-name3" name="phone" required>
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label">Адреса</label>					
					<textarea class="form-control" id="message-text" name="address"></textarea>
				  </div>				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Відправити заявку</button>	
			  </div>
			  </form>
			</div>
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