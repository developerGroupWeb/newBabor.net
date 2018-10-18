$(document).ready(function() {
	new WOW().init();

	$(".singupPage-home").hide();

		$(".singupPage-call").click(function() {
			$(".singupPage-home").show();
			$(".secondFace-home").hide();
		});

		$(".go-backHome").click(function(){
			$(".singupPage-home").hide();
			$(".secondFace-home").show();
		})
})