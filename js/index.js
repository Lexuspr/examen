$(document).ready(function(){
	
	$.ajax({
		type: 'POST',
		url: 'cargar_paises.php',
		data: {'peticion': 'cargar_listas'}
	})
	.done(function(listas_pais){
		$('#lista_pais').html(listas_pais)
	})
	.fail(function(){
		alert ('Hubo un error al cargar los Paises')
	})

$('#lista_pais').on('change',function(){
var	id = $('#lista_pais').val()

$.ajax({
		type: 'POST',
		url: 'cargar_ciudades.php',
		data: {'id': id}
	})
	.done(function(listas_pais){
		$('#lista_ciudad').html(listas_pais)
	})
	.fail(function(){
		alert ('Hubo un error al cargar las Ciudades ')
	})
})

})