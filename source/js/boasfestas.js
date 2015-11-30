$(document).ready(function(){

	$(".cesta").click(function(){
		var cesta = $(this).data('cesta');
		var titulo = $(this).data('titulo');
		var itens = $(this).data('itens');
		var preco = $(this).data('preco').split(',');

		$('#cesta .titulo-cesta p').html(titulo);
		$('#cesta .itens').html(itens+" ITENS");
		$('#cesta .preco').html("<span>R$</span> "+preco[0]+"<small>,"+preco[1]+"</small>");
		$('#cesta .carnes').load(cesta+".html");
		$('#cesta .padrao').load("padrao.html");

		$('#cesta .seta').animate({bottom:'0'});
		setTimeout(sumir, 5000);
	});

	$('.ver-lista').click(function(){
		//alert();
		$(this).fadeOut(300);
		$('.padrao').slideDown(300);
	});

	$('.fechar').click(function(){
		$('.padrao').hide();
		$('.ver-lista').show();
	});

});

function sumir(){
	$('#cesta .seta').animate({bottom:'-80px'});
}

function blinker() {
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500); 
}
setInterval(blinker, 1000);