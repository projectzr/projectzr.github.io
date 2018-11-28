$(document).ready(function () {
    /* Efeito de rolagem (Filipe Daineze)
    --------------------------------------------- */
	$('.intern-nav a[href^="#"]').on('click', function (e) {
		e.preventDefault();
		var id = $(this).attr('href'),
				targetOffset = $(id).offset().top;
		$('html, body').animate({
			scrollTop: targetOffset
		}, 500);
	});
    
    /* Data Atual
    --------------------------------------------- */
    var data = new Date();
    var dia = data.getDate(); // 1-31
    if(dia<10) { dia = '0'+dia }
    
    var meses = new Array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
    mes = meses[data.getMonth()];
    
    var ano = data.getFullYear(); // 4 dígitos
    
    document.getElementById("data-atual").innerHTML = dia+" de "+mes+" de "+ano+" - Portal Brasil Literário";
        
    
    /* Impede o Dropdown de sumir ao abrir um menu
     * de escola funciona apenas no celular
     -------------------------------------------- */
    $('li[data-type^="drop-escola"]').click(function() {
        
        $('.dropdown-menu').on("click.bs.dropdown", function (e) {
            if ($(window).width() < 768) {
                e.stopPropagation();
            }
        });
        
        if ($(window).width() < 768) {
            var rel = $(this).attr("data-target");
            var tg = document.getElementById(rel);
            tg.classList.toggle("nav-hide");
        }
    });
});

function fontMinus() {
    var $body = $('body'); //Cache this for performance
    var fontSize = 1;
    $('body').css('font-size', '1.5em'); // 2em grande - 1.5em normal
    $('body').removeClass('zoom');
}
function fontMax() {
    var $body = $('body'); //Cache this for performance
    var fontSize = 1;
    $('body').css('font-size', '2em'); // 2em grande - 1.5em normal
    $('body').addClass('zoom');
}


function addContrast() {
    var $head = $('head'); //Cache this for performance
    $('head').append('<link rel="stylesheet" type="text/css" href="css/contraste.css">');
    $('#addContrast').css('display', 'none');
    $('#remContrast').css('display', 'inline');
}
function remContrast() {
    var $head = $('head'); //Cache this for performance
    $('link[href="css/contraste.css"]').remove();
    $('#remContrast').css('display', 'none');
    $('#addContrast').css('display', 'inline');
}
