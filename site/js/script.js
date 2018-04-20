$(document).ready(function () {
    
    /* 
    * Efeito de rolagem e fechamento do menu ao clicar
    * (Filipe Daineze)
    --------------------------------------------- */
	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();
        /* Fecha o nav mobile do bootstrap ao clicar */
        if($('.navbar-toggle').css('display') !='none'){
            $('.navbar-toggle').trigger( "click" );
        }
		var id = $(this).attr('href'),
				targetOffset = $(id).offset().top;
		$('html, body').animate({
			scrollTop: targetOffset
		}, 500);
	});
    
});