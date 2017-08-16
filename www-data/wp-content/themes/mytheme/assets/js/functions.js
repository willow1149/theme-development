$(document).ready(function(){
	showhidemenu();
});

function showhidemenu(){
	$(".hamnburger-btn").click(function(){
		$(".hamburger").toggleClass("is-active");
		$(".main-nav").toggleClass("off-canvas");
	});
}