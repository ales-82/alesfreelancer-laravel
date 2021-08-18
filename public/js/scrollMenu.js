$(document).ready(main);

function main(){

	$("#Menu a").click(irA);
	
	function irA(){
		var seccion;

		seccion=$(this).attr("href");

		$("body, html").animate({
			scrollTop: $(seccion).offset().top -130
		},800);
		
		return false;
	}	

}
