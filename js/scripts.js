$(document).ready(function(){
	/*script for contact page*/
	$(".content-form > div >div:nth-of-type(3) button").click(function(){
		$(".content-form > div >div:nth-of-type(3) button").each(function(){
			$(this).removeClass("btn-act");
		});
		$(this).addClass("btn-act");
	});
	$(".content-form > div >div:nth-of-type(3) button:nth-of-type(1)").click(function(){
		$(".googleMap").each(function(){
			$(this).addClass("hidden");
			$("#map div:nth-of-type(1)").removeClass("hidden");
		});
		$(".form > div:nth-of-type(1) h4").text("Харьков");
		$(".address").text("Харьков, ул. Академика Павлова 271");
	});
	$(".content-form > div >div:nth-of-type(3) button:nth-of-type(2)").click(function(){
		$(".googleMap").each(function(){
			$(this).addClass("hidden");
			$("#map div:nth-of-type(2)").removeClass("hidden");
		});
		$(".form > div:nth-of-type(1) h4").text("Киев");
		$(".address").text("Киев, ул. Володимирска 69");
	});
	$(".content-form > div >div:nth-of-type(3) button:nth-of-type(3)").click(function(){
		$(".googleMap").each(function(){
			$(this).addClass("hidden");
			$("#map div:nth-of-type(3)").removeClass("hidden");
		});
		$(".form > div:nth-of-type(1) h4").text("Одесса");
		$(".address").text("Одесса, ул. Мечникова 74А");
	});
	$(".form-control").focus(function(){
		$(this).addClass("k-inp");
		$(".form form input.k-inp + i").addClass("k-icon-act");
	});
	$(".form-control").blur(function(){
		$(this).removeClass("k-inp");
		$(".form form input + i").removeClass("k-icon-act");
	});
	/* end script for contact page*/
	/*add click menu*/

	$(".menu-ul-top li a").click(function(){

		$(".menu-ul-top li a").each(function(){
		$(this).removeClass("menu-active");
		});
		$(this).addClass("menu-active");
		
	});
	/*end click menu*/
	/*$(".k-form-aut").submit(function(){
		$(".logout").removeClass("hidden");
		$(".login").addClass("hidden");
	});*/
});//end ready
	

